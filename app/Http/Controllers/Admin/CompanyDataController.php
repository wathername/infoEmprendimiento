<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CompanyDatum;
use App\PersonalInformation;
use App\Tipe;
use App\TutorDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyDataController extends Controller
{


    public function companyDataProyectoGradoII()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $proyecto_II = DB::table('company_datas')
            ->where('user_id', $user_id)
            ->where('matter_id', '4')
            ->first();


        if ($proyecto_II == null)
        {
            $type = $this->getType();
            $cities = $this->getCities();

            return view('admin.company-data.companyDataProyectoGradoII', compact( 'type', 'cities'));

        }else{

            return redirect('home')->with('message', 'Los datos de Proyecto de Grado II ya se encuentran registrados!');
        }

    }

    public function companyDataProyectoGradoI()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $proyecto_I = DB::table('company_datas')
            ->where('user_id', $user_id)
            ->where('matter_id', '3')
            ->first();


        if ($proyecto_I == null)
        {
            $type = $this->getType();
            $cities = $this->getCities();

            return view('admin.company-data.companyDataProyectoGradoI', compact( 'type', 'cities'));

        }else{

            return redirect('home')->with('message', 'Los datos de Proyecto de Grado I ya se encuentran registrados!');
        }

    }

    public function companyDataServicioComunitario()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $servicio = DB::table('company_datas')
            ->where('user_id', $user_id)
            ->where('matter_id', '2')
            ->first();

        //dd($servicio);
        if ($servicio == null)
        {
            $type = $this->getType();
            $cities = $this->getCities();

            return view('admin.company-data.companyDataServicioComunitario', compact( 'type', 'cities'));

        }else{

            return redirect('home')->with('message', 'Los datos de Servicio Comunitario ya se encuentran registrados!');
        }
        

    }

    public function companyDataPasantia()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $pasantia = DB::table('company_datas')
            ->where('user_id', $user_id)
            ->where('matter_id', '1')
            ->first();

        //dd($pasantia);

        if ($pasantia == null)
        {
            $type = $this->getType();
            $cities = $this->getCities();
            return view('admin.company-data.companyDataPasantia', compact( 'type', 'cities'));

        }else{

            return redirect('home')->with('message', 'Los datos de Pasantia ya se encuentran registrados!');
        }

    }


    private  function getCities()
    {
        $cities = City::orderBy('city', 'asc')->pluck('city', 'id');

        return $cities;
    }

    private  function getType()
    {
        $type = Tipe::orderBy('id', 'asc')->pluck('type', 'id');

        return $type;
    }

    public function companyDataUpdate(Request $request)
    {
        //dd($request);
        $user = Auth::user();
        $id = $user->id;
        //registro datos personales
        $personal_information = new PersonalInformation([
             'type_id' => $request['type_id'],
             'identification' => $request['identification'],
             'name' => $request['name'],
             'phone' => $request['phone'],
             'recidency_city_id' => $request['recidency_city_id'],
             'address' => $request['address'],
             'statu_id' => '4',

        ]);
        $personal_information->save();

        //registro datos company
        $persona_id = $personal_information->id;
        $company_data = new CompanyDatum([
                'email' => $request->get('email'),
                'web_side' => $request->get('web_side'),
                'economic_activity' => $request->get('economic_activity'),
                'personal_information_id' => $persona_id,
                'user_id' => $id,
                'statu_id' => '4',
                'matter_id' => $request->get('matter')
            ]);
        $company_data->save();
        $company_data_id = $company_data->id;


        //registro de tutor academico
        $personal_information_2 = PersonalInformation::where('identification', $request->get('identification_tutor'))->first();

         //dd($personal_information_2);

        if ($personal_information_2 == null )
        {

            //echo 'cedula no existe';
            //registro datos personales
            $personal_information2 = new PersonalInformation([
                'type_id' => $request['type_id_tutor'],
                'identification' => $request['identification_tutor'],
                'name' => $request['name_tutor'],
                'last_name' => $request['last_name_tutor'],
                'phone' => $request['phone_tutor'],
                'recidency_city_id' => $request['recidency_city_id_tutor'],
            ]);
            $personal_information2->save();
            $personal_information2_id = $personal_information2->id;

            //registro de tutor_date
            $tutor_data = new  TutorDatum([
                'personal_information_id' => $personal_information2_id,
                'company_data_id' => $company_data_id,
                'statu_id' => '4',
                'user_id' => $id,
                'matter_id' => $request['matter'],
                'email' => $request['email_tutor']
            ]);
            $tutor_data->save();


        }else{

            //echo 'cedula si existe el ID es: ';
            $personal_information_id = PersonalInformation::where('identification', $request->get('identification_tutor'))->first();
            //registro de tutor_date
            $tutor_data = new  TutorDatum([
                'personal_information_id' => $personal_information_id->id,
                'company_data_id' => $company_data_id,
                'user_id' => $id,
                'matter_id' => $request['matter'],
                'statu_id' => '4',
                'email' => $request['email_tutor']
            ]);
            $tutor_data->save();

        }

        return redirect('home')->with('message', 'Datos Empresariales Actualizados!');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $companydata = CompanyDatum::where('email', 'LIKE', "%$keyword%")
                ->orWhere('web_side', 'LIKE', "%$keyword%")
                ->orWhere('economic_activity', 'LIKE', "%$keyword%")
                ->orWhere('personal_information_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('statu_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $companydata = CompanyDatum::paginate($perPage);
        }

        return view('admin.company-data.index', compact('companydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.company-data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        CompanyDatum::create($requestData);

        return redirect('admin/company-data')->with('flash_message', 'CompanyDatum added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $companydatum = CompanyDatum::findOrFail($id);

        return view('admin.company-data.show', compact('companydatum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $companydatum = CompanyDatum::findOrFail($id);

        return view('admin.company-data.edit', compact('companydatum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $companydatum = CompanyDatum::findOrFail($id);
        $companydatum->update($requestData);

        return redirect('admin/company-data')->with('flash_message', 'CompanyDatum updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        CompanyDatum::destroy($id);

        return redirect('admin/company-data')->with('flash_message', 'CompanyDatum deleted!');
    }
}

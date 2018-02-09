<?php

namespace App\Http\Controllers;

use App\AcademicDatum;
use App\CompanyDatum;
use App\PersonalInformation;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $personalinformationId = $user->personalinformation->id;
        $personalinformation = PersonalInformation::findOrFail($personalinformationId);

        $academicDataId = $user->academicdatum->id;
        $academicData = AcademicDatum::findOrFail($academicDataId);

        //datos de pasantias
        $company_data_pasantia = $this->company_data_pasantia();
        $company_data_pasantia_status = $this->company_data_pasantia_status();
        if ($company_data_pasantia != '')
        {
            $tutor_data_pasantia = $this->tutor_data_pasantia();
        }


        //datos de servicio comunitario
        $company_data_servicio = $this->company_data_servicio();
        $company_data_servicio_status = $this->company_data_servicio_status();
        if ($company_data_servicio != '')
        {
            $tutor_data_servicio = $this->tutor_data_servicio();
        }


        //datos proyecto I
        $company_data_proyecto_I = $this->company_data_proyecto_I();
        $company_data_proyecto_I_status = $this->company_data_proyecto_I_status();
        if ($company_data_proyecto_I != '')
        {
            $tutor_data_proyecto_I = $this->tutor_data_proyecto_I();
        }

        //datos proyecto II
        $company_data_proyecto_II = $this->company_data_proyecto_II();
        $company_data_proyecto_II_status = $this->company_data_proyecto_II_status();
        if ($company_data_proyecto_II != '')
        {
            $tutor_data_proyecto_II = $this->tutor_data_proyecto_II();
        }


        //dd($tutor_data_pasantia );
        return view('home', compact(
            'personalinformation',
            'user',
            'academicData',
            'company_data_pasantia',
            'tutor_data_pasantia',
            'company_data_servicio',
            'tutor_data_servicio',
            'company_data_proyecto_I',
            'tutor_data_proyecto_I',
            'company_data_proyecto_II',
            'tutor_data_proyecto_II',
            'company_data_pasantia_status',
            'company_data_servicio_status',
            'company_data_proyecto_I_status',
            'company_data_proyecto_II_status'
            )
        );
    }

    public function getActivar()
    {
        $user = Auth::user();
        //dd($user);
        $url = route('confirmation', ['active' => $user->email]);

        \Mail::send('emails/registration', compact('user', 'url'), function ($m) use ($user){

            $m->from('clientes@galindeztravel.com.ve', 'Info-Emrendimiento-Ais');
            $m->to($user->email, $user->name)->subject('Activa tu cuenta!');
        });

        //Session::flash('message', 'Revise su email '.$user->email. ' para activar la cuenta!');

        return redirect('home')->with('message', 'Revise su email '.$user->email. ' para activar la cuenta!');

    }

    private function company_data_pasantia()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_pasantia = DB::table('company_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'company_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('cities', 'cities.id', '=', 'personal_informations.recidency_city_id')
            ->select('company_datas.*', 'company_datas.statu_id as statu_data_id', 'company_datas.id as company_data_id', 'company_datas.statu_id as status', 'personal_informations.*', 'types.*', 'cities.*')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '1')
            ->get();

        return $company_data_pasantia;
    }

    private function tutor_data_pasantia()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $tutor_data_pasantia = DB::table('tutor_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'tutor_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('company_datas', 'company_datas.id', '=', 'tutor_datas.company_data_id')
            ->select('tutor_datas.*', 'personal_informations.*', 'types.*', 'company_datas.*', 'tutor_datas.email as email_tutor' )
            //->where('company_data_id', $companyDataId)
            ->where('tutor_datas.matter_id', '1')
            ->where('tutor_datas.user_id', $user_id)
            ->get();

        return $tutor_data_pasantia;
    }

    private function company_data_pasantia_status()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_pasantia_status = DB::table('company_datas')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '1')
            ->first();

        return $company_data_pasantia_status;
    }

    private  function company_data_servicio()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_servicio = DB::table('company_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'company_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('cities', 'cities.id', '=', 'personal_informations.recidency_city_id')
            ->select('company_datas.*', 'company_datas.statu_id as statu_data_id', 'company_datas.id as company_data_id', 'company_datas.statu_id as status', 'personal_informations.*', 'types.*', 'cities.*')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '2')
            ->get();

        return $company_data_servicio;
    }

    private function company_data_servicio_status()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_servicio_status = DB::table('company_datas')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '2')
            ->first();

        return $company_data_servicio_status;
    }

    private function tutor_data_servicio()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $tutor_data_servicio = DB::table('tutor_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'tutor_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('company_datas', 'company_datas.id', '=', 'tutor_datas.company_data_id')
            ->select('tutor_datas.*', 'personal_informations.*', 'types.*', 'company_datas.*', 'tutor_datas.email as email_tutor')
            //->where('company_data_id', $companyDataId)
            ->where('tutor_datas.matter_id', '2')
            ->where('tutor_datas.user_id', $user_id)
            ->get();

        return $tutor_data_servicio;
    }

    private function company_data_proyecto_I()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_proyecto_I = DB::table('company_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'company_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('cities', 'cities.id', '=', 'personal_informations.recidency_city_id')
            ->select('company_datas.*', 'company_datas.statu_id as statu_data_id', 'company_datas.id as company_data_id', 'company_datas.statu_id as status', 'personal_informations.*', 'types.*', 'cities.*')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '3')
            ->get();


        return $company_data_proyecto_I;
    }

    private function company_data_proyecto_I_status()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_proyecto_I_status = DB::table('company_datas')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '3')
            ->first();

        return $company_data_proyecto_I_status;
    }

    private function tutor_data_proyecto_I()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $tutor_data_proyecto_I = DB::table('tutor_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'tutor_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('company_datas', 'company_datas.id', '=', 'tutor_datas.company_data_id')
            ->select('tutor_datas.*', 'personal_informations.*', 'types.*', 'company_datas.*', 'tutor_datas.email as email_tutor')
            //->where('company_data_id', $companyDataId)
            ->where('tutor_datas.matter_id', '3')
            ->where('tutor_datas.user_id', $user_id)
            ->get();

        return $tutor_data_proyecto_I;
    }

    private function company_data_proyecto_II()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_proyecto_II = DB::table('company_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'company_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('cities', 'cities.id', '=', 'personal_informations.recidency_city_id')
            ->select('company_datas.*', 'company_datas.statu_id as statu_data_id', 'company_datas.id as company_data_id', 'company_datas.statu_id as status', 'personal_informations.*', 'types.*', 'cities.*')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '4')
            ->get();


        return $company_data_proyecto_II;
    }

    private function company_data_proyecto_II_status()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $company_data_proyecto_II_status = DB::table('company_datas')
            ->where('company_datas.user_id', $user_id)
            ->where('company_datas.matter_id', '4')
            ->first();

        return $company_data_proyecto_II_status;
    }

    private function tutor_data_proyecto_II()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $tutor_data_proyecto_II = DB::table('tutor_datas')
            ->join('personal_informations', 'personal_informations.id', '=', 'tutor_datas.personal_information_id')
            ->join('types', 'types.id', '=', 'personal_informations.type_id')
            ->join('company_datas', 'company_datas.id', '=', 'tutor_datas.company_data_id')
            ->select('tutor_datas.*', 'personal_informations.*', 'types.*', 'company_datas.*', 'tutor_datas.email as email_tutor')
            //->where('company_data_id', $companyDataId)
            ->where('tutor_datas.matter_id', '4')
            ->where('tutor_datas.user_id', $user_id)
            ->get();

        return $tutor_data_proyecto_II;
    }




}//fin class

<?php

namespace App\Http\Controllers\Admin;

use App\AcademicDatum;
use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PersonalInformation;
use App\Tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalInformationController extends Controller
{
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
            $personalinformation = PersonalInformation::where('type_id', 'LIKE', "%$keyword%")
                ->orWhere('identification', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('origin_city_id', 'LIKE', "%$keyword%")
                ->orWhere('recidency_city_id', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $personalinformation = PersonalInformation::paginate($perPage);
        }

        return view('admin.personal-information.index', compact('personalinformation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.personal-information.create');
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
        $this->validate($request, [
			'type_id' => 'required',
			'name' => 'required|max:150',
			'last_name' => 'required|max:150',
			'phone' => 'required|max:16',
			'address' => 'required',
			'origin_city_id' => 'required',
			'recidency_city_id' => 'required'
		]);
        $requestData = $request->all();
        
        PersonalInformation::create($requestData);

        return redirect('admin/personal-information')->with('flash_message', 'PersonalInformation added!');
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
        $personalinformation = PersonalInformation::findOrFail($id);

        return view('admin.personal-information.show', compact('personalinformation'));
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
        $personalinformation = PersonalInformation::findOrFail($id);

        return view('admin.personal-information.edit', compact('personalinformation'));
    }


    public function personalInformation()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $personal = DB::table('personal_informations')
            ->where('user_id', $user_id)
            ->first();

       if ($personal == null OR $personal->statu_id == 3)
        {
            $id = Auth::user()->personalinformation->id;
            $type = Tipe::orderBy('id', 'asc')->pluck('type', 'id');
            $cities = City::orderBy('city', 'asc')->pluck('city', 'id');

            $personalinformation = PersonalInformation::findOrFail($id);

            return view('admin.personal-information.personal-information-edit', compact('personalinformation', 'type', 'cities'));

        }else{

            return redirect('home')->with('message', 'Los datos Personales ya se encuentran registrados!');
        }
    }


    public function personalInformationUpdate(Request $request)
    {
        $this->validate($request, [
            'type_id' => 'required',
            'identification' => 'required|unique:personal_informations|numeric',
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|max:16|min:16',
            'address' => 'required',
            'origin_city_id' => 'required',
            'recidency_city_id' => 'required'
        ]);

        $id = Auth::user()->id;

        DB::table('personal_informations')
            ->where('user_id', $id)
            ->update([
                'type_id' => $request->get('type_id'),
                'identification' => $request->get('identification'),
                'name' => $request->get('name'),
                'last_name' => $request->get('last_name'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'origin_city_id' => $request->get('origin_city_id'),
                'recidency_city_id' => $request->get('recidency_city_id'),
                'statu_id' => '4',
            ]);
        

        return redirect('home')->with('message', 'Datos Personales Actualizados!');
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
        $this->validate($request, [
			'type_id' => 'required',
			'name' => 'required|max:150',
			'last_name' => 'required|max:150',
			'phone' => 'required|max:16',
			'address' => 'required',
			'origin_city_id' => 'required',
			'recidency_city_id' => 'required'
		]);
        $requestData = $request->all();
        
        $personalinformation = PersonalInformation::findOrFail($id);
        $personalinformation->update($requestData);

        return redirect('admin/personal-information')->with('flash_message', 'PersonalInformation updated!');
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
        PersonalInformation::destroy($id);

        return redirect('admin/personal-information')->with('flash_message', 'PersonalInformation deleted!');
    }
}

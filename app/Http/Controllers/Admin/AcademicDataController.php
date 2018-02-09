<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AcademicDatum;
use App\Matter;
use App\MatterAcademicDatum;
use App\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AcademicDataController extends Controller
{


    public function academicData()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $academicos = DB::table('academic_datas')
            ->where('user_id', $user_id)
            ->first();


        if ($academicos == null OR $academicos->statu_id == 3)
        {
            $period = Period::orderBy('id', 'asc')->pluck('period', 'id');
            $matter = Matter::orderBy('matter', 'asc')->select('matter', 'id')->get();
            
            return view('admin.academic-data.academic-data-edit', compact( 'period', 'matter'));

        }else{

            return redirect('home')->with('message', 'Los datos Academicos ya se encuentran registrados!');
        }
    }


    public function academicDataUpdate(Request $request)
    {

        $this->validate($request, [
            'period_id' => 'required'
        ]);

        $user = Auth::user();
        $id = $user->id;

        $academicData = DB::table('academic_datas')
            ->where('user_id', $id)
            ->update([
                'period_id' => $request->get('period_id'),
                'statu_id' => '4',
            ]);

        $academicDataId = $user->academicdatum->id;
        //save matters
        $matter_id = Input::get('matter_id');
        foreach ($matter_id as $matter_id)
        {
            MatterAcademicDatum::create([
                'academic_data_id' => $academicDataId,
                'matter_id' => $matter_id
            ]);
        }

        return redirect('home')->with('message', 'Datos Academicos Actualizados!');
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
            $academicdata = AcademicDatum::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('period_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $academicdata = AcademicDatum::paginate($perPage);
        }

        return view('admin.academic-data.index', compact('academicdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.academic-data.create');
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
			'user_id' => 'required',
			'period_id' => 'required'
		]);
        $requestData = $request->all();
        
        AcademicDatum::create($requestData);

        return redirect('admin/academic-data')->with('flash_message', 'AcademicDatum added!');
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
        $academicdatum = AcademicDatum::findOrFail($id);

        return view('admin.academic-data.show', compact('academicdatum'));
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
        $academicdatum = AcademicDatum::findOrFail($id);

        return view('admin.academic-data.edit', compact('academicdatum'));
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
			'user_id' => 'required',
			'period_id' => 'required'
		]);
        $requestData = $request->all();
        
        $academicdatum = AcademicDatum::findOrFail($id);
        $academicdatum->update($requestData);

        return redirect('admin/academic-data')->with('flash_message', 'AcademicDatum updated!');
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
        AcademicDatum::destroy($id);

        return redirect('admin/academic-data')->with('flash_message', 'AcademicDatum deleted!');
    }
}

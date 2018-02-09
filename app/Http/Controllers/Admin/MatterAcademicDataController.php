<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MatterAcademicDatum;
use Illuminate\Http\Request;

class MatterAcademicDataController extends Controller
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
            $matteracademicdata = MatterAcademicDatum::where('academic_data_id', 'LIKE', "%$keyword%")
                ->orWhere('matter_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $matteracademicdata = MatterAcademicDatum::paginate($perPage);
        }

        return view('admin.matter-academic-data.index', compact('matteracademicdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.matter-academic-data.create');
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
        
        MatterAcademicDatum::create($requestData);

        return redirect('admin/matter-academic-data')->with('flash_message', 'MatterAcademicDatum added!');
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
        $matteracademicdatum = MatterAcademicDatum::findOrFail($id);

        return view('admin.matter-academic-data.show', compact('matteracademicdatum'));
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
        $matteracademicdatum = MatterAcademicDatum::findOrFail($id);

        return view('admin.matter-academic-data.edit', compact('matteracademicdatum'));
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
        
        $matteracademicdatum = MatterAcademicDatum::findOrFail($id);
        $matteracademicdatum->update($requestData);

        return redirect('admin/matter-academic-data')->with('flash_message', 'MatterAcademicDatum updated!');
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
        MatterAcademicDatum::destroy($id);

        return redirect('admin/matter-academic-data')->with('flash_message', 'MatterAcademicDatum deleted!');
    }
}

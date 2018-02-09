<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TutorDatum;
use Illuminate\Http\Request;

class TutorDataController extends Controller
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
            $tutordata = TutorDatum::where('personal_information_id', 'LIKE', "%$keyword%")
                ->orWhere('company_data', 'LIKE', "%$keyword%")
                ->orWhere('statu_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $tutordata = TutorDatum::paginate($perPage);
        }

        return view('admin.tutor-data.index', compact('tutordata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tutor-data.create');
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
        
        TutorDatum::create($requestData);

        return redirect('admin/tutor-data')->with('flash_message', 'TutorDatum added!');
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
        $tutordatum = TutorDatum::findOrFail($id);

        return view('admin.tutor-data.show', compact('tutordatum'));
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
        $tutordatum = TutorDatum::findOrFail($id);

        return view('admin.tutor-data.edit', compact('tutordatum'));
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
        
        $tutordatum = TutorDatum::findOrFail($id);
        $tutordatum->update($requestData);

        return redirect('admin/tutor-data')->with('flash_message', 'TutorDatum updated!');
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
        TutorDatum::destroy($id);

        return redirect('admin/tutor-data')->with('flash_message', 'TutorDatum deleted!');
    }
}

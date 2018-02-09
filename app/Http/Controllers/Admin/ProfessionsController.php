<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profession;
use Illuminate\Http\Request;

class ProfessionsController extends Controller
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
            $professions = Profession::where('profession', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $professions = Profession::paginate($perPage);
        }

        return view('admin.professions.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.professions.create');
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
			'profession' => 'required|max:150'
		]);
        $requestData = $request->all();
        
        Profession::create($requestData);

        return redirect('admin/professions')->with('flash_message', 'Profession added!');
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
        $profession = Profession::findOrFail($id);

        return view('admin.professions.show', compact('profession'));
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
        $profession = Profession::findOrFail($id);

        return view('admin.professions.edit', compact('profession'));
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
			'profession' => 'required|max:150'
		]);
        $requestData = $request->all();
        
        $profession = Profession::findOrFail($id);
        $profession->update($requestData);

        return redirect('admin/professions')->with('flash_message', 'Profession updated!');
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
        Profession::destroy($id);

        return redirect('admin/professions')->with('flash_message', 'Profession deleted!');
    }
}

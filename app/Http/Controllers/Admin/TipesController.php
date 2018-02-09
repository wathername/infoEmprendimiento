<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tipe;
use Illuminate\Http\Request;

class TipesController extends Controller
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
            $tipes = Tipe::where('type', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $tipes = Tipe::paginate($perPage);
        }

        return view('admin.tipes.index', compact('tipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tipes.create');
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
			'type' => 'required|max:150'
		]);
        $requestData = $request->all();
        
        Tipe::create($requestData);

        return redirect('admin/tipes')->with('flash_message', 'Tipe added!');
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
        $tipe = Tipe::findOrFail($id);

        return view('admin.tipes.show', compact('tipe'));
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
        $tipe = Tipe::findOrFail($id);

        return view('admin.tipes.edit', compact('tipe'));
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
			'type' => 'required|max:150'
		]);
        $requestData = $request->all();
        
        $tipe = Tipe::findOrFail($id);
        $tipe->update($requestData);

        return redirect('admin/tipes')->with('flash_message', 'Tipe updated!');
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
        Tipe::destroy($id);

        return redirect('admin/tipes')->with('flash_message', 'Tipe deleted!');
    }
}

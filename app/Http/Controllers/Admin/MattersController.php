<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Matter;
use Illuminate\Http\Request;

class MattersController extends Controller
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
            $matters = Matter::where('matter', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $matters = Matter::paginate($perPage);
        }

        return view('admin.matters.index', compact('matters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.matters.create');
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
			'matter' => 'required|max:150'
		]);
        $requestData = $request->all();
        
        Matter::create($requestData);

        return redirect('admin/matters')->with('flash_message', 'Matter added!');
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
        $matter = Matter::findOrFail($id);

        return view('admin.matters.show', compact('matter'));
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
        $matter = Matter::findOrFail($id);

        return view('admin.matters.edit', compact('matter'));
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
			'matter' => 'required|max:150'
		]);
        $requestData = $request->all();
        
        $matter = Matter::findOrFail($id);
        $matter->update($requestData);

        return redirect('admin/matters')->with('flash_message', 'Matter updated!');
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
        Matter::destroy($id);

        return redirect('admin/matters')->with('flash_message', 'Matter deleted!');
    }
}

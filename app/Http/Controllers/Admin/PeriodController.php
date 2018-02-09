<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
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
            $period = Period::where('period', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $period = Period::paginate($perPage);
        }

        return view('admin.period.index', compact('period'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.period.create');
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
			'period' => 'required|max:255'
		]);
        $requestData = $request->all();
        
        Period::create($requestData);

        return redirect('admin/period')->with('flash_message', 'Period added!');
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
        $period = Period::findOrFail($id);

        return view('admin.period.show', compact('period'));
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
        $period = Period::findOrFail($id);

        return view('admin.period.edit', compact('period'));
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
			'period' => 'required|max:255'
		]);
        $requestData = $request->all();
        
        $period = Period::findOrFail($id);
        $period->update($requestData);

        return redirect('admin/period')->with('flash_message', 'Period updated!');
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
        Period::destroy($id);

        return redirect('admin/period')->with('flash_message', 'Period deleted!');
    }
}

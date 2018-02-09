<?php

namespace App\Http\Controllers\Admin;

use App\AcademicDatum;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PersonalInformation;
use App\Role;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class UserController extends Controller
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
            $user = User::where('name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('user', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('role_id', 'LIKE', "%$keyword%")
                ->orWhere('statu_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $user = User::paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $role = Role::orderBy('role', 'asc')->pluck('role', 'id');
        $statu = Status::orderBy('statu', 'asc')->pluck('statu', 'id');

        return view('admin.user.create', compact('role', 'statu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function validator(array $data)
    {

    }


    public function store(Request $request)
    {

        //dd($request);
        $data =   $this->validate($request, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'profession' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'user' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'statu_id' => 'required|numeric',
            'role_id' => 'required|numeric',

        ]);

        $user = new User([
            'email' => $data['email'],
            'user' => $data['user'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(50),
            'role_id' => $data['role_id'],
            'statu_id' => '2',
            'profession_id' => $data['profession'],

        ]);

        $user->save();

        $personal_information = new PersonalInformation([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'user_id' => $user->id,
            'statu_id' => '3',
        ]);

        $personal_information->save();

        //registro datos academcios
        $academicData = new AcademicDatum([
            'user_id' => $user->id,
            'statu_id' => '3',
        ]);
        $academicData->save();

        //registro datos compania
        /*$companyData = new CompanyDatum([
            'user_id' => $user->id,
            'statu_id' => '3',
        ]);
        $companyData->save();*/

        //envio del correo para acivacion de cuenta
        $url = route('confirmation', ['active' => $user->email]);

        Mail::send('emails/registration', compact('user', 'url'), function ($m) use ($user){

            $m->from('hector@galindeztravel.com.ve', 'Info Emprendimiento');
            $m->to($user->email, $user->name)->subject('Activa tu cuenta!');
        });

        //return $user;

        //return redirect()->route('home')->with('message', 'Estimado usuario '.$user->name. '. Su cuenta ha sido creada, por favor confirme su email para activar su cuenta al 100%.');



        /*$requestData = $request->all();
        
        User::create($requestData);*/

        return redirect('admin/user')->with('flash_message', 'User added!');
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
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
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
        $user = User::findOrFail($id);
        $role = Role::orderBy('role', 'asc')->pluck('role', 'id');
        $statu = Status::orderBy('statu', 'asc')->pluck('statu', 'id');

        return view('admin.user.edit', compact('user', 'role', 'statu'));
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
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect('admin/user')->with('flash_message', 'User updated!');
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
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'User deleted!');
    }
}

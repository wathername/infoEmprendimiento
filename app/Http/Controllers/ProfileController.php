<?php

namespace App\Http\Controllers;

use App\Role;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Validation;
use Validator;

class ProfileController extends Controller
{
    //


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        return view('profile.show', compact('user'));
    }

    public function profileEdit()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $role = Role::pluck('role', 'id');
        $statu = Status::pluck('statu', 'id');

        return view('profile.edit', compact('user', 'role', 'statu'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $email = $user->email;
        $user_name = $user->user;


        if ($email != $request->get('email') AND $user_name != $request->get('user') )
        {
            $request->validate([
                'email' => 'required|email|unique:users',
                'user' => 'required|unique:users',
            ]);

            // dd($request);
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'email' => $request->get('email'),
                    'user' => $request->get('user'),
                ]);

        }elseif ($email != $request->get('email') AND $user_name == $request->get('user')){

            $request->validate([
                'email' => 'required|email|unique:users',
            ]);

            // dd($request);
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'email' => $request->get('email'),
                    'user' => $request->get('user'),
                ]);
        }elseif ($email == $request->get('email') AND $user_name != $request->get('user')){

            $request->validate([
                'user' => 'required|unique:users',
            ]);

            // dd($request);
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'email' => $request->get('email'),
                    'user' => $request->get('user'),
                ]);
        }else{

            DB::table('users')
                ->where('id', $id)
                ->update([
                    'email' => $request->get('email'),
                    'user' => $request->get('user'),
                ]);
        }

        return redirect()->route('profile')
            ->with('message', 'Su perfil ha sido actualizado!');
    }


    public function profilePhoto()
    {

        return view('profile.photo');
    }


    public function profilePhotoUpdate(Request $request)
    {
        $path = 'uploads/sistema/';

        $file = $request->file('photo');
        $name = $file->getClientOriginalName();
        $imagen = $path.$name;
        $upload = $file->move($path, $imagen);

        if($upload)
        {
            $inputs=Input::All();

            /**
             * Esta es la funcion para validar de manera manual
             */
            $validator = Validator::make($inputs, [
                'photo' => 'required',

            ]);

            /*if ($validator->fails()) {
                return redirect('profile/photo')->withErrors($validator)->withInput();
            }*/

            $id = Auth::user()->id;
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'photo' => $imagen,
                ]);

            return redirect('profile')->with('message', 'Perfil Actualizado!');
        }else
        {
            // Session::flash('mensaje', 'no se pudo subir el archivo');
            return Redirect::to('profile/photo')->with('message', 'no se pudo actualizar la imagen del perfil!');

        }



    }
}

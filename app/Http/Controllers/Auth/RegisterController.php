<?php

namespace App\Http\Controllers\Auth;

use App\AcademicDatum;
use App\CompanyDatum;
use App\PersonalInformation;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'profession' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'user' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User([
            'email' => $data['email'],
            'user' => $data['user'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(50),
            'role_id' => '3',
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

        \Mail::send('emails/registration', compact('user', 'url'), function ($m) use ($user){

            $m->from('hector@galindeztravel.com.ve', 'Info Emprendimiento');
            $m->to($user->email, $user->name)->subject('Activa tu cuenta!');
        });

        return $user;

        //return redirect()->route('home')->with('message', 'Estimado usuario '.$user->name. '. Su cuenta ha sido creada, por favor confirme su email para activar su cuenta al 100%.');

    }

    public function getConfirmation($email)
    {

        $user = User::where('email', $email)->firstOrFail();
        $user->statu_id = '1';
        $user->save();

        return redirect()->route('login')
            ->with('message', 'Su email '.$user->email. ' ha sido verificado, su cuenta ya se encuenta 100% activa');
    }

}

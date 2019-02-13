<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Campaing;

/*modal database*/
use App\User;

/*custom functions*/
use App\Http\Controllers\FuncionesDBController;

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
        *We use the function from here to edit it
    **/
    public function showRegistrationForm()
    {
        $campaing = Campaing::all();
        return view('auth.register',compact('campaing'));
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
            'name' => ['required', 'string', 'max:255'],
            'adp' => ['required', 'string','min:7', 'unique:users'],
            'nt_login' => ['required', 'string', 'max:20', 'unique:users'],
            'email' => ['string','email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'max:10', 'confirmed'],
            'position' => ['required'],
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
        return User::create([
            'name' => $data['name'],
            'adp' => $data['adp'],
            'nt_login' => $data['nt_login'],
            'email' => $data['email'],
            'rol' => $data['rol'],
            'position' => $data['position'],
            'photo' => $data['photo'],
            'users_status' => $data['users_status'],
            'remember_token' => $data['_token'],
            'password' => bcrypt($data['password']),
            'campaing_id' => $data['campaing_id'],
        ]);
    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\PasswordRequest;
use App\User;
use App\Http\Controllers\FuncionesDBController;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

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
    * We show the view
    */

    protected function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
    * Validamos si los datos ingresados son correctos 
    *
    * Si lo son nos vamos a la vista para cambiar la contraseña
    *
    * Si no, nos devolvemos a la vista anterior con un mensaje de error
    */

    protected function email(ForgotPasswordRequest $Request)
    {   
        extract($_POST);

        //Hacemos una consulta en cada uno de los campos enviados para validar si los datos estan ya registrados
        $data = User::where("adp",$adp)->where("nt_login",$nt_login)->get();

        //Hacemos la validación para saber si los datos estan correctos y si estan nos vamos a la vista para reestablecer la contraseña 
        if (count($data) > 0) 
        {
            return view('auth.passwords.reset',compact('data')); 
        }else
        {
            return redirect('password/request')->with('incorrect',' Ohh! something went wrong , adp or Nt login incorrect , try again');
        }

    }

    /*
    *
        * Usamos enta funcion para hacer la actualización de la contraseña
    *
    */
    protected function update()
    {
        extract($_POST);
        $pass = bcrypt($password);
        $_POST['password'] = $pass;
        unset($_POST['_token']);
        FuncionesDBController::update("users","id",$id,$_POST);
        return redirect('login')->with('right','the password has been updated');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use Auth;


/*modal database*/
use App\User;use App\Campaing;

/*custom functions*/
use App\Http\Controllers\FuncionesDBController;
use App\Http\Controllers\FuncionesController;

class UsersController extends Controller
{
	//El usuario debe de estar registrado si quiere utilizar este controlador
    public function __construct()
	{	
		$this->middleware('auth');
	}

	//Vista de bienvenida
	public function welcome()
	{
		return view ("user.welcome");
	}

	//Funcion con la cual listamos a los usuarios que esten activos en la aplicacion con la respetiva campaña en la que se encuentran
	public function list()
	{	
		extract($_GET);

		//Si la opcion es active mostramos los usuarios activos
		if ($option == "active") 
		{
			$users = User::where("users_status","Active")
			->join("campaing","users.campaing_id","campaing.id_campaing")
			->get();
			$option = "disabled";
		//Si la opcion es disabled mostramos los usuarios activos	
		}elseif ($option == "disabled") 
		{
			$users = User::where("users_status","Disabled")
			->join("campaing","users.campaing_id","campaing.id_campaing")
			->get();
			$option = "active";	
		}else
		{
			return view('auth.login');
		}
		
		return view ("user.list",compact("users","option"));
	}

	//Funcion con la cual le mostramos la vista del perfil al usuario
	public function profile()
	{
		return view ("user.profile");
	}

	//Vista para actualizar los usuarios
	public function update()
	{
		extract($_GET);
		$campaing = Campaing::all();
		$users = User::where("id",$id)
		->join("campaing","users.campaing_id","campaing.id_campaing")
		->get();
		return view("user.updateUser",compact("users","campaing"));
	}

	//Realizamos la actualización de los datos que el usuario edito
	public function updateProfile(UsersRequest $Request)
	{	

		//Extraemos todos los datos enviados por POST	
		extract($_POST);
		//Hacemos una consulta en cada uno de los campos enviados para validar si los datos no estan ya registrados
		$adp = User::where("adp",$adp)->get();
		$nt_login = User::where("nt_login",$nt_login)->get();
		$email = User::where("email",$email)->get();

		//Hacemos la validación en cada una de las consultas

		//ADP
		if (count($adp) > 0) 
		{
			if (Auth::user()->id != $adp[0]['id']) 
			{
			   return redirect("user/profile")->with('incorrect','Ohh! something went wrong, adp already registered');
			}
		}

		//NT LOGIN
		if (count($nt_login) > 0) 
		{
			if (Auth::user()->id != $nt_login[0]['id']) 
			{
				return redirect("user/profile")->with('incorrect','Ohh! something went wrong, nt_login already registered');
			}
		}

		//E-MAIL
		if (count($email) > 0) 
		{
			if (Auth::user()->id != $email[0]['id']) 
			{
				return redirect("user/profile")->with('incorrect','Ohh! something went wrong, email already registered');
			}
		}

		//Si todo esta bien realizamos la edición del usuario
		extract($_FILES);
		$src = FuncionesController::cargararchivo($_FILES['photo'],"images/user_foto/","user.png","editar");
		 //Si al momento de editar el usuario no edita la foto, esta no se actualiza
        if ($src == "nada") 
        {
            $src= "no nada";
        }else
        {
            $_POST['photo'] = $src;
        }
        unset($_POST['_token']);
        FuncionesDBController::update("users","id",$id,$_POST);
        return redirect("user/profile")->with('right','The user was updated correctly');
	}

	/*
    *
        * Realizamos la actualización del usuario
    *
    */
	public function updatePost(UsersRequest $Request)
	{		
		extract($_POST);
        unset($_POST['_token']);
        FuncionesDBController::update("users","id",$id,$_POST);
        return redirect("user/list?option=active");
	}

	/*
    *
        * Cambiamos el estado del usuario de activo a desabilitado o alcontrario
    *
    */
	public function changeStatus()
	{
		
		extract($_GET);
		$user = User::where("id",$id)->get();
		FuncionesDBController::shangestatus($user,'users_status',$status,'users','id');
		return redirect("user/list?option=active");
	}

}


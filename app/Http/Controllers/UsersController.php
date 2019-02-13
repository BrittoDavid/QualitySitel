<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/*modal database*/
use App\User;use App\Campaing;

/*custom functions*/
use App\Http\Controllers\FuncionesDBController;
use App\Http\Controllers\FuncionesController;

class UsersController extends Controller
{
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

		if ($option == "active") 
		{
			$users = User::where("users_status","Active")
			->join("campaing","users.campaing_id","campaing.id_campaing")
			->get();
			$option = "disabled";	
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
	public function updateProfile()
	{		
		extract($_POST);
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
        return redirect("user/profile");
	}

	public function updatePost()
	{		
		extract($_POST);
        unset($_POST['_token']);
        FuncionesDBController::update("users","id",$id,$_POST);
        return redirect("user/list?option=active");
	}

	public function changeStatus()
	{
		
		extract($_GET);
		$user = User::where("id",$id)->get();
		FuncionesDBController::shangestatus($user,'users_status',$status,'users','id');
		return redirect("user/list?option=active");
	}

}


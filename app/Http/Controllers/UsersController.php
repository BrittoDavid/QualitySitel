<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/*modal database*/
use App\User;

/*custom functions*/
use App\Http\Controllers\FuncionesDBController;

class UsersController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function Welcome()
	{
		return view ("user.welcome");
	}
}


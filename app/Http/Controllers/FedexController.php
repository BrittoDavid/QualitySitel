<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FedexController extends Controller
{
    //El usuario debe de estar registrado si quiere utilizar este controlador
    public function __construct()
	{	
		$this->middleware('auth');
	}

	//Mostramos la vista en la cual va a estar el formulario de calificacion de Fedex
	public function template()
	{
		return view('fedex/template');
	}
}

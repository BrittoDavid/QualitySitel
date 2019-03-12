<?php

namespace App\Http\Controllers;

use App\Fedex;use App\Roster;use App\Items_fedex;
use App\RawdataFedex;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\FuncionesDBController;
use App\Http\Controllers\FuncionesController;
use App\Http\Requests\FedexRequest;

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

		$roster = DB::table('roster')
		->select('coach_name')
		->where('campaing_id','4')
		->distinct()
		->get();
		return view('fedex/template', compact('roster'));
	}

	//Funcion donde mostramos los agentes de cada coach
	public function darAgent()
	{	
		extract($_POST);
		$roster = Roster::where('coach_name',$_POST["data"])->get();
		$select = FuncionesController::cargarSelect($roster,"adp","name_agent");
		echo $select;
	}

	//Realizamos el registro de los datos a la base de datos
	public function store(FedexRequest $request)
	{
		$items = FuncionesController::itemsFedex($_POST);
		$maxId = Items_fedex::max('id_items_fedex');
		$id_items = $maxId + 1;
		$data = FuncionesController::dataFedex($_POST);
		$data['items_fedex_id'] = $id_items;
		FuncionesDBController::register(new Items_fedex,$items);
		FuncionesDBController::register(new Fedex,$data);
		return redirect('fedex/template')->with("right","The monitoring has been registered correctly");
	}

	public function rawdata()
	{
		$rawdata = RawdataFedex::all();
		return view('fedex/rawdata',compact('rawdata'));
	}
}

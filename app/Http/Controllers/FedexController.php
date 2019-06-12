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
		$roster = Roster::where('coach_name',$_POST["data"])->orderByRaw('name_agent ASC')->get();
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
		$data['month'] = date('F');
		//FuncionesDBController::register(new Items_fedex,$items);
		//FuncionesDBController::register(new Fedex,$data);
		return redirect('fedex/template')->with("incorrect","At this moment the migration  of the data is being carried out, it will not be  possible register until June 13");
	}

	//Les mostramos el rawdata a los usuarios 
	public function rawdata()
	{
		$rawdata = RawdataFedex::where('id_data_fedex','>','1625')->get();
		return view('fedex/rawdata',compact('rawdata'));
	}

	//Les mostramos el rawdata a los reporting de manera que se pueda conectar a una base de datos excel
	public function reporting()
	{
		$rawdata = RawdataFedex::where('id_data_fedex','>','1625')->get();
		return view('fedex/reporting',compact('rawdata'));	
	}

	public function qualityPerformance()
	{	
		//--------------------------------SUM--------------------------------------------//
		//Totales por COACH y QA
		$SumCoach  = RawdataFedex::where('position','COACH')->where('month','June')->count();
		$SumQa     = RawdataFedex::where('position','QA')->where('month','June')->count();
		$SumTotal   = $SumCoach + $SumQa;
		// Totales individuales
		//Coach
		$SumParada  = RawdataFedex::where('name','Jeferson Parada')->where('month','June')->count();
		$SumBayona  = RawdataFedex::where('name','Jose Santiago Bayona')->where('month','June')->count();
		$SumGalvez  = RawdataFedex::where('name','Juan Sebastian Galvez Sierra')->where('month','June')->count();
		$SumBalles  = RawdataFedex::where('name','Lizeth Ballesteros Vergara')->where('month','June')->count();
		//QA
		$SumCastro  = RawdataFedex::where('name','Andres David Castro')->where('month','June')->count();
		$SumEscobar = RawdataFedex::where('name','Stephanie Escobar')->where('month','June')->count();

		//--------------------------------AVG--------------------------------------------//
		//AVG por Coach y QA
		$AvgCoach  = round(RawdataFedex::where('position','COACH')->where('month','June')->avg('score'),2);
		$AvgQa     = round(RawdataFedex::where('position','QA')->where('month','June')->avg('score'),2);
		$AvgTotal  = ($AvgCoach + $AvgQa) / 2;
		// Totales individuales
		//Coach
		$AvgParada  = round(RawdataFedex::where('name','Jeferson Parada')->where('month','June')->avg('score'),2);
		$AvgBayona  = round(RawdataFedex::where('name','Jose Santiago Bayona')->where('month','June')->avg('score'),2);
		$AvgGalvez  = round(RawdataFedex::where('name','Juan Sebastian Galvez Sierra')->where('month','June')->avg('score'),2);
		$AvgBalles  = round(RawdataFedex::where('name','Lizeth Ballesteros Vergara')->where('month','June')->avg('score'),2);
		//QA
		$AvgCastro  = round(RawdataFedex::where('name','Andres David Castro')->where('month','June')->avg('score'),2);
		$AvgEscobar = round(RawdataFedex::where('name','Stephanie Escobar')->where('month','June')->avg('score'),2);
		// Ponemos todos los datos en un Array para mandarlos a la vista
		$data = [$SumCoach,$AvgCoach,$SumParada,$AvgParada,$SumBayona,$AvgBayona,$SumGalvez,$AvgGalvez,$SumBalles,$AvgBalles,$SumQa,$AvgQa,$SumCastro,$AvgCastro,$SumEscobar,$AvgEscobar,$SumTotal,$AvgTotal];

		return view('fedex/performance',compact('data'));
	}
}

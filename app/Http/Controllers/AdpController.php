<?php

namespace App\Http\Controllers;

use App\TrackerAdp;use App\ViewtrackerAdp;use Auth;use App\Roster;
use App\Http\Controllers\FuncionesDBController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdpRequest;

class AdpController extends Controller
{   

    /**
    * Show the form to create tracker
    **/
    public function viewTracker()
    {
    	$maxid = TrackerAdp::max('id_tracker');
    	$id = $maxid + 1;
    	return view('adp.tracker',compact('id'));
    }

    /**
    * We perform the tracker registration
    **/
    public function registerTracker()
    {
    	$_POST['auditor'] = Auth::user()->id;
    	$_POST['interval_formula'] = '';
    	$_POST['month'] = '';
    	$_POST['weekend'] = '';
    	$_POST['repeat_offender'] = '';
    	FuncionesDBController::register(new TrackerAdp,$_POST);
    	return redirect('adp/viewTracker')->with("right","The Incident has been registered correctly");
    }

    /**
    * Show the view Rawdata
    **/
    public function rawdataTracker()
    {
    	$tracker = ViewtrackerAdp::all();
    	return view('adp.rawdataTracker',compact('tracker'));
    }

    /**
    * Show the view for update registre
    **/
    public function updateTracker()
    {
        extract($_GET);
        $tra = TrackerAdp::where('id_tracker',$id)->get();
        return view('adp.updateTracker',compact('tra'));
    }

    /**
    * Show the view for update registre
    **/
    public function updateTrackerPost()
    {
        extract($_POST);
        unset($_POST['_token']);
        //FuncionesDBController::update('incident_tracker_adp','id_tracker',$id_tracker,$_POST);
        return redirect('adp/rawdataTracker')->with('incorrect','At this moment the migration  of the data is being carried out, it will not be  possible register until June 13');
    }

    /**
    * We use the function to delete a  single record 
    **/
    public function deleteTracker()
    {
        extract($_POST);
        unset($_POST["_token"]);
        FuncionesDBController::delete('incident_tracker_adp','id_tracker',$id);
        return redirect('adp/rawdataTracker')->with('right','The Incident has been deleted correctly');
    }

    //Funcion donde mostramos los agentes de cada coach
    public function darAgent()
    {   
        extract($_POST);
        $roster = Roster::where('coach_name',$_POST["data"])->orderByRaw('name_agent ASC')->get();
        $select = FuncionesController::cargarSelect($roster,"adp","name_agent");
        echo $select;
    }

    /*
    *We use the function show the view template Tier 1
    **/
    public function templateTier1()
    {
        return view('adp.templateTier2');   
    }

    /**
    *We use the function show the view template Tier 2
    */

    public function templateTier2()
    {
        $roster = DB::table('roster')
        ->select('coach_name')
        ->where('campaing_id','3')
        ->distinct()
        ->get();
        return view('adp.templateTier2',compact('roster'));
    }

    public function storeTier2(AdpRequest $request)
    {
        dd($_POST);
    }
}

<?php

namespace App\Http\Controllers;

use App\TrackerAdp;use App\ViewtrackerAdp;use Auth;
use App\Http\Controllers\FuncionesDBController;
use Illuminate\Http\Request;

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
        FuncionesDBController::update('incident_tracker_adp','id_tracker',$id_tracker,$_POST);
        return redirect('adp/rawdataTracker')->with('right','The Incident has been updated correctly');
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
}

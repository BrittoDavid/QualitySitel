<?php

namespace App\Http\Controllers;

use App\Campaing;
use Illuminate\Http\Request;use App\Http\Requests\CampaignRequest;
use App\Http\Controllers\FuncionesDBController;

class CampaingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
    * Show the list campaign
    *
    */
    public function list()
    {
        extract($_GET);

        if ($option == 'active') 
        {
            $campaign = Campaing::where('status_campaing','Active')->get();    
            $option = 'disabled';
        }elseif($option == 'disabled')
        {
            $campaign = Campaing::where('status_campaing','Disabled')->get();    
            $option = 'active';  
        }
        return view('campaign/list',compact('campaign','option'));
    }

    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maxid = Campaing::max('id_campaing');
        $id = $maxid + 1;
        return view('campaign/create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignRequest $request)
    {
        $_POST['status_campaing'] = 'Active';
        FuncionesDBController::register(new Campaing,$_POST);
        return redirect('campaign/list?option=active')->with('right','The Campaign is registered correctly');
    }

    public function update()
    {
        extract($_GET);
        $campaign = Campaing::where('id_campaing',$id)->get();
        return view('Campaign/update',compact('campaign'));
    }

    public function updatePost(CampaignRequest $request)
    {
        extract($_POST);
        unset($_POST['_token']);
        FuncionesDBController::update('campaing','id_campaing',$id_campaing,$_POST);
        return redirect('campaign/list?option=active');
    }

    public function changeStatus()
    {
        extract($_GET);
        $campaign = Campaing::where("id_campaing",$id)->get();
        FuncionesDBController::shangestatus($campaign,'status_campaing',$status,'campaing','id_campaing');
        return redirect('campaign/list?option=active');
    }
}


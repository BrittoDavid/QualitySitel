<?php

namespace App\Http\Controllers;

use App\Campaing;
use Illuminate\Http\Request;

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
        $campaign = Campaing::all();
        return view("campaign/list",compact("campaign"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd($_GET);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    

    

    
    
}

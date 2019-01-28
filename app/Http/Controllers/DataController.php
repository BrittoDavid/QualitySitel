<?php

namespace App\Http\Controllers;

use App\data;
use Illuminate\Http\Request;
use App\Http\Controllers\FuncionesDBController;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("data");
    }


    public function crear()
    {   
        $maxid = data::max("id");
        $id = $maxid + 1;
        return view("crear",compact("id"));
    }

    public function listar()
    {   
        $auditorias = data::all();
        return view("listar",compact("auditorias"));
    }

     public function registrar()
    {

        //Asi sacamos lo que le falta al Qa para completar su couta
        $cuota = $_POST['cuota_monitoreos'];
        $monitoreos  = $_POST['monitoreos_completados'];
        $resultado_monitoreos = $cuota - $monitoreos;
        $_POST['resultado_monitoreos'] = $resultado_monitoreos;
        
        //Sacamos el porcentaje en feedback
        $canti_feeback = $_POST['cantidad_feedback'];
        $porcentaje = ($canti_feeback / $monitoreos) * 100;
        $porcentaje_feed = round($porcentaje, 2);
        $_POST['porcentaje_feedback'] = $porcentaje_feed;

        FuncionesDBController::registrar(New data,$_POST);

        return redirect("data/listar")->with("Correcto","Se realizo el registro de la auditoria correctamente");
        
        
    }
    

}

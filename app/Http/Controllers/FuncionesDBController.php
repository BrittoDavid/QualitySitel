<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class FuncionesDBController extends Controller
{
 	// METODO REUSABLE PARA REGISTRAR EN LA BASE DE DATOS CON UN MODELO Y DATA TIPO ARRAY INCLUYENTO LOS DATOS NESEZARIOS DE LARAVEL CREATED_AT, UPDATED_AT Y RETIRANDO EL TOKEN DE SEGIURIDAD
    public static function registrar($modelo,$data)
    {
        //$data["created_at"] = date("y-m-d");
        //$data["updated_at"] = date("y-m-d");
        unset($data["_token"]);
        FuncionesDBController::verificador($modelo::insert($data));
    } 

    // FUNCION QUE VERIFICA SI UN PROCESO SE REALIZOP CORRECTAMENTE Y DEVUEL LA ALERTA A LA VISATA DEL USUARIO
    public  static function verificador($data){
        if($data == true)
        {
            Session::flash('correcto','Procesos Exitoso');  
        }else
        {
            Session::flash('incorrecto',"Ups Algo paso intentalo de nuevo");  
        }
    }
}

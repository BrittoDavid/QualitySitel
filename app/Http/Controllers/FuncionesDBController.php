<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class FuncionesDBController extends Controller
{
    // METODO REUSABLE PARA REGISTRAR EN LA BASE DE DATOS CON UN MODELO Y DATA TIPO ARRAY INCLUYENTO LOS DATOS NESEZARIOS DE LARAVEL CREATED_AT, UPDATED_AT Y RETIRANDO EL TOKEN DE SEGIURIDAD
    public static function register($modelo,$data){
        $data["created_at"] = date("Y-m-d");
        $data["updated_at"] = date("Y-m-d");
        unset($data["_token"]);
        FuncionesDBController::checker($modelo::insert($data));
    } 
    // FUNCION QUE VERIFICA SI UN PROCESO SE REALIZO CORRECTAMENTE Y DEVUEL LA ALERTA A LA VISATA DEL USUARIO
    public  static function checker($data){
        if($data == true)
        {
            Session::flash('right','Successful Processes');  
        }else
        {
            Session::flash('incorrect',"Ups Something happened try again");
        }
    }
    // FUNCION PARA CONSULTAR UN REGISTRO ESPECIFICO DE UNA TABLA
    public static function consultarRegistro($tabla,$columna,$valor)
    {
    	$sql = DB::table($tabla)->where($columna,"=",$valor)->get();
    	return $sql;
    }
    // FUNCION PARA CONSULTAR TODOS LSO REGISTROS DE UNA TABLA
    public static function consultarRegistrosTotales($tabla)
    {
    	$sql = DB::table($tabla)->get();
    	return $sql;
    }
    // FUNCION PARA CONOCER EL VALOR MAXIMO DE UNA TABLE SEGUN COLUMNA NUEMERICA O DE CARACTERES
    public static function consultarRegistroMaximo($tabla,$columna)
    {
    	$sql = DB::table($tabla)->Max($columna);
    	return $sql;
    }
    // FUNCION PARA EDITAR UN REGISTRO DE UNA TABLA $TABLA: ES EL NOMBRE DE LA TABLA, $COLUMNA: ES LA COLOMNA QUE REFERENCIA EL REGISTRO UNICO, $IS: DATO DE REFERENCIA,
    public static function update($tabla,$columna,$id,$data){
         $respon = DB::table($tabla)
            ->where($columna,$id)
            ->update($data);    
        FuncionesDBController::checker($data);   
    }    
    // FUNCION PARA CAMBIAR EL ESTADADO DE UN REGISTRO DE UNA TABLA, DEVUELVE ALERTA AL LA VISTA SI EL ELEMENTO YA ESTA ACTIVO O NO
    public static function shangestatus($data,$name_estado,$accion,$tabla,$id_name){
        if($data[0]->$name_estado == $accion)
        {
            Session::flash("incorrect","Error trying to perform the action =  ".$accion);
        }else
        {
            DB::table($tabla)
            ->where($id_name, $data[0]->$id_name)
            ->update([$name_estado => $accion]);
            Session::flash("right","Process carried out = ".$accion);
        }        
    }     
}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FuncionesDBController;
use App\Ciudad;
use App\Depto;
use Illuminate\Http\Request;
use Session;
use Mail;
use Auth;
use DB;
class FuncionesController extends Controller
{

    //FUNCION CON LA CUAL QUITAMOS LOS ITEMS DEL METODO POST Y LO PONEMOS EN EL ARREGLO DATA EN FEDEX
    public static function itemsFedex($data)
    {


        $items["p1_1"]    = $data["p1_1"];
        $items["com1_1"] = $data["com1_1"];
        $items["p1_2"]    = $data["p1_2"];
        $items["com1_2"] = $data["com1_2"];
        $items["p1_3"]    = $data["p1_3"];
        $items["com1_3"] = $data["com1_3"];
        $items["p1_4"]    = $data["p1_4"];
        $items["com1_4"] = $data["com1_4"];
        $items["p1_5"]    = $data["p1_5"];
        $items["com1_5"] = $data["com1_5"];
        $items["p2_1"]    = $data["p2_1"];
        $items["com2_1"] = $data["com2_1"];
        $items["p2_2"]    = $data["p2_2"];
        $items["com2_2"] = $data["com2_2"];
        $items["p2_3"]    = $data["p2_3"];
        $items["com2_3"] = $data["com2_3"];
        $items["p2_4"]    = $data["p2_4"];
        $items["com2_4"] = $data["com2_4"];
        $items["p3_1"]    = $data["p3_1"];
        $items["com3_1"] = $data["com3_1"];
        $items["p3_2"]    = $data["p3_2"];
        $items["com3_2"] = $data["com3_2"];
        $items["p3_3"]    = $data["p3_3"];
        $items["com3_3"] = $data["com3_3"];
        $items["p3_4"]    = $data["p3_4"];
        $items["com3_4"] = $data["com3_4"];
        $items["p4_1"]    = $data["p4_1"];
        $items["process_compliance"] = "";
        $items["eclipse"] = "";
        $items["call_handling"] = "";
        $items["efficiency"] = "";
        $items["comments6"] = "";
        $items["comments7"] = "";
        $items["comments12"] = "";
        $items["comments13"] = "";

        return $items;
    }

    //FUNCION CON LA CUAL QUITAMOS TODOS LOS ITEMS DEL METODO POST
    public static function dataFedex($data)
    {
        unset($data["p1_1"]);unset($data["com1_1"]);unset($data["p1_2"]);unset($data["com1_2"]);unset($data["p1_3"]);unset($data["com1_3"]);unset($data["p1_4"]);
        unset($data["com1_4"]);unset($data["p1_5"]);unset($data["com1_5"]);unset($data["p2_1"]);unset($data["com2_1"]);unset($data["p2_2"]);unset($data["com2_2"]);
        unset($data["p2_3"]);unset($data["com2_3"]);unset($data["p2_4"]);unset($data["com2_4"]);unset($data["p3_1"]);unset($data["com3_1"]);unset($data["p3_2"]);
        unset($data["com3_2"]);unset($data["p3_3"]);unset($data["com3_3"]);unset($data["p3_4"]);unset($data["com3_4"]);unset($data["p4_1"]);

        $data['rating'] = "";
        return $data;
    }

    // FUNCION PARA CARGAR LA CIUDAD EN UN SELECT SEGUN DEPARTAMENTO SELECCINADO
    public function cargarciudad()
    {
    	extract($_POST);
    	$ciudades = Ciudad::where("depto_id",$data["depto_id"])->get();
    	$select = $this->cargarSelect($ciudades,"ciu_id","ciu_nombre");
    	echo $select;
    }
    // FUNCION PARA CARGAR UN SELECT DE DEPARTAMETOS
    public function cargselectdepto()
    {

    	extract($_POST);
    	$deptos = Depto::all();
    	$select = $this->cargarSelect($deptos,"depto_id","depto_nombre");
    	echo $select;
    }    
    // FUNCION PARA REGISTRAR Y CARGAR SELECT CON NUEVO REGISTRO DE DEPARTAMENTO
    public function registrardepto()
    {
    	extract($_POST);
        $dato = FuncionesDBController::registrar(new Depto,$data);
    	$deptos = Depto::all();
    	$select = $this->cargarSelect($deptos,"depto_id","depto_nombre");
    	echo $select;
    }  
    // FUNCION PARA REGISTRAR Y CARGAR SELECT CON NUEVO REGISTRO DE CIUDAD
    public function registrarciu()
    {
    	extract($_POST);
		$dato = FuncionesDBController::registrar(new Ciudad,$data);
    	$ciudades = Ciudad::where("depto_id",$data["depto_id"])->get();
    	$select = $this->cargarSelect($ciudades,"ciu_id","ciu_nombre");
    	echo $select;
    }   
    // FUNCION PARA MANDAR CORREOS SEGUN PLANTILLA Y DATA ---pendiente
    public static function correo($plantilla,$data,$para,$asunto,$mensaje,$de,$copia)
    {
        Mail::send($plantilla,compact('data','mensaje') , function ($message) use ($para,$copia,$asunto,$de)
               {
            if($copia != ""){
                $message->cc($copia);
            }
            $message->subject($asunto);
            $message->to($para);
            $message->from($de);
               });             
    }
   // FUNCION PARA GENERAL EL HTML DE UN SELECT
    public static function cargarSelect($datos,$id,$name)
    {
        $select = "<option value=''>Seleccione</option>";
        foreach ($datos as $dato) {
            $select .= "<option value=".$dato->$id.">".$dato->$name."</option>";
        }        
        return $select;
    } 
    // FUNCION PARA EVALUAR SI UN DATO LE PERTENECE AL USUARIO ACTUAL
    public static function datosrol($data)
    {
        if(empty($data[0])){
            return "No";
        }else{
            return "Si";
        }
    }  
    // FUNCION PARA CARGAR ARCHIVOS A LA BASE DE DATOS
    public static function cargararchivo($file,$path,$archivodefecto,$opcion)
    {
        if ($opcion == "registro")
        {
                 if($file["name"] == null )
            {
                $src = $path.$archivodefecto;
            }else
            {
                $nom = $file["name"];
                $dir_temp = $file["tmp_name"];
                $src = $path.$nom;
                move_uploaded_file($dir_temp, $src);
            }
        }elseif ($opcion == "editar") 
        {
            if ($file["error"] == 0) 
            {
                $nom = $file["name"];
                $dir_temp = $file["tmp_name"];
                $src = $path.$nom;
                move_uploaded_file($dir_temp, $src);  
            }else
            {
                $src = "nada";  
            } 
        }
       
        return $src;
    }
    // FUNCION PARA SUBIR IMAGEN CON AJAX Y MOSTRARLA A TIEMPO REAL
    public function subirArchivoAjax()
    {
        dd($_POST);
    }  
                
}

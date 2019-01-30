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

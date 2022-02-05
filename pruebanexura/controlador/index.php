<?php
require_once("modelo/index.php");
class modeloController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
    static function index(){
    	$empleado 	=	new Modelo();
		$dato=$empleado->mostrar("empleado","1");
		require_once("vistas/index.php");
    }

    // INSERTAR
    static function nuevo(){
		$mod 	=	new Modelo();
		$areas=$mod->mostrar("areas","1");
    	require_once("vistas/nuevo.php");	    	    	
    }
    static function guardar(){
    	$nombre 	=	$_REQUEST['nombre'];
    	$email 	=	$_REQUEST['email'];
    	$sexo 	=	$_REQUEST['sexo'];
    	$area_id 	=	$_REQUEST['area_id'];
		if(isset($_REQUEST['boletin'])){
			$boletin=1;
		}else{
			$boletin=0;
		}
    	$descripcion 	=	$_REQUEST['descripcion'];
        $data       =   "'".$nombre."','".$email."','".$sexo."','".$area_id."','".$boletin."','".$descripcion."'";
    	$empleado 	=	new Modelo();
		$dato 		=	$empleado->insertar("empleado",$data);
		header("location:".URL);
    }


    // ACTUALIZAR

    static function editar(){
		$id=$_REQUEST['id'];	
    	$empleado 	=	new Modelo();
		$areas=$empleado->mostrar("areas","1");
		$mod 	=	new Modelo();
    	$dato=$mod->mostrar("empleado","id=".$id);   
    	require_once("vistas/editar.php");
    }
    static function actualizar(){
		$id= $_REQUEST['id'];
    	$nombre 	=	$_REQUEST['nombre'];
    	$email 	=	$_REQUEST['email'];
    	$sexo 	=	$_REQUEST['sexo'];
    	$area_id 	=	$_REQUEST['area_id'];
		if(isset($_REQUEST['boletin'])){
			$boletin=1;
		}else{
			$boletin=0;
		}
    	$descripcion 	=	$_REQUEST['descripcion'];
        $data       =   "nombre='".$nombre."',email='".$email."',sexo='".$sexo."',area_id='".$area_id."',boletin='".$boletin."',descripcion='".$descripcion."'";
        $condicion  =   "id=".$id;
    	$empleado 	=	new Modelo();
		$dato 		=	$empleado->actualizar("empleado",$data,$condicion);
        header("location:".URL);
	}

    // ELIMINAR

	static function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$empleado 	=	new Modelo();        
		$dato 		=	$empleado->eliminar("empleado",$condicion);
		header("location:".URL);
	}
}
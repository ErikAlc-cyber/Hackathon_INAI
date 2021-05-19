<?php
require_once("../model/model.php");
class modeloController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }

//MUESTRA DE TODAS LAS VACANTES
    function vista(){
    	$vacantes 	=	new Modelo();
		$dato = $vacantes->mostrar("VACANTE");
		require_once("DNE.php");
    }
//MUESTRA DE LOS DATOS DE LA VACANTE
	function mostrar_uno($id_vacante){
		$vacante = new Modelo();
		$dato = $vacante->mostrar("VACANTE","$id_vacante");
		require_once("informacion.php");
	}
//MUESTRA DE LA TABLA DE CONTACTOS
	function mostrar_contacto($id_contacto){
		$contacto = new Modelo();
		$dato = $contacto->mostrar_contacto("CONTACTO","$id_contacto");
		require_once("contacto.php");
	}

	//MUESTRA DE LA VISTA INDEX
    function index(){

    	
		require_once("index.php");
    }
/*
    // ESTRUCTURA CRUD SIN USAR
    function nuevo(){
    	require_once("vista/nuevo.php");	    	    	
    }

    function guardar(){
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "'".$nombre."','".$precio."'";
    	$producto 	=	new Modelo();
		$dato 		=	$producto->insertar("productos",$data);
		header("location:".urlsite);
    }


    // ACTUALIZAR

    function editar(){
    	$id=$_REQUEST['id'];
    	$producto 	=	new Modelo();
    	$dato=$producto->mostrar("productos","id=".$id);    	
    	require_once("vista/editar.php");
    }

   
    function update(){
    	$id 		= 	$_REQUEST['id'];
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "nombre='".$nombre."', precio=".$precio;
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos",$data,$condicion);
        header("location:".urlsite);
	}
 
    // ELIMINAR

	function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("productos",$condicion);
		header("location:".urlsite);
	}

	*/
}
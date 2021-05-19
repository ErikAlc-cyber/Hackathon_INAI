<?php
//Llamamos al controlador y a la url raiz 
require_once("../config.php");
require_once("../controller/controller.php");
//Si existe el argumento m en la url (Pasa el nombre del metodo a ejecutar y la id )
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    $id_g = $_GET['id'];
    //Ejecuta el metodo si existe en la clase de nuestro controlador
    if(method_exists('modeloController',$metodo)):
        modeloController::{$metodo}($id_g);
    endif;
else:
    //Si no hay argumentos en la url o no existe el metodo en la clase se envia por defecto a la vista general (vista())
    modeloController::vista();
endif;
<?php
require_once("../config.php");
require_once("../controller/controller.php");
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    $id_g = $_GET['id'];
    if(method_exists('modeloController',$metodo)):
        modeloController::{$metodo}($id_g);
    endif;
else:
    modeloController::vista();
endif;
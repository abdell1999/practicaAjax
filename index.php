<?php


//Este bloque de código sirve para cargar todos los controladores y no tener que modificar el archivo
//cada vez que se cree uno nuevo.

foreach (glob("controllers/*.php") as $filename) {
    include_once $filename;
}




//$controller -> CONTROLADOR
//$action -> MÉTODO




session_start();
if(!isset($_SESSION['type'])){
    $_SESSION['type'] = null;
}



if (!isset($_REQUEST['controller']) && !isset($_REQUEST['action'])) {
    
        $controller = "reservations";
        $action = "show";

    } else {
    
        $controller = $_REQUEST['controller'];
        $action = $_REQUEST['action'];
    }
    

    $nombreClase = ucfirst($controller)."Controller";
    $controller = new $nombreClase;
    
    //$controller = new ResourcesController();
    //$controller->show();

    /** 
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }else{
        $id = null;
    }
*/  
    $controller->$action();
    


<?php

include_once("view.php");

if (!isset($_REQUEST['controller'])) {
    $controller = "DefaultController";
} else {
    $controller = $_REQUEST['controller'];
}


include("$controller.php");
$controller = new $controller();

if (!isset($_REQUEST['action'])) {
    $action = "defaultAction";
} else {
    $action = $_REQUEST['action'];
}

$controller->$action();

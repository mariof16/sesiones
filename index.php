<?php

require_once 'config/config_db.php';
require_once 'models/iniciosesion.php';
require_once 'models/gestion.php';

if(!isset($_GET["controller"])) $_GET["controller"] = constant("DEFAULT_CONTROLLER");
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

$controller_path = 'controllers/'.$_GET["controller"].'.php';

/* Check if controller exists */
if(!file_exists($controller_path)) $controller_path = 'controllers/'.constant("DEFAULT_CONTROLLER").'.php';

/* Load controller */
require_once $controller_path;
$controllerName = 'Controlador'.$_GET["controller"];
$controller = new $controllerName();

/* Check if method is defined */

$dataToView["data"] = array();
if(method_exists($controller,$_GET["action"])) $dataToView["data"] = $controller->{$_GET["action"]}();


/* Load views*/
session_start(); 
require_once 'views/templates/header.html';
require_once 'views/'.$controller->view.'.php';
require_once 'views/templates/footer.html';
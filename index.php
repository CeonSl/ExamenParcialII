<?php

//Incluyo los archivos necesarios
require("model/Pais/entidad/Pais.php");
require("controller/PaisController.php");

require("model/Continente/entidad/Continente.php");
require("controller/ContinenteController.php");

//Instancio el controlador
$controllerPais = new PaisController();
$controllerContinente = new ContinenteController();

$cmd = "";
$rutas =  array();
$tablas = ["Pais", "Continente"];
$controllers = [$controllerPais, $controllerContinente];

if (isset($_GET["cmd"])) {
    $rutas = explode("/", $_GET["cmd"]);
}
include_once("tmplMaster.php");

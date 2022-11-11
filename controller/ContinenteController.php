<?php

require_once("model/Continente/entidad/Continente.php");
require_once("model/Continente/dao/DaoContinente.php");
class ContinenteController
{

    public $continente;
    function __construct()
    {
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoContinente = new DaoContinente();
        $rst = $daoContinente->Select();
        //Le paso los datos a la vista
        require("view/indexContinente.php");
    }
}

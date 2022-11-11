<?php

require_once("model/Pais/entidad/Pais.php");
require_once("model/Pais/dao/DaoPais.php");
require_once("model/Continente/dao/DaoContinente.php");
class PaisController
{

    public $pais;
    function __construct()
    {
    }
    public function registrar()
    {
        $daoContinente = new DaoContinente();

        if (isset($_POST["txtNumeroHabitantes"])) {
            $pais = new pais();
            $pais->setNumeroHabitantes($_POST["txtNumeroHabitantes"]);
            $pais->setIdioma($_POST["txtIdioma"]);
            $pais->setNombrePais($_POST["txtNombrePais"]);
            $pais->setGentilicio($_POST["txtGentilicio"]);
            $pais->setPresidente($_POST["txtPresidente"]);
            $pais->setKilometrosCuadrados($_POST["txtKilometrosCuadrados"]);

            $rst = $daoContinente->FindIdComboBox($_POST["txtContinente"]);
            $pais->setId_continente($rst->id);

            $daoPais = new DaoPais();
            $daoPais->Insert($pais);
            $this->inicio();
        } else {
            $rst = $daoContinente->FillComboBox();
            require("view/frmPais.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoPais = new DaoPais();
            $daoPais->Delete($rutas[2]);
            $this->inicio();
        }
    }

    public function editar()
    {
        $daoContinente = new DaoContinente();
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtNumeroHabitantes"])) {
            $id = $rutas[2];
            $pais = new pais();
            $pais->setId($id);
            $pais->setNumeroHabitantes($_POST["txtNumeroHabitantes"]);
            $pais->setIdioma($_POST["txtIdioma"]);
            $pais->setNombrePais($_POST["txtNombrePais"]);
            $pais->setGentilicio($_POST["txtGentilicio"]);
            $pais->setPresidente($_POST["txtPresidente"]);
            $pais->setKilometrosCuadrados($_POST["txtKilometrosCuadrados"]);
            
            $rst = $daoContinente->FindIdComboBox($_POST["txtContinente"]);
            $pais->setId_continente($rst->id);


            $daoPais = new DaoPais();
            $daoPais->Update($pais);
            $this->inicio();
        } else {
            $daoPais = new DaoPais();
            $rst = $daoPais->Select($rutas[2]);

            $rstContinente = $daoContinente->FillComboBox();
            require("view/frmPais.php");
        }
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoPais = new DaoPais();
        $rst = $daoPais->Select();
        //Le paso los datos a la vista
        require("view/indexPais.php");
    }
}

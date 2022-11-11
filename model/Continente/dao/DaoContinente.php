<?php
include_once("model/Conexion.php");
class DaoContinente
{
  public $base;
  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select()
  {
  
      // Varios registros
      $sql = "SELECT * FROM continente ORDER BY id;";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
  }

  public function FillComboBox()
  {
    $sql = "SELECT id,nombre FROM continente";
    $tabla = $this->base->query($sql);
    $tabla->execute();
    $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
  }

  public function FindIdComboBox($nombre)
  {
    $sql = "SELECT id FROM continente WHERE nombre = '$nombre';";
    $tabla = $this->base->query($sql);
    $tabla->execute();
    $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    return $resultado;
  }

}

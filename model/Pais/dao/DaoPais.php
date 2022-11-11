<?php
include_once("model/Conexion.php");
class DaoPais
{
  public $base;
  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($id = 0)
  {
    if ($id > 0) {
      // Un solo registro
      $sql = "SELECT p.*, c.nombre FROM pais p
      JOIN continente c on p.id_continente = c.id WHERE p.id=?;";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $id);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT p.*, c.nombre FROM pais p
      JOIN continente c on p.id_continente = c.id ORDER BY p.id";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($pais)
  {
    $sql = "INSERT INTO pais(numeroHabitantes, idioma, nombrePais, gentilicio, presidente, kilometrosCuadrados, id_continente) VALUES (?,?,?,?,?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $pais->getNumeroHabitantes());
    $tabla->bindValue(2, $pais->getIdioma());
    $tabla->bindValue(3, $pais->getNombrePais());
    $tabla->bindValue(4, $pais->getGentilicio());
    $tabla->bindValue(5, $pais->getPresidente());
    $tabla->bindValue(6, $pais->getKilometrosCuadrados());
    $tabla->bindValue(7, $pais->getId_continente());
    $tabla->execute();
  }

  public function Update($pais)
  {
    $sql = "UPDATE pais SET numeroHabitantes=?, idioma=?, nombrePais=?, gentilicio=?, presidente=?, kilometrosCuadrados=?, id_continente=? WHERE id=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $pais->getNumeroHabitantes());
    $tabla->bindValue(2, $pais->getIdioma());
    $tabla->bindValue(3, $pais->getNombrePais());
    $tabla->bindValue(4, $pais->getGentilicio());
    $tabla->bindValue(5, $pais->getPresidente());
    $tabla->bindValue(6, $pais->getKilometrosCuadrados());
    $tabla->bindValue(7, $pais->getId_continente());
    $tabla->bindValue(8, $pais->getId());
    $tabla->execute();
  }
  public function Delete($id = 0)
  {
    $sql = "DELETE FROM pais WHERE id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $id);
    $tabla->execute();
  }
}

<?php include_once "php/config.php"; ?>

<div style="margin: 20px;">
  <h1>Listado de Paises</h1>

  <p>
    <a href="<?php echo SERVERURL ?>registrar/Pais" class="btn btn-info">Nuevo</a>
  </p>

  <table style="width:100% ;" class="table table-hover table-dark">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Número Habitantes</th>
      <th>Idioma</th>
      <th>Gentilicio</th>
      <th>Presidente</th>
      <th>KM<sup>2</sup> </th>
      <th>Continente</th>
      <th>Opciones</th>
    </tr>
    <?php
    foreach ($rst as $key => $value) {

    ?>
      <tr>
        <td><?= $value->id ?></td>
        <td><?= $value->nombrePais ?></td>
        <td><?= $value->numeroHabitantes ?></td>
        <td><?= $value->idioma ?></td>
        <td><?= $value->gentilicio ?></td>
        <td><?= $value->presidente ?></td>
        <td><?= $value->kilometrosCuadrados ?></td>
        <td><?= $value->nombre ?></td>
        <td>
          <a href="<?php echo SERVERURL ?>editar/Pais/<?= $value->id ?>" class="btn btn-primary">Editar </a>
          <a href="<?php echo SERVERURL ?>eliminar/Pais/<?= $value->id ?>" class="btn btn-warning">Eliminar </a>
        </td>
        .
      </tr>
    <?php
    }
    ?>
  </table>

  <p>
    <a href="<?php echo SERVERURL ?>index" class="btn btn-light">Volver</a>
  </p>
</div>
<?php include_once "php/config.php"; ?>

  <div style="margin: 20px;">
    <h1>Listado de Continentes</h1>

    <table style="width:100% ;" class="table table-hover table-dark">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->id ?></td>
          <td><?= $value->nombre ?></td>
        </tr>
      <?php
      }
      ?>
    </table>

    <p>
      <a href="<?php echo SERVERURL ?>index" class="btn btn-light">Volver</a>
    </p>
  </div>

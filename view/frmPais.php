<?php include_once "php/config.php";
?>

<body>
  <div style="margin: 20px;">
    <h1>Formulario de registro de Paises</h1>
    <?php
    $rutas = array();
    $rutas = explode("/", ($_GET['cmd']));
    ?>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/Pais" <?php } else {
                                                                                          ?>action="<?php echo SERVERURL ?>editar/Pais/<?= $rutas[2] ?>" <?php } ?>method="post">
      <fieldset style="width:300px ;">
        <legend>Datos Personales</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtId">Id: </label>
            <input type="text" id="txtId" name="txtId" value="<?= $rutas[2] ?>" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label for="txtNombrePais">Nombre: </label>
            <input type="text" id="txtNombrePais" name="txtNombrePais" value="<?= $rst->nombrePais ?>" class="form-control" placeholder="Ingrese Nombre">
          </div>

          <div class="form-group">
            <label for="txtIdioma">Idioma: </label>
            <input type="text" id="txtIdioma" name="txtIdioma" value="<?= $rst->idioma ?>" class="form-control" placeholder="Ingrese Idioma">
          </div>

          <div class="form-group">
            <label for="txtNumeroHabitantes">Número Habitantes: </label>
            <input type="text" id="txtNumeroHabitantes" name="txtNumeroHabitantes" value="<?= $rst->numeroHabitantes ?>" class="form-control" placeholder="Ingrese Número Habitantes">
          </div>

          <div class="form-group">
            <label for="txtGentilicio">Gentilicio: </label>
            <input type="text" id="txtGentilicio" name="txtGentilicio" value="<?= $rst->gentilicio ?>" class="form-control" placeholder="Ingrese Gentilicio">
          </div>

          <div class="form-group">
            <label for="txtPresidente">Presidente: </label>
            <input type="text" id="txtPresidente" name="txtPresidente" value="<?= $rst->presidente ?>" class="form-control" placeholder="Ingrese Presidente">
          </div>

          <div class="form-group">
            <label for="txtKilometrosCuadrados">KM<sup>2</sup>: </label>
            <input type="text" id="txtKilometrosCuadrados" name="txtKilometrosCuadrados" value="<?= $rst->kilometrosCuadrados ?>" class="form-control" placeholder="Ingrese KilometrosCuadrados">
          </div>

          <div class="form-group">
            <label for="txtContinente">Continentes: </label>
            <select class="form-select" id="txtContinente" name="txtContinente">
              <?php foreach ($rstContinente as $key => $value) {
                if (($rst->nombre) == ($value->nombre)) { ?>
                  <option selected><?= $value->nombre ?></option>
                <?php } else { ?>
                  <option><?= $value->nombre ?></option>
              <?php }
              } ?>
            </select>
          </div>

        <?php
        } else {
        ?>
          <div class="form-group">
            <label for="txtNombrePais">Nombre: </label>
            <input type="text" id="txtNombrePais" name="txtNombrePais" value="" class="form-control" placeholder="Ingrese Nombre">
          </div>

          <div class="form-group">
            <label for="txtIdioma">Idioma: </label>
            <input type="text" id="txtIdioma" name="txtIdioma" value="" class="form-control" placeholder="Ingrese Idioma">
          </div>

          <div class="form-group">
            <label for="txtNumeroHabitantes">Número Habitantes: </label>
            <input type="text" id="txtNumeroHabitantes" name="txtNumeroHabitantes" value="" class="form-control" placeholder="Ingrese Número Habitantes">
          </div>

          <div class="form-group">
            <label for="txtGentilicio">Gentilicio: </label>
            <input type="text" id="txtGentilicio" name="txtGentilicio" value="" class="form-control" placeholder="Ingrese Gentilicio">
          </div>

          <div class="form-group">
            <label for="txtPresidente">Presidente: </label>
            <input type="text" id="txtPresidente" name="txtPresidente" value="" class="form-control" placeholder="Ingrese Presidente">
          </div>

          <div class="form-group">
            <label for="txtKilometrosCuadrados">KM<sup>2</sup>: </label>
            <input type="text" id="txtKilometrosCuadrados" name="txtKilometrosCuadrados" value="" class="form-control" placeholder="Ingrese KilometrosCuadrados">
          </div>

          <div class="form-group">
            <label for="txtContinente">Continentes: </label>
            <select class="form-select" aria-label="Default select example" id="txtContinente" name="txtContinente">
              <?php foreach ($rst as $key => $value) { ?>
                <option><?= $value->nombre ?></option>
              <?php } ?>
            </select>
          </div>

        <?php
        }
        ?>
        <div class="form-group">
          <?php
          if (!isset($rutas[2])) {
          ?>
            <input type="submit" value="Guardar" name="btnGuardar" id="btnGuardar" class="btn btn-primary">
          <?php
          } else {
          ?>
            <div class="form-group">
              <input type="submit" value="Actualizar" name="btnActualizar" id="btnActualizar" class="btn btn-info">

            <?php
          }
            ?>
            <input type="reset" value="Limpiar" class="btn btn-warning">
            </div>
            <a href="<?php echo SERVERURL ?>inicio/Pais" class="btn btn-light">Listar Datos</a>
      </fieldset>
    </form>
  </div>
</body>

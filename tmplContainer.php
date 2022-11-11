<?php
for ($i = 0; $i < 3; $i++) {

    if ($rutas[0] == "eliminar" && $rutas[1] == $tablas[$i]) {
        $controllers[$i]->eliminar();
        break;
    } else if ($rutas[0] == "registrar" && $rutas[1] == $tablas[$i]) {
        $controllers[$i]->registrar();
        break;
    } else if ($rutas[0] == "editar" && $rutas[1] == $tablas[$i]) {
        $controllers[$i]->editar();
        break;
    } else if ($rutas[0] == "inicio" && $rutas[1] == $tablas[$i]) {
        $controllers[$i]->inicio();
        break;
    } else {
        if ($i >= 2) {
            $controllerPais->index();
            break;
        } else {
            continue;
        }
    }
}

<?php
function leerDatosDelArchivo($rutaArchivo) {
    if (!file_exists($rutaArchivo)) {
        return 'El archivo no existe';
    }

    $lineas = file($rutaArchivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $listaDeDatos = [];

    foreach ($lineas as $linea) {
        $listaDeDatos[] = explode(";", $linea);
    }

    return $listaDeDatos;
}

?>
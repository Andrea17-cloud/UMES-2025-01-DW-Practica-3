<?php


function readRecetas($fileRute) {
    if (!file_exists($fileRute)) {
        return 'El archivo no existe';
    }
    $dataLoad = fopen($fileRute, 'r');

    $listRecetas = [];
    while (($textLine = fgets($dataLoad)) != false) {
        $partes = [];
        $en_lista = false;
        $lista_actual = "";
        $texto_procesar = trim($textLine);

        for ($i = 0; $i < strlen($texto_procesar); $i++) {
            if ($texto_procesar[$i] === '$') {
                if ($en_lista) {
                    $partes[] = trim($lista_actual, ';');
                    $lista_actual = "";
                    $en_lista = false;
                } else {
                    $en_lista = true;
                }
            } elseif ($texto_procesar[$i] === ';' && !$en_lista) {
                $partes[] = trim(substr($texto_procesar, 0, $i));
                $texto_procesar = substr($texto_procesar, $i + 1);
                $i = -1;
            } elseif ($en_lista) {
                $lista_actual .= $texto_procesar[$i];
            }
        }

        if (!empty($texto_procesar)) {
            $partes[] = trim($texto_procesar);
        } elseif (!empty($lista_actual) && $en_lista) {
            $partes[] = trim($lista_actual, ';');
        }

        $listRecetas[] = $partes;
    }
    fclose($dataLoad);
    return $listRecetas;
}


?>
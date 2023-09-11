<?php

/**
 * Determina tipo de método que ingresa a ser evaluado,
 * retorna array con todos los datos correspondientes
 * @return array
 */
function data_submitted()
{
    $datos = [];
    if (!empty($_POST))
        $datos = $_POST;
    elseif (!empty($_GET)) {
        $datos = $_GET;
    }
    if (count($datos)) {
        foreach ($datos as $indice => $valor) {
            if ($valor == "")
                $datos[$indice] = 'null';
        }
    }
    return $datos;
}

<?php

class Password
{
    /**
     * Recibe array, verifica si el usuario y contraseña coinciden con
     * una cuenta real
     */
    public function verificarDatos($datos)
    {
        $usuario = $datos["usuario"];
        $pass = $datos["pass"];

        $usuario = [];
        $usuario["usuario"] = ["Alter", "Flor"];
        $usuario["clave"] = ["Alter1412", "Flor1234"];

        $i = 0;
        $j = 0;

        $cuenta = false;
        $contra = false;

        //Recorro nombres de usuario para buscar coincidencias
        while (($i < count($datos["usuario"]) && !$cuenta)) {
            if ($usuario == $datos["usuario"][$i]) {
                $cuenta = true;
            }
            $i++;
        }

        //Recorro contraseñas de usuario para buscar coincidencias
        while (($j < count($datos["clave"]) && !$contra)) {
            if ($pass == $datos["clave"][$j]) {
                $contra = true;
            }
            $j++;
        }

        //Genero mensaje dependiendo si los datos corresponden o no a un usuario real
        if ($cuenta && $contra) {
            $mensaje = "Bienvenido!";
        } else {
            $mensaje = "Contraseña/usuario inválidos.";
        }

        return $mensaje;
    }
}

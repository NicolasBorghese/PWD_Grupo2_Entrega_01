<?php

class DatosPersona
{
    /**
     * Determina si una persona es mayor de edad o no
     * @param int $edad
     * @return string
     */
    public function textoEdad($edad)
    {
        if ($edad >= 18) {
            $textoEdad = "</br>Es mayor de edad";
        } else {
            $textoEdad = "</br>Es menor de edad";
        }
        return $textoEdad;
    }

    /**
     * Crea mensaje final concatenando cadenas de string
     * @param string $nombre, $apellido, $direccion, $estudios, $sexo, $textoEdad
     * @param int $edad
     * @return string
     */
    public function datosPersonales($nombre, $apellido, $edad, $direccion, $estudios, $sexo, $textoEdad)
    {
        $mensaje = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Dirección: " . $direccion .
            "</br>Estudios: " . $estudios . "</br>Sexo: " . $sexo . "</br>" . $textoEdad . "</br>";
        return $mensaje;
    }
}

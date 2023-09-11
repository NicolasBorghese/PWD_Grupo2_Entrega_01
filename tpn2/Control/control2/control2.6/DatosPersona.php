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
     * Genera mensaje con los deportes que practica una persona
     * @param array $deportes
     * @return string
     */
    public function textoDeportes($deportes)
    {
        if (count($deportes) != 0) {
            $colDeportes = $deportes;
            $cadena = implode(", ", $colDeportes);
            $textoDeportes = "</br>Practica los siguientes deportes: " . $cadena;
        } else {
            $textoDeportes = "</br>No practica ningún deporte. ";
        }
        return $textoDeportes;
    }

    /**
     * Crea mensaje final concatenando cadenas de string
     * @param string $nombre, $apellido, $direccion, $deportes, $estudios, $sexo, $textoEdad
     * @param int $edad
     * @return string
     */
    public function datosPersonales($nombre, $apellido, $edad, $direccion, $deportes, $estudios, $sexo, $textoEdad)
    {
        $mensaje = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Dirección: " . $direccion .
            "</br>Estudios: " . $estudios . "</br>Sexo: " . $sexo . $deportes . "</br>" . $textoEdad . "</br>";
        return $mensaje;
    }
}

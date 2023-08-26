<?php
class CalculaTarifa {

    //ATRIBUTOS

    //CONSTRUCTOR
    public function __construct(){
    }

    //MÉTODOS PROPIOS

    /**
     * Lee un valor recibido, si es un número indica si es positivo, negativo o cero.
     * 
     * @param int $edad
     * @param string $estudia
     * @return string
     */
    public function calcularTarifa($edad, $estudia){

        if (ctype_digit($edad)) {

            if ($estudia == "si" || $estudia == "no") {

                if ($edad < 12 && $estudia == "si") {
                    $respuesta = 160;

                } else if ($edad >= 12 && $estudia == "si") {
                    $respuesta = 180;

                } else {
                    $respuesta = 300;
                }

            } else {
                $respuesta = "error";
            }

        } else {
            $respuesta = "error";
        }

        return $respuesta;
    }

}
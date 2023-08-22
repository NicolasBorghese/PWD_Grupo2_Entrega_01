<?php
class PositividadNumero {

    //ATRIBUTOS

    //CONSTRUCTOR
    public function __construct(){
    }

    //MÉTODOS PROPIOS

    /**
     * Lee un valor recibido, si es un número indica si es positivo, negativo o cero.
     * 
     * @param float $numero
     * @return string
     */
    public function clasificarNumero($numero){

        if (is_numeric($numero)){

            if ($numero > 0){
                $respuesta = "El número ingresado es positivo<br>";
            } else if ($numero < 0){
                $respuesta = "El número ingresado es negativo<br>";
            } else {
                $respuesta = "El número ingresado es cero<br>";
            }
            
        } else {
            $respuesta = "ERROR: el valor ingresado no es un número<br>";
        }

        return $respuesta;
    }

}

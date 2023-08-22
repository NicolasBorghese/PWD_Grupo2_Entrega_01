<?php
class VerificaMayoriaEdad {

    //ATRIBUTOS

    //CONSTRUCTOR
    public function __construct(){
    }

    //MÉTODOS PROPIOS

    /**
     * Lee una edad recibida por parámetro, si el dato es correcto retorna un string que indica si
     * la persona es mayor de edad o no
     * 
     * @param int $edad
     * @return string
     */
    public function indicaMayoriaEdad($edad){

        $datosCorrectos = true;

        if(ctype_digit($edad)){
            if($edad >= 18){
                $respuesta = "Soy mayor de edad";
            } else {
                $respuesta = "Soy menor de edad";
            }
            
        } else {
            $datosCorrectos = false;
        }

        if(!$datosCorrectos){
            $respuesta = "Error al ingresar datos";
        }

        return $respuesta;
    }
}
<?php
class DatosPersonaE4 {

    //ATRIBUTOS

    //CONSTRUCTOR
    public function __construct(){
    }

    //MÉTODOS PROPIOS

    /**
     * Lee los datos recibidos por parámetro.
     * Si todos están correctos devuelve true, false en caso contrario
     * 
     * @param string $nombre
     * @param string $apellido
     * @param int $edad
     * @param string $direccion
     * @return string
     */
    public function verificarDatos($nombre, $apellido, $edad, $direccion){

        $datosCorrectos = true;

        if (!preg_match('/^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/', $nombre)){
            $datosCorrectos = false;
        }

        if (!preg_match('/^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/', $apellido)){
            $datosCorrectos = false;
        }

        if (!ctype_digit($edad)){
            $datosCorrectos = false;
        }

        if ($direccion == ""){
            $datosCorrectos = false;
        }

        return $datosCorrectos;
    }

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
                $respuesta = "Es mayor de edad";
            } else {
                $respuesta = "Es menor de edad";
            }
            
        } else {
            $datosCorrectos = false;
        }

        if(!$datosCorrectos){
            $respuesta = "Error al ingresar dato de edad";
        }

        return $respuesta;
    }
}
<?php
class SaludoPersonalizado {

    //ATRIBUTOS

    //CONSTRUCTOR
    public function __construct(){
    }

    //MÉTODOS PROPIOS

    /**
     * Lee los datos recibidos por parámetro y si todo están correctos crea un saludo personalizado
     * 
     * @param string $nombre
     * @param string $apellido
     * @param int $edad
     * @param string $direccion
     * @return string
     */
    public function crearSaludo($nombre, $apellido, $edad, $direccion){

        $datosCorrectos = true;

        if(preg_match('/^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/', $nombre) && preg_match('/^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/', $apellido) &&
        $nombre !="" && $apellido !=""){


            if(ctype_digit($edad) && $direccion !=""){
                $respuesta = "Hola, yo soy ".$nombre." ".$apellido.", tengo ".$edad." años y vivo en ".$direccion;
            } else {
                $datosCorrectos = false;
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
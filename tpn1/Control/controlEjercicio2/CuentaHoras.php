<?php
class CuentaHoras {

    //ATRIBUTOS

    //CONSTRUCTOR
    public function __construct(){
    }

    //MÉTODOS PROPIOS

    /**
     * Lee un arreglo que cada indice guarda las horas por día que tiene una materia.
     * Si los datos son correctos se suman, retorna un número con el resultado.
     * 
     * @param array $arregloHoras
     * @return float
     */
    public function sumarHoras($arregloHoras){
        $cantHoras = 0;
        $iter = 0;
        $error = false;

        do {

            if(is_numeric($arregloHoras[$iter])){
                $cantHoras += $arregloHoras[$iter];

            } else if ($arregloHoras[$iter] == ""){
                $cantHoras += 0;

            } else {
                $error = true;

            }
            $iter++;

        } while ($iter < 5 && !$error);

        if(!$error){
            $respuesta = $cantHoras;
        } else {
            $respuesta = -1;
        }

        return $respuesta;
    }

}
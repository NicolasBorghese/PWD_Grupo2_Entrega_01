<?php

class Calculadora
{
    public function calcular($num1, $num2, $operacion)
    {
        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                $resultado = $num1 / $num2;
                break;
        }
        return $resultado;
    }
}

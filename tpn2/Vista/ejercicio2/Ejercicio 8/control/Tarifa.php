<?php

class Tarifa
{
    public function calcularMonto($edad, $condicion)
    {
        $tarifa = 300;
        if ($condicion == "si" || $edad < 12) {
            $tarifa = 160;
        } elseif ($condicion == "si" && $edad >= 12) {
            $tarifa = 180;
        }
        return $tarifa;
    }
}

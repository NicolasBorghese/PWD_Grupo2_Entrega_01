<?php
$tituloPagina = "Ejercicio 7 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer7";

include_once('../estructura/encabezado.php');
?>

                    <div class="contenedorEnunciado">
                        Operaciones matematicas
                    </div>
                    <div class="contenedorCentrado">
                        <?php

                        include_once '../../control/controlEjercicio7/Calculadora.php';

                        if ($_POST) {

                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $operacion = $_POST['operacion'];

                            $obj = new Calculadora();
                            $resultado = $obj->calcular($num1, $num2, $operacion);
                            
                            echo "El resultado es: " . $resultado . "</br>";
                        }
                        ?>
                        <a href="ejercicio7.php"> Volver </a>
                    </div>

<?php
include_once('../estructura/pie.php');
?>
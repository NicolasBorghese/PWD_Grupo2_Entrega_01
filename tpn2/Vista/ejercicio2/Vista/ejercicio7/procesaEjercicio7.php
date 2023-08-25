<?php
    $tituloPagina = "Ejercicio 2.7 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer7";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
    <?php
    if ($_POST) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

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
        echo "El resultado es: " . $resultado . "</br>";
    }
    ?>
    <a href="ejercicio7.php"> Volver </a>
</div>
<?php
include_once('../estructura/pie.php');
?>
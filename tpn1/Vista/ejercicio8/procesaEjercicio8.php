<?php
$tituloPagina = "Ejercicio 8 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer8";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
    <?php
    if ($_POST) {
        $edad = $_POST['edad'];
        $condicion = $_POST['condicion'];
        $tarifa = 300;

        if ($condicion == "si" || $edad < 12) {
            $tarifa = 160;
        } elseif ($condicion == "si" && $edad >= 12) {
            $tarifa = 180;
        }

        echo "<h2>Total a pagar:</h2></br> $" . $tarifa;
    }
    ?>

    </br>
    <a href="ejercicio8.php"> Volver </a>
</div>

<?php
include_once('../estructura/pie.php');
?>
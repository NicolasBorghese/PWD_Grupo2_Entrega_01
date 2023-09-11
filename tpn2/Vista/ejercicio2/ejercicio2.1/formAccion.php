<?php
include_once("../../../Control/control2/control2.1/PositividadNumero.php");

if ($_POST) {
    $numero = $_POST['numero'];
    $obj = new PositividadNumero();
    $respuesta = $obj->clasificarNumero($numero);
} else {
    $respuesta = "No se recibieron datos<br>";
}

$tituloPagina = "Ejercicio 2.1 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer1";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">

    <?php
    echo $respuesta;
    ?>

    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver"><br> Volver <a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>
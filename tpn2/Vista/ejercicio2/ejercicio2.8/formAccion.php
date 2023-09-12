<?php

include_once '../../../configuracion.php';

$datos = data_submitted();
$obj = new CalculaTarifa();
$tarifa = $obj->calcularTarifa($datos);

$tituloPagina = "Ejercicio 8 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer8";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Calcular tarifa para entrada de cine
</div>
<div class="contenedorCentrado">
    <?php

    if ($tarifa != "error") {
        echo "El precio de la entrada es de: $" . $tarifa;
    } else {
        echo "error al ingresar los datos";
    }

    ?>
    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver"><br> Volver <a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>
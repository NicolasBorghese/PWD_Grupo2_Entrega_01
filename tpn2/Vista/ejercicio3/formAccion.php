<?php
include_once 'configuracion.php';

$datos = data_submitted();
$obj = new Password();
$resultado = $obj->verificarDatos($datos);

$tituloPagina = "Ejercicio 3 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer3";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp2 ejercicio 1
            -->

<div class="contenedorCentrado">

    <?php
    echo $resultado;
    ?>

    <div id="contieneLinkVolver">
        <a href="ejercicio3.php" id="linkVolver"><br> Volver <a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>
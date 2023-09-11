<?php
include_once '../../../Control/control2/control2.5/DatosPersona.php';
include_once '../../../Utiles/funciones.php';

$datos = data_submitted();
$obj = new DatosPersona();
$cadenaDatos = $obj->datosPersonales($datos);

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
    <?php
    echo $cadenaDatos;
    ?>
    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver">Volver</a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>
<?php
include_once '../../../Control/control2/control2.5/DatosPersona.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $estudios = $_POST['estudios'];
    $sexo = $_POST['sexo'];
}

$obj = new DatosPersona();
$textoEdad = $obj->textoEdad($edad);

$cadenaDatos = $obj->datosPersonales($nombre, $apellido, $edad, $direccion, $estudios, $sexo, $textoEdad);

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
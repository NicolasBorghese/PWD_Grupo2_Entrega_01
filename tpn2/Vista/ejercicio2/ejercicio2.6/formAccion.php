<?php

include_once '../../../Control/control2/control2.6/DatosPersona.php';

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

//Compruebo si existe la clave 'deportes'
if (key_exists('deporte', $_POST)) {
    $deportes =  $_POST['deporte'];
} else {
    $deportes = [];
}

$textoDeportes = $obj->textoDeportes($deportes);
$cadenaDatos = $obj->datosPersonales($nombre, $apellido, $edad, $direccion, $textoDeportes, $estudios, $sexo, $textoEdad);

$tituloPagina = "Ejercicio 2.6 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer6";

include_once('../estructura/encabezado.php');

?>

<div class="contenedorCentrado">
    <?php
    echo $cadenaDatos;
    ?>
    <a href="formulario.php">Volver</a>
</div>

<?php
include_once('../estructura/pie.php');
?>
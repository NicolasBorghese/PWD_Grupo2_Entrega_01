<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new CargaArchivo();
$cartelera = $obj->generarCartelera($datos);

$tituloPagina = "Ejercicio 2 del TP3";
$tp = "botonTP3";
$ejercicio = "botonEjer2";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorForCine">

  <?php
  echo $cartelera;
  ?>

</div>
<?php
include_once('../estructura/pie.php');
?>
<?php
include_once '../../configuracion.php';

$nombreArchivo = strtolower($_FILES['miArchivo']['name']);
$objetoPdf = new CargaPdf();
$pudo = $objetoPdf->analizarArchivoPdf($nombreArchivo);
$mensaje = $objetoPdf->mostrarMensaje($nombreArchivo, $pudo);

$tituloPagina = "Ejercicio 1 del TP3";
$tp = "botonTP3";
$ejercicio = "botonEjer1";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">

  <?php
  echo $mensaje;
  ?>

</div>
<?php
include_once('../estructura/pie.php');
?>
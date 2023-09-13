<?php
$tituloPagina = "Ejercicio 1 del TP3";
$tp = "botonTP3";
$ejercicio = "botonEjer1";

include_once('../estructura/encabezado.php');
include_once '../../configuracion.php';
?>

<div class="contenedorCentrado">

  <?php
  // controles de archivo

  $nombreArchivo = strtolower($_FILES['miArchivo']['name']);

  $objetopdf = new CargaPdf();
  $mensaje = $objetopdf->analizarArchivo($nombreArchivo);

  if ($mensaje == 1) {
    echo "Lo siento solo se permiten archivos PDF o DOC. \n";
  } else if ($mensaje == 2) {
    echo "El tamano supera el limite. max 2mb";
  } else if ($mensaje == 3) {
    echo "El archivo " . $nombreArchivo . " se ha sido subido con Éxito <br />";
    echo '<a href="../../Archivos/">Ver archivo</a>';
  } else {
    echo "Lo siento, hubo un error al cargar su archivo.";
  }
  ?>
</div>
<?php
include_once('../estructura/pie.php');
?>
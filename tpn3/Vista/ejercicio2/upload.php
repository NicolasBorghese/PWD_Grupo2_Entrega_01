<?php 
    $tituloPagina = "Ejercicio 2 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer2";
    
    include_once('../estructura/encabezado.php');
    include_once('../../control/controlEjercio2/cargaText.php');
    ?>

    <div class="contenedorCentrado">
 
    <?php
 $nombreArchivo= strtolower( $_FILES['miArchivo']['name'] ); 

 $objetotex= new cargaTex();
 $mensaje= $objetotex->analizarArchivoTex($nombreArchivo);

 if($mensaje == 0){
  echo "<h3>Lo siento solo se permiten archivos txt. <h3>\n";
 }
 else{
    //convertir el contenido en un text area
    $archivo = file_get_contents('../../archivos/'.$nombreArchivo);

            
    echo "<div class='contenedorEnunciado'>
    <p>Este es el contenido de su archivo de texto cargado</p>
    </div>
     <textarea  rows='30' cols='50'> $archivo </textarea>";
 }
 ?>
  </div>
<?php
    include_once('../estructura/pie.php');
?>
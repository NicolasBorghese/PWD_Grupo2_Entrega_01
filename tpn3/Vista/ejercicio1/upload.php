<?php 
    $tituloPagina = "Ejercicio 1 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer1";
    
    include_once('../estructura/encabezado.php');
?>

    <div class="contenedorCentrado">

<?php
    // controles de archivo
    
    $subirOk = true;
    
    
    $nombreArchivo= strtolower( $_FILES['miArchivo']['name'] ); 
    
    //Busco en el nombre si aparece pdf o doc
    
    $mystring = $nombreArchivo;
    $encontrar   = '.pdf';
    $encontrar2   = '.doc';
    $pos1 = strpos($mystring, $encontrar);
    $pos2 = strpos($mystring, $encontrar2);
    
     //controar formatos
     if($pos1=== false || $pos1=== false) {
       echo "Lo siento solo se permiten archivos PDF o DOC. \n";
       $subirOk = false;
     }
     // chuequear tamano
    if ($_FILES['miArchivo']["size"] > 2000000) {
        echo "El tamano supera el limite. max 2mb";
        $subirOk = false;
      }
    
    if ($subirOk == false) {
    
      echo "ERROR: no se pudo cargar el archivo";
    }else{
      if (move_uploaded_file($_FILES['miArchivo']['tmp_name'],'../../archivos/'.$nombreArchivo)){
        echo "El archivo ".$nombreArchivo." se ha sido subido con Éxito <br />";
        // escribir html en php se usa comillas simples
        echo "<a href='../../archivos/'.$nombreArchivo.>Ver archivo</a>";
        
      }else{
        echo "Lo siento, hubo un error al cargar su archivo.";
      }
    }
    ?>
    </div>
<?php
    include_once('../estructura/pie.php');
?>
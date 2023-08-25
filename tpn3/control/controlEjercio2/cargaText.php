<?php
class cargaTex{

 function analizarArchivoTex( $nombreArchivo){
    

  $mystring = $nombreArchivo;
  $encontrar   = '.txt';
  $pos = strpos($mystring, $encontrar);
  
   //controlar formatos
   if($pos=== false ) {
     $mensaje=0;
   
   }else if
     (move_uploaded_file($_FILES['miArchivo']['tmp_name'],'../../archivos/'.$nombreArchivo)){
      $mensaje=1;
    }
 return $mensaje;
}

 }

?>
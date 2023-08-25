<?php
class cargaPdf{

 function analizarArchivo( $nombreArchivo){
    

  $subirOk = true;
  
  //Busco en el nombre si aparece pdf o doc
  
  $mystring = $nombreArchivo;
  $encontrar   = '.pdf';
  $encontrar2   = '.doc';
  $pos1 = strpos($mystring, $encontrar);
  $pos2 = strpos($mystring, $encontrar2);
  
   //controar formatos
   if($pos1=== false || $pos1=== false) {
     $mensaje=1;
     $subirOk = false;
   }
   // chuequear tamano
  if ($_FILES['miArchivo']["size"] > 2000000) {
      echo "El tamano supera el limite. max 2mb";
      $subirOk = false;
      $mensaje=2;
    }
  
  if ($subirOk == false) {
    $mensaje=0;
  }else{
    if (move_uploaded_file($_FILES['miArchivo']['tmp_name'],'../../archivos/'.$nombreArchivo)){
      $mensaje=3;
    }else{
      $mensaje=0;
    }
  }
 return $mensaje;
}

 }

?>
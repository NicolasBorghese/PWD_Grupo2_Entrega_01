<?php
class CargaArchivo{

 function analizarArchivo( $nombreArchivo){
    
    $nombreArchivo= strtolower($nombreArchivo); 
    $subirOk = true;
    //controlo que sea imagen
    
    $mystring = $nombreArchivo;
    $encontrar   = '.png';
    $encontrar2   = '.jpg';
    $pos1 = strpos($mystring, $encontrar);
    $pos2 = strpos($mystring, $encontrar2);
    
     //controar formatos
     if($pos1=== false || $pos1=== false) {
       $subirOk = false;
     } else if (move_uploaded_file($_FILES['imagenPeli']['tmp_name'],'../../archivos/'.$nombreArchivo)){
        $subirOk = true;
    }

    return $subirOk;
}

 }

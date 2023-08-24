<?php 
    $tituloPagina = "Ejercicio 2 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer2";
    
    include_once('../estructura/encabezado.php');
    include_once('../../control/controlEjercio3/vArchivo.php');
?>

    <div class="contenedorForCine">

    <?php
if ($_POST){
$titulo= $_POST["titulo"] ;
$actores= $_POST["actores"] ;
$director= $_POST["director"] ;
$guion= $_POST["guion"] ;
$produccion= $_POST["produccion"] ;
$anio= $_POST["anio"] ;
$nacionalidad= $_POST["nacionalidad"] ;
$genero= $_POST["genero"] ;
$duracion= $_POST["duracion"] ;
$opcionEdad= $_POST["opcionEdad"] ;

 //Evalua generos 
 if($genero == 1){
    $valorGenero= "Terror";
   }
   else if($genero == 2){
    $valorGenero= "Comedia";
   }
   else if($genero == 3){
    $valorGenero= "Ciencia Ficcion";
   }
  else if($genero == 4){
  $valorGenero= "Animada";
   }
 else if($genero == 5){
    $valorGenero= "Triller";
     }
 else {
        $valorGenero= "Accion";
         }

//  Evalua edad
if($opcionEdad== 1){
    $edad= " Todo Público.";
   }
   else if($opcionEdad == 2){
    $edad= " Mayores de 7 años";
   }else{
    $edad= "Mayores de 18 años";
   }

   // verifica que se puedan cargar el archivo
   $nombreArchivo= strtolower( $_FILES['imagenPeli']['name'] ); 
   $subirArchivo= new cargaArchivo();
   $fueCargado= $subirArchivo->analizarArchivo($nombreArchivo);
   
   if($fueCargado == false){
     $mensaje='El archivo no puede ser cargado, revise que el formato sea PNG o JPG';
   }else{
     $mensaje= "";
   } 
/*descripcion Pantalla*/
echo"
<div class='container'>
  <div class='row'>
    <div class='col-md-12'>
    <h4 id='textPeli'>La pelìcula introducida es</h4>
    <p><strong>$mensaje</strong></<p>
    <img src='../../archivos/$nombreArchivo' height='70px' width='70px' border='2px' alt='Pelicula'/>
    <br/>
    <p ><strong>Titulo:</strong> $titulo <br/>
       <strong>Actores:</strong>$actores <br/>
       <strong>Director:</strong> $director <br/>
       <strong>Guiòn:</strong> $guion<br/>
       <strong>Producion:</strong> $produccion<br/>
       <strong>Año:</strong> $anio <br/>
       <strong>Nacionalidad:</strong> $nacionalidad <br/>
       <strong>Gènero:</strong>  $valorGenero<br/>
       <strong>Duraciòn:</strong>$duracion<br/>
       <strong>Restrincciones de edad:</strong> $edad <br/>
    </p>
   </div>
  </div>

</div>";

}
?>
</div>
<?php
    include_once('../estructura/pie.php');
?>
<?php 
    $tituloPagina = "Ejercicio 2 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer2";
    
    include_once('../estructura/encabezado.php');
?>

    <div class="contenedorCentrado">

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


/* archivo*/  

$nombreArchivo= strtolower( $_FILES['imagenPeli']['name'] ); 
$subirOk = true;
//controlo que sea imagen

$mystring = $nombreArchivo;
$encontrar   = '.png';
$encontrar2   = '.jpg';
$pos1 = strpos($mystring, $encontrar);
$pos2 = strpos($mystring, $encontrar2);

 //controar formatos
 if($pos1=== false || $pos1=== false) {
    $mensaje= "Lo siento solo se permiten archivos png o jpg. \n";
   $subirOk = false;
 }



if ($subirOk == false) {

 $mensaje= "ERROR: no se pudo cargar el archivo";
}else{
  if (move_uploaded_file($_FILES['imagenPeli']['tmp_name'],'../../archivos/'.$nombreArchivo)){
    $mensaje =" ";
   
  }else{
    $mensaje= "Lo siento, hubo un error al cargar su archivo.";
  }
}
/*descripcion Pantalla*/
echo"
<div class='container'>
  <div class='row'>
    <div class='col-md-6'>
    <h3>La pelìcula introducida es</h3>
    <p><strong>$mensaje</strong></<p>
    <img src='../../archivos/$nombreArchivo' height='70px' width='70px' border='2px' alt='Pelicula'/>
    <br/>
    <p><strong>Titulo:</strong> $titulo <br/>
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
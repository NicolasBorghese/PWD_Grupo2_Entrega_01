<?php
    $tituloPagina = "Ejericio 6 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer6";
    
    include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
        <?php
            if ($_GET){
            $nombre = $_GET['Nombre'] ;
            $apellido = $_GET['Apellido'] ;
            $edad = $_GET['Edad'] ;
            $direccion = $_GET['Direccion'] ;
            $estudios = $_GET['estudio'] ;
            $sexo = $_GET['sexo'] ;
            }

            $contador = 0;
            if (isset($_REQUEST['voley'])) {
                $contador ++;
            }
            if (isset($_REQUEST['futbol'])) {
                $contador ++;
            }
            if (isset($_REQUEST['tennis'])) {
                $contador ++;
            }
            if (isset($_REQUEST['basquet'])) {
                $contador ++;
            }

            echo "Hola mi nombre es ".$nombre." ".$apellido." tengo ". $edad. " años, vivo en la calle ".$direccion. 
            " mis estudios son: ".$estudios." y mi sexo es: ".$sexo. " la cantidad de deportes que realizo es de: ".$contador;
        ?>
    <a href="ejercicio6.php"> Volver <a>
</div>
<?php
 include_once('../estructura/pie.php');
?>
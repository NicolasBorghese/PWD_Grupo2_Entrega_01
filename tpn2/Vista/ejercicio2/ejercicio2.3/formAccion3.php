<?php
    include_once("../../../Control/control2/control2.3/SaludoPersonalizado.php");
    
    $obj = new SaludoPersonalizado();

    if ($_GET){
        $nombre = $_GET['nombreForm'];
        $apellido = $_GET['apellidoForm'];
        $edad = $_GET['edadForm'];
        $direccion = $_GET['direccionForm'];

        $respuesta = $obj->crearSaludo($nombre, $apellido, $edad, $direccion);

    } else {
        $respuesta = "No se recibieron datos";
    }

    $tituloPagina = "Ejercicio 2.3 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer3";
    
    include_once('../estructura/encabezado.php');
?>
     
            <div class="contenedorCentrado">

                <?php
                    echo $respuesta;
                ?>
                
                <div id="contieneLinkVolver">
                    <a href="ejercicio3.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>
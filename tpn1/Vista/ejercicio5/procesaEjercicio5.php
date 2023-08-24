<?php
    include_once("../../Control/controlEjercicio5/DatosPersonaE5.php.php");

    $objDatos = new DatosPersonaE5();

    if ($_GET){
        $nombre = $_GET['nombreForm'];
        $apellido = $_GET['apellidoForm'];
        $edad = $_GET['edadForm'];
        $direccion = $_GET['direccionForm'];

        $respuesta1 = $objSaludo->crearSaludo($nombre, $apellido, $edad, $direccion);
        $respuesta2 = $objEdad->indicaMayoriaEdad($edad);
        $respuesta = $respuesta1."<br>".$respuesta2;

    } else {
        $respuesta = "No se recibieron datos";
    }

    $tituloPagina = "Ejericio 5 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer5";
    
    include_once('../estructura/encabezado.php');
?>
     
            <div class="contenedorCentrado">

                <?php
                    echo $respuesta;
                ?>
                
                <div id="contieneLinkVolver">
                    <a href="ejercicio5.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>
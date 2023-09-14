<?php
    include_once("../../Control/control4/DatosPersonaE4.php");

    $objDatos = new DatosPersonaE4();

    if ($_GET){
        $nombre = $_GET['nombreForm'];
        $apellido = $_GET['apellidoForm'];
        $edad = $_GET['edadForm'];
        $direccion = $_GET['direccionForm'];

        $resultado = $objDatos->verificarDatos($nombre, $apellido, $edad, $direccion);

        if($resultado){

            $respuestaEdad = $objDatos->indicaMayoriaEdad($edad);

            $respuesta =
            "Nombre: ".$nombre."<br>
            Apellido: ".$apellido."<br>
            Edad: ".$edad."<br>
            Dirección: ".$direccion."<br>
            <br>".$respuestaEdad;

        } else {

            $respuesta = "Se ingresaron mal los datos";

        }

    } else {
        $respuesta = "No se recibieron datos";
    }

    $tituloPagina = "Ejericio 4 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer4";
    
    include_once('../estructura/encabezado.php');
?>
     
            <div class="contenedorEnunciado">
                Resultado datos personales
            </div>
            <div class="contenedorCentrado">

                <?php
                    echo $respuesta;
                ?>
                
                <div id="contieneLinkVolver">
                    <a href="ejercicio4.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>
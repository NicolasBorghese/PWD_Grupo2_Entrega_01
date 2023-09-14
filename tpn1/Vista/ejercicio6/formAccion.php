<?php
    include_once("../../Control/control6/DatosPersonaE6.php");

    $objDatos = new DatosPersonaE6();

    if ($_GET){
        $nombre = $_GET['nombreForm'];
        $apellido = $_GET['apellidoForm'];
        $edad = $_GET['edadForm'];
        $direccion = $_GET['direccionForm'];
        $sexo =  $_GET['sexoForm'];
        $estudios =  $_GET['estudios'];
        if (key_exists('deporte',$_GET)){
            $deportes =  $_GET['deporte'];
        }else{
            $deportes = [];
        }
        
        $resultado = $objDatos->verificarDatos($nombre, $apellido, $edad, $direccion, $sexo);
        
        if($resultado){

            $respuestaEdad = $objDatos->indicaMayoriaEdad($edad);

            $contadorDeporte = $objDatos->contadorDeporte($deportes);

            $respuesta =
            "Nombre: ".$nombre."<br>
            Apellido: ".$apellido."<br>
            Edad: ".$edad."<br>
            Dirección: ".$direccion."<br>
            Sexo: ".$sexo."<br>
            Estudios: ".$estudios."<br>
            Cantidad de deportes: ".$contadorDeporte."<br>
            <br>".$respuestaEdad;

        } else {

            $respuesta = "Se ingresaron mal los datos";

        }

    } else {
        $respuesta = "No se recibieron datos";
    }

    $tituloPagina = "Ejericio 6 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer6";
    
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
                    <a href="ejercicio6.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>
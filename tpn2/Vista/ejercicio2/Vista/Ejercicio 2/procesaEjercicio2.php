<?php
    include_once("../../Control/controlEjercicio2/CuentaHoras.php");

    $obj = new CuentaHoras();

    if ($_GET){
        $hsLunes = $_GET['hsLunes'];
        $hsMartes = $_GET['hsMartes'];
        $hsMiercoles = $_GET['hsMiercoles'];
        $hsJueves = $_GET['hsJueves'];
        $hsViernes = $_GET['hsViernes'];

        $arregloHoras = [$hsLunes, $hsMartes, $hsMiercoles, $hsJueves, $hsViernes];

        $respuesta = $obj->sumarHoras($arregloHoras);

    } else {
        $respuesta = "No se recibieron datos";
    }

    $tituloPagina = "Ejercicio 2.2 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer2";
    
    include_once('../estructura/encabezado.php');
?>
     
            <div class="contenedorCentrado">

                <?php
                    if ($respuesta == -1){
                        echo "Se ingresaron datos incorrectos";
                    } else if (is_numeric($respuesta)){
                        echo "La cantidad de horas de cursada por semana son: ".$respuesta." HS";
                    } else {
                        echo $respuesta;
                    }
                ?>
                
                <div id="contieneLinkVolver">
                    <a href="ejercicio2.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>
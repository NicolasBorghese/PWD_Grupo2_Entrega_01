<?php
    include_once("../../Control/controlEjercicio1/PositividadNumero.php");

    $obj = new PositividadNumero();

    if ($_POST){
        $numero = $_POST['numero'] ;
        $respuesta = $obj->clasificarNumero($numero);
    } else {
        $respuesta = "No se recibieron datos<br>";
    }

    $tituloPagina = "Ejericio 1 del TP1 ";
    $tp = "botonTP1";
    $ejercicio = "botonEjer1";
    
    include_once('../estructura/encabezado.php');
?>
     
            <div class="contenedorCentrado">

                <?php
                    echo $respuesta;
                ?>
                
                <div id="contieneLinkVolver">
                    <a href="ejercicio1.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>
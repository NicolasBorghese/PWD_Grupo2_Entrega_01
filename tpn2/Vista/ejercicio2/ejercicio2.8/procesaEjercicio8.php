<?php
    $tituloPagina = "Ejercicio 2.8 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer8";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
    <?php
/*desca*/
    if ($_POST) {
        $edad = $_POST['edad'];
        $condicion = $_POST['condicion'];
        $tarifa = 300;

        if ($edad < 12) {
            echo "<h3>Precio de la entrada menores de 12 años: 160 Pesos.</h3><br/>";
        } else {
            if ($condicion == "si") {
                echo "<h3>Precio para estudiantes mayores a 12 años: 180 Pesos.</h3><br/>";
            } else if ($condicion == "no") {
                echo "<h3>Precio para NO estudiantes: 300 Pesos.</h3><br/>";
            }
            } 
		}
    ?>

    </br>
    <a href="ejercicio8.php"> Volver </a>
</div>

<?php
include_once('../estructura/pie.php');
?>

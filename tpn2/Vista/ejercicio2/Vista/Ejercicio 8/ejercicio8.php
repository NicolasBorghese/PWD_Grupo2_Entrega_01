<?php
    $tituloPagina = "Ejercicio 2.8 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer8";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 8
            -->

<div class="contenedorCentrado">
    <form id="form8" name="form8" method="post" action="procesaEjercicio8.php">
        <h2>Para calcular la tarifa, ingrese los siguientes datos</h2>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">

        <p></p>

        <label for="condicion">Estudia</label>
        <input type="radio" name="condicion" value="si">
        </br>
        <label for="condicion">No estudia</label>
        <input type="radio" name="condicion" value="no">

        <p></p>
        <input type="submit" name="submit" value="Enviar">
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>
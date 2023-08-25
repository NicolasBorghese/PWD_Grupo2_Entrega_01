<?php
    $tituloPagina = "Ejercicio 2.7 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer7";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 7
            -->

<div class="contenedorCentrado">
    <form id="form7" name="form7" method="post" action="procesaEjercicio7.php">
        <h2>Ingrese dos números</h2>

        <input type="number" id="num1" name="num1" required>
        <p></p>
        <input type="number" id="num2" name="num2" required>


        <h2>Seleccione operación matemática</h2>
        <select id="operacion" name="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACIÓN</option>
            <option value="division">DIVISIÓN</option>
        </select>

        <p></p>
        <input type="submit" name="submit" value="Enviar">

    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>
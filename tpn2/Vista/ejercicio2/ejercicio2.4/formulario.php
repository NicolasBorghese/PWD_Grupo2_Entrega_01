<?php
$tituloPagina = "Ejercicio 2.4 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer4";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 4
                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos 
                directamente en la url para ver los dos posibles mensajes.
            -->

<div class="contenedorEnunciado">
    Complete los datos del formulario
</div>

<div class="contenedorCentrado col-5">
    <form name="form" id="form" method="get" action="formAccion.php" novalidate>
        <table>
            <tr>
                <td><label for="nombreForm">Nombre:</label></td>
                <td><input type="text" name="nombreForm" id="nombreForm" minlength="3" required></td>
            </tr>
            <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="nombreForm"></label></td></tr>
            <tr>
                <td><label for="apellidoForm">Apellido:</label></td>
                <td><input type="text" name="apellidoForm" id="apellidoForm" minlength="3" required></td>
            </tr>
            <tr><td></td><td><label id="apellidoForm-error" class="error manual-error" for="apellidoForm"></label></td></tr>
            <tr>
                <td><label for="edadForm">Edad</label></td>
                <td><input type="number" name="edadForm" id="edadForm" min="0" required></td>
            </tr>
            <tr><td></td><td><label id="edadForm-error" class="error manual-error" for="edadForm"></label></td></tr>
            <tr>
                <td><label for="direccionForm">Apellido:</label></td>
                <td><input type="text" name="direccionForm" id="direccionForm" required></td>
            </tr>
            <tr><td></td><td><label id="direccionForm-error" class="error manual-error" for="direccionForm"></label></td></tr>
        </table>
        <input type="submit" name="submit" id="submit" value="Enviar" class="botonFormulario">
    </form>

</div>

<?php
include_once('../estructura/pie.php');
?>
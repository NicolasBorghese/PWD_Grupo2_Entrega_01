<?php
$tituloPagina = "Ejercicio 8 del TP4";
$tp = "botonTP4";
$ejercicio = "botonEjer8";

include_once('../estructura/encabezado.php');
?>

<!-- 
    tp4 ejercicio 8
-->

<div class="contenedorCentrado">
    <p>
        <strong> Cambio de Dueño</strong>
    <div class="container col-md-8">
        <form action="accionCambioDuenio.php" method="post" class="needs-validation row-md-4" novalidate>
            <div>
                <label>Patente del auto: </label><input type="text" pattern="[A-Z]{3}\s[0-9]{3}" name="Patente" id="input_nombre" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una patente valida! 3 Letras Mayusculas, un espacio y 3 numeros.
                </div>

            </div>
            <div>
                <label>Documento del nuevo dueño: </label><input type="number" min="1000000" name="DniDuenio" id="input_apellido" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un DNI valido! solo numeros.
                </div>
            </div>
            <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Cargar">
        </form>
    </div>

    <script src="../estructura/js/validarCamposVacios.js"></script>

    </p>
</div>

<?php
include_once('../estructura/pie.php');
?>
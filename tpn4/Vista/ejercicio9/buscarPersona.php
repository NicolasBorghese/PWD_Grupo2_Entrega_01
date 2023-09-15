<?php 
    $tituloPagina = "Ejercicio 9 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer9";
    $rutaEstructura = "../";
    
    include_once('../estructura/encabezado.php');
?>
   <!-- 
        tp4 ejercicio 7
    -->

    <div class="contenedorCentrado">
    <form name="form_ejercicio9" method="get" action="accion/AccionBuscarPersona.php" class="needs-validation " novalidate>
                 INGRESE UN DNI A BUSCAR:<input type="text" id="NroDni" name="NroDni" placeholder="22985265" pattern="[0-9]{8}" maxlength="9" required><br>
                 <div class="valid-feedback">
                   Muy bien!
                </div>
                <div class="invalid-feedback">
                   Debe ingresar un DNI, debe ser sin espacios y sin puntos!
                </div>
                <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Buscar">
                </form>
                <a href="../ejercicio5/ListaPersona.php"> Ir a ListaPersona.php </a>
    <script src="../estructura/js/validarCamposVacios.js"></script>
    </div>

<?php
    include_once('../estructura/pie.php');
?>
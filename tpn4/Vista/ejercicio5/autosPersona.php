<?php 
    $tituloPagina = "Ejercicio 5 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer5";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
?>
    <!-- 
        tp4 ejercicio 5
    -->

    <div class="contenedorCentrado"  >
    <strong> Busca persona por dni</strong>
                <form name="form_ejercicio4" method="get" action="accion/formAccion.php" class="needs-validation " novalidate>
                 INGRESE UN DNI :<input type="text"  pattern="[0-9]{8}" id="NroDni" name="NroDni" placeholder="25456875" maxlength="8" required><br>
                 <div class="valid-feedback">
                   Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar un DNI, debe ser sin espacios y sin puntos!
                </div>
                <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Buscar">
                </form>
                <script src="../estructura/js/validarCamposVacios.js"></script>
     </div>

<?php
    include_once('../estructura/pie.php');
?>
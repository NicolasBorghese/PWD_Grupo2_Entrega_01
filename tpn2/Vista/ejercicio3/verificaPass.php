<?php
$tituloPagina = "Ejercicio 3 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer3";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp2 ejercicio 1
            -->

<div class="contenedorCentrado">
    <?php
    if ($_POST) {
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
        $datos = [];
        $datos["usuario"] = ["Alter", "Flor"];
        $datos["clave"] = ["Alter1412", "Flor1234"];
        $i = 0;
        $j = 0;
        $cuenta = false;
        $contra = false;

        while (($i < count($datos["usuario"]) && !$cuenta)) {
            if ($usuario == $datos["usuario"][$i]) {
                $cuenta = true;
            }
            $i++;
        }

        while (($j < count($datos["clave"]) && !$contra)) {
            if ($pass == $datos["clave"][$j]) {
                $contra = true;
            }
            $j++;
        }

        if ($cuenta && $contra) {
            echo "Bienvenido!";
        } else {
            echo "Contraseña/usuario inválidos.";
        }
    } else {
        echo "Error";
    }
    ?>

        <div id="contieneLinkVolver">
            <a href="ejercicio3.php" id="linkVolver"><br> Volver <a>
        </div>
</div>

<?php
include_once('../estructura/pie.php');
?>
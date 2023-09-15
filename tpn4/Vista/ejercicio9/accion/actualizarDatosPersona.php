<?php 
    $tituloPagina = "Ejercicio 9 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer9";
    $rutaEstructura = "../../";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");
    
    $datos= data_submitted();
    $objPersona = new AbmPersona();
    
    $listaPersonas = $objPersona->buscar($datos);
    if (count($listaPersonas) == 1 ){
        if ($objPersona-> modificacion($datos)){
            $mensaje = "Datos modificados correctamente";
        }else{
            $mensaje= "No fue posible modificar datos.";
        }
    
    }else{
        $mensaje = "Datos NO modificados";
    }
?>
    <!-- 
        tp4 ejercicio 9
    -->

    <div class="contenedorCentrado">
    <strong>ACTUALIZACION DE DATOS</strong>
        <h4><?php echo $mensaje ?> </h4>
        </br>
        <a href="../../ejercicio5/listaPersonas.php">Ir a ListaPersonas.php</a>
        <a href="../buscarPersona.php">Ir a BuscarPersona.php</a>

    </div>

<?php
    include_once('../../estructura/pie.php');
?>
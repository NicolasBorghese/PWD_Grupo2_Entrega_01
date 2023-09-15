<?php 
    $tituloPagina = "Ejercicio 4 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer4";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once('../../../configuracion.php');

    $datos= data_submitted();
    $objPersona = new  AbmPersona();
    $param[0] = ["NroDni"=>$datos['NroDni']];
    $listaPersonas = $objPersona->buscar($param[0]);
 

    if (count($listaPersonas) == 1 ){
        $mensaje= "La persona ya esta registrada.";
    } else {
        if ($objPersona->alta($datos)){
            $mensaje = "Se ha ingresado la persona con exito.";
        }else{
            $mensaje = "Hubo un error a ingresar los Datos";
        }
    }
?>
    <!-- 
        tp4 ejercicio 4
    -->

    <div class="contenedorCentrado">
        <h4><?php echo $mensaje ?> </h4>
        <a href="../../ejercicio5/listaPersonas.php">Ir a ListaPersonas.php </a>
        </br>
        <a href="../../ejercicio7/nuevoAuto.php"> Ir a NuevoAuto.php </a>
        </br>
        <a href="../nuevaPersona.php"> Volver </a>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>
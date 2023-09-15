<?php 
    $tituloPagina = "Ejercicio 7 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer7";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");

   

    $datos = data_submitted();
    //verEstructura($datos);
    $resp = false;
    $objAuto = new AbmAuto();
    $objPersona= new AbmPersona();
    //ver si el dni ingresado existe
    $dniDuenio[0]=["NroDni" => $datos["DniDuenio"]];
    $buscarDuenio=$objPersona->buscar($dniDuenio[0]);
    //verEstructura($buscarDuenio);

    if($buscarDuenio!=null){
        if($objAuto->alta($datos)){
        $resp =true;
        }
    }

    if($resp){
        $mensaje =  "Se agrego el vehiculo correctamente.";
    }else {
        $mensaje = "Dueño inexistente. <a href='../../ejercicio6/nuevaPersona.php'>Por Favor agregelo a la BD</a>";
    }


?>
    <!-- 
        tp4 ejercicio 7
    -->

    <div class="contenedorCentrado">
    <h4><?php echo $mensaje ?> </h4>
        <a href="../NuevaPersona.php"> Ir a NuevaPersona.php </a>
        </br>
        <a href="../NuevoAuto.php"> Ir a NuevoAuto.php </a>
        </br>
        <a href="../ListaPersonas.php">Ir a ListaPersonas.php </a>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>
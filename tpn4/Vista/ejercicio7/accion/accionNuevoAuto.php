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
    $patente[0]=["Patente" => $datos["Patente"]];
    $autoDuplicado=$objAuto->buscar($patente[0]);
    if($buscarDuenio!=null and $autoDuplicado==null){
        if($objAuto->alta($datos)){
        $resp =true;
        }
    }else{

        if($resp){
            $mensaje = "Se agrego el vehiculo correctamente.";
        }else {
            
            $mensaje = "No se pudo concretar la operacion.";
        }
        if($buscarDuenio==null){
            $mensaje .= "Dueño inexistente. <a href='../../ejercicio6/nuevaPersona.php'>Por Favor agreguelo a la BD</a>";
        }
        if($autoDuplicado!=null){
            $mensaje .= " El Vehiculo ya existe en la Base de Datos";
        }
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
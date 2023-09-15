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
        $mensaje = "Auto creado con éxito!";
        }
    }else{

        if(!$resp){
            $mensaje = "No se pudo concretar la operacion.<br>";
        }

        if($buscarDuenio==null){
            $mensaje .= "Dueño inexistente.<br> <a href='../../ejercicio6/nuevaPersona.php'>Por Favor agreguelo a la BD</a><br>";
        }

        if($autoDuplicado!=null){
            $mensaje .= " El Vehiculo ya existe en la Base de Datos<br>";
        }
    }

?>
    <!-- 
        tp4 ejercicio 7
    -->

    <div class="contenedorCentrado">
        <h4><?php echo $mensaje ?> <br></h4>
            <a href="../../ejercicio6/nuevaPersona.php"> Ir a NuevaPersona.php </a>
            </br>
            <a href="../../ejercicio5/listaPersonas.php">Ir a ListaPersonas.php </a>
            </br>
            <a href="../nuevoAuto.php"> Volver </a>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>
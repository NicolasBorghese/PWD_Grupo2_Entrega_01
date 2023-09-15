<?php 
    $tituloPagina = "Ejercicio 4 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer4";
    $rutaEstructura = "../../";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");
    
    $metodo = data_submitted();
    $param['Patente'] = $metodo['Patente'];

    $objAuto = new AbmAuto();
    $colInfo = $objAuto->buscarColInfo($param);

    $hayAutos = false;
    
    if (count($colInfo) > 0){
        $hayAutos = true;
    }
?>
    <!-- 
        tp4 ejercicio 4
    -->

    <div class="contenedorCentrado">
        <?php
            if($hayAutos){
                echo "<table>";
                echo "<tr class='titulosTabla'>";
                echo "<td>Patente</td><td>Marca</td><td>Modelo</td><td>DNI Dueño</td><td>Apellido y Nombre</td>";
                echo "</tr>";
                $patente = $colInfo[0]['patente'];
                $marca = $colInfo[0]['marca'];
                $modelo = $colInfo[0]['modelo'];
                $dni = $colInfo[0]['objPersona']['nroDni'];
                $apellido = $colInfo[0]['objPersona']['apellido'];
                $nombre = $colInfo[0]['objPersona']['nombre'];
                echo "<tr>";
                echo "<td>".$patente."</td><td>".$marca."</td><td>".$modelo."</td><td>".$dni."</td><td>".$apellido." ".$nombre."</td>";
                echo "<tr>";
                echo "</table>";
            } else {
                echo "No se encontro la patente ingresada en la base de datos";
            }
        ?>
        <div id="contieneLinkVolver">
            <a href="../buscarAuto.php" id="linkVolver"><br> Volver <a>
        </div>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>
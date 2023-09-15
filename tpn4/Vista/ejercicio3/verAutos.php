<?php 
    $tituloPagina = "Ejercicio 3 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer3";
    $rutaEstructura = "../";
    
    include_once('../estructura/encabezado.php');
    include_once("../../configuracion.php");

    $objAuto = new AbmAuto();

    $colInfo = $objAuto->buscarColInfo("");
    $hayAutos = false;
    
    if (count($colInfo) > 0){
        $hayAutos = true;
    }
?>

    <div class="contenedorCentrado">
        <?php
            if($hayAutos){
                echo "<table>";
                echo "<tr class='titulosTabla'>";
                echo "<td>Patente</td><td>Marca</td><td>Modelo</td><td>DNI Dueño</td><td>Apellido y Nombre</td>";
                echo "</tr>";
                for ($i = 0; $i < count($colInfo); $i++){
                    $patente = $colInfo[$i]['patente'];
                    $marca = $colInfo[$i]['marca'];
                    $modelo = $colInfo[$i]['modelo'];
                    $dni = $colInfo[$i]['objPersona']['nroDni'];
                    $apellido = $colInfo[$i]['objPersona']['apellido'];
                    $nombre = $colInfo[$i]['objPersona']['nombre'];
                    echo "<tr>";
                    echo "<td>".$patente."</td><td>".$marca."</td><td>".$modelo."</td><td>".$dni."</td><td>".$apellido." ".$nombre."</td>";
                    echo "<tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron autos cargados en la base de datos";
            }
        ?>
    </div>

<?php
    include_once('../estructura/pie.php');
?>
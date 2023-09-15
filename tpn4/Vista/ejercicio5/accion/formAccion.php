<?php 
    $tituloPagina = "Ejercicio 5 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer5";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");
    
    $datos= data_submitted();
    $objPers = new AbmPersona();
    $objAutos = new AbmAuto();
    $autos = $objAutos->buscarDniDuenio($datos);
    $listaPersonas = $objPers->buscar($datos);
?>
    <!-- 
        tp4 ejercicio 5
    -->

    <div class="contenedorCentrado">
    <p>LISTA DE AUTOS REGISTRADOS CON EL DNI: <?php echo $datos['NroDni'];?></p>
    <?php
    if(count($listaPersonas)==1){
        echo '<table class="table">
        <tr>
            <th style="text-align: center" colspan="6">'.$listaPersonas[0]->getNombre().' '.$listaPersonas[0]->getApellido().'</th>
        </tr>
        <tr>
              <th><strong>Patente</strong></th>
              <th><strong>Marca</strong></th>
              <th><strong>Modelo</strong></th>        
        </tr>
        </thead>
        <tbody>';
        if(count($autos)>0){
            foreach($autos as $objAuto){
                echo '<tr>';
                echo '<td>'.$objAuto->getPatente().'</td>';
                echo '<td>'.$objAuto->getMarca().'</td>';
                echo '<td>'.$objAuto->getModelo().'</td>';
                echo '</tr>'; 
            }
        }else{
            echo '<h4>No se encontro ningun auto registrado con el dni ingresado </h4>';
        }
    }else{
        echo '<h4>No se encontro ninguna persona con este dni. </h4>';
    }
    echo '</tbody>
    </table>';
    ?>
    <a href="../autosPersona.php"> Ir a AutosPersona.php </a>

    </div>

<?php
    include_once('../../estructura/pie.php');
?>
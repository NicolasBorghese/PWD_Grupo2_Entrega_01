<?php 
    $tituloPagina = "Ejercicio 5 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer5";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
    include_once('../../configuracion.php');
         $objAbmPers = new  AbmPersona();
        $listaPers = $objAbmPers->buscar(null);
?>
    <!-- 
        tp4 ejercicio 5
    -->

    <div class="contenedorCentrado" class="contenedorCentradoChico">
    <strong> Lista de persona</strong>
    <?php
    if(count($listaPers)>0){
        echo '<table class="table">
        <thead >
            <tr>  
              <th><strong>DNI</strong></th>
              <th><strong>Apellido</strong></th>
              <th><strong>Nombre</strong></th>
              <th><strong>Fecha Nacimiento</strong></th>
              <th><strong>Telefono</strong></th>
              <th><strong>Domicilio</strong></th>
              
            </tr>
        </thead>
        <tbody>';
        foreach($listaPers as $objPers){
            echo '<tr>';
            echo '<td>'.$objPers->getNroDni().'</td>';
            echo '<td>'.$objPers->getApellido().'</td>';
            echo '<td>'.$objPers->getNombre().'</td>';
            echo '<td>'.$objPers->getFechaNac().'</td>';
            echo '<td>'.$objPers->getTelefono().'</td>';
            echo '<td>'.$objPers->getDomicilio().'</td>';
            echo '</tr>'; 
        }
        echo'</tbody>
        </table>' ;      
    }else{
        echo '<h4>No se han cargado personas.</h4>';  
    }
    ?>
 <a href="autosPersona.php"> Ir a AutosPersona.php </a>
 <script src="../estructura/js/validarCamposVacios.js"></script>

 </div>

<?php
    include_once('../estructura/pie.php');
?>
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

    <div class="contenedorEnunciado">
        Lista de personas cargadas en la base de datos
    </div>

    <div class="contenedorCentrado excedeMargenLateral">
    <div class="contieneLink"><h6><a href="autosPersona.php">Listar autos registrados por dni</a></h6></div>
    <div class="textoCentrado contenedorSeparado"><h4><strong>Lista de personas</strong></h4></div>
    <hr class='hrDivisor'>
    <?php
    if(count($listaPers)>0){
        echo '<table>
        <thead >
            <tr>  
              <th><strong>DNI</strong></th>
              <th><strong>Apellido</strong></th>
              <th><strong>Nombre</strong></th>
              <th><strong>Fecha de Nacimiento</strong></th>
              <th><strong>Telefono</strong></th>
              <th><strong>Domicilio</strong></th>
            </tr>
        </thead>
        <tbody>';
        echo "<tr><td colspan='6'><hr class='hrDivisor'></td></tr>";
        foreach($listaPers as $objPers){
            echo '<tr>';
            echo '<td>'.$objPers->getNroDni().'</td>';
            echo '<td>'.$objPers->getApellido().'</td>';
            echo '<td>'.$objPers->getNombre().'</td>';
            echo '<td>'.$objPers->getFechaNac().'</td>';
            echo '<td>'.$objPers->getTelefono().'</td>';
            echo '<td>'.$objPers->getDomicilio().'</td>';
            echo '</tr>'; 
            echo "<tr><td colspan='6'><hr class='hrDivisor'></td></tr>";
        }
        echo'</tbody>
        </table>' ;   
    }else{
        echo '<h4>No se hay personas cargadas en la base de datos.</h4>';  
    }
?>
 <script src="../estructura/js/validarCamposVacios.js"></script>

 </div>

<?php
    include_once('../estructura/pie.php');
?>
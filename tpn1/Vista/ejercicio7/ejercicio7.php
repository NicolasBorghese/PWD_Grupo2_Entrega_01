<?php
$tituloPagina = "Ejercicio 7 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer7";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 7
            -->
 <div class="contenedorEnunciado">
    <p>Operaciones matematicas</p>
</div>
<div class="contenedorCentrado">
    <form id="form7" name="form7" method="post" action="procesaEjercicio7.php">

    <table>
            <tr>
                <td>Ingrese dos números</td>
            </tr>
           <p></p>
           <tr>
                 <td><input type="number" id="num1" name="num1" required></td>
           </tr>
           <tr>
                <td> <input type="number" id="num2" name="num2" required></td>
           </tr>
            <td>Seleccione operación matemática</td>
            <td>
                <select id="operacion" name="operacion">
                  <option value="suma">SUMA</option>
                  <option value="resta">RESTA</option>
                  <option value="multiplicacion">MULTIPLICACIÓN</option>
                  <option value="division">DIVISIÓN</option>
              </select>
            </td>
           <p></p>
           </table>
        <input type="submit" name="submit" value="Enviar" class="botonFormulario">
      
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>
<?php 
    $tituloPagina = "Ejercicio 5 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer5";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                tp1 ejercicio 5
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
            -->

            <div class="contenedorEnunciado">
                <p>Complete los datos para crear un saludo personalizado</p>
                <p>e indicar si es mayor de edad o no</p>
            </div>

            <div class="contenedorCentrado">
                <form name="form_ejercicio5" method="get" action="procesaEjercicio5.php">
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="nombreForm" id="nombreForm" required></td>
                        </tr>
                        <tr>
                            <td>Apellido:</td>
                            <td><input type="text" name="apellidoForm" id="apellidoForm" required></td>
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td><input type="number" name="edadForm" id="edadForm" required></td>
                        </tr>
                        <tr>
                            <td>Dirección:</td>
                            <td><input type="text" name="direccionForm" id="direccionForm" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Indique su nivel de estudios
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="estudios" id="estudios1"> No tiene estudios
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="estudios" id="estudios2"> Estudios primarios
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="estudios" id="estudios3"> Estudios secundarios
                            </td>
                        </tr>
                        <tr>
                        <td>Sexo:</td>
                            <td>
                                <select>
                                    <option selected>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="Submit" value="Enviar" class="botonFormulario">
                </form>
            </div>

<?php
    include_once('../estructura/pie.php');
?>
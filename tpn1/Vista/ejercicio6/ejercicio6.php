<?php 
    $tituloPagina = "Ejercicio 6 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer6";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                tp1 ejercicio 6
            -->

        <div class="contenedorCentrado">
            <form id="form1" name="form1" method="get" action="procesaEjercicio6.php" >
                Nombre: <input name="Nombre" type="text" min=10 id="Nombre" /> <br />
                Apellido: <input name="Apellido" type="text" id="Apellido" /> <br />
                Edad: <input name="Edad" type="text" id="Edad"/> <br />
                Direccion: <input name="Direccion" type="text" id="Direccion"/> <br />
                Estudio Primarios:<input type="radio" name="estudio" id="estudio" value="primario"><br />
                Estudios Secundarios:<input type="radio" name="estudio" id="estudio" value="secundario"><br />
                No tiene estudios:<input type="radio" name="estudio" id="estudio" value="incompleto"><br /><br />
                Sexo:<select id="sexo" name="sexo">
                <option value=""></option>
                <option value="masculino">masculino</option>
                <option value="femenino">femenino</option>
                <option value="otro">otro</option>
                </select><br /><br />
                ingrese los deportes que realiza: <br />
                voley<input type="checkbox" name="voley" id="voley"><br />
                basquet<input type="checkbox" name="basquet" id="basquet"><br />
                futbol<input type="checkbox" name="futbol" id="futbol"><br />
                tennis<input type="checkbox" name="tennis" id="tennis"><br />
                <br />
                <br />
                <input type="submit" name="Submit" value="Aceptar" />
            </form>

        </div>

<?php
    include_once('../estructura/pie.php');
?>
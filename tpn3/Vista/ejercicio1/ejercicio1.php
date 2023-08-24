<?php 
    $tituloPagina = "Ejercicio 1 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer1";
    
    include_once('../estructura/encabezado.php');
?>

            <div class="contenedorEnunciado">
                <p>Cargue un archivo para visualizarlo</p>
            </div>
            
            <div class="contenedorCentrado">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Cargar Archivo</td>
                            <td> <input id="miArchivo" name="miArchivo"  type="file" required /></td>
                        </tr>
                      
                    </table>
                    <input type="submit" value="Enviar Archivo" name="submit"  class="botonFormulario"/>
                </form>
            </div>
<?php
    include_once('../estructura/pie.php');
?>
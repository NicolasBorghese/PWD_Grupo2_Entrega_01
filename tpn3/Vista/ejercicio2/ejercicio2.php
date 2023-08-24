<?php 
    $tituloPagina = "Ejercicio 2 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer2";
    
    include_once('../estructura/encabezado.php');
?>
           <div class="contenedorEnunciado">
                <p>Cargue un archivo para visualizarlo en un tex area</p>
            </div>
            
            <div class="contenedorCentrado">
            <form method="post" action="upload.php" enctype="multipart/form-data" >
                    <table>
                        <tr>
                            <td>Cargar archivo tex</td>
                            <td> <input id="archivo" name="miArchivo"  type="file" required /></td>
                        </tr>
                      
                    </table>
                    <input type="submit" value="Enviar Archivo" name="abrir" id="abrir"  class="botonFormulario"/>
                </form>
            </div>

<?php
    include_once('../estructura/pie.php');
?>
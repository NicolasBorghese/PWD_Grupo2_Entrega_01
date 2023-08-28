<?php 
    $tituloPagina = "Ejercicio 4 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer4";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                tp2 ejercicio 1
            -->
<div class="contenedorCentrado">
<div class='content rounded-1 shadow'>
                <div class="header border-bottom-0 d-flex align-items-right">
                    <h1>La pelicula introducida es</h1>
                    <a href='ejercicio4.php'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></a>
                </div>
                <div class='body py-0'>
                    <span class='texto'>Titulo: </span><span class='descripcion'><?php echo $titulo = $_POST['titulo']; ?></span></br>
                    <span class='texto'>Actores: </span><span class='descripcion'><?php echo $actores = $_POST['actores']; ?></span></br>
                    <span class='texto'>Director: </span><span class='descripcion'><?php echo $director = $_POST['director']; ?></span></br>
                    <span class='texto'>Guion: </span><span class='descripcion'><?php echo $guion = $_POST['guion']; ?></span></br>
                    <span class='texto'>Produccion: </span><span class='descripcion'><?php echo $produccion = $_POST['produccion']; ?></span></br>
                    <span class='texto'>Año: </span><span class='descripcion'><?php echo $anio = $_POST["anio"]; ?></span></br>
                    <span class='texto'>Nacionalidad: </span><span class='descripcion'><?php echo $nacionalidad = $_POST['nacionalidad']; ?></span></br>
                    <span class='texto'>Genero: </span><span class='descripcion'><?php echo $genero = $_POST['genero']; ?></span></br>
                    <span class='texto'>Duracion: </span><span class='descripcion'><?php echo $duracion = $_POST['duracion']; ?></span></br>
                    <span class='texto'>Restricciones de Edad: </span><span class='descripcion'><?php echo $restriccion = $_POST['edad']; ?></span></br>
                    <span class='texto'>Sinopsis: </span><span class='descripcion'><?php echo $sinopsis = $_POST['sinopsis']; ?></span></br>
                </div>  
            </div>
        <div id="contieneLinkVolver">
            <a href="ejercicio4.php" id="linkVolver"><br> Volver <a>
        </div>
</div>
<?php
    include_once('../estructura/pie.php');
?>

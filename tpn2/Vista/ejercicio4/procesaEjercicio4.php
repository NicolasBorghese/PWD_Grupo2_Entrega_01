<?php 
    $tituloPagina = "Ejercicio 1 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer1";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                tp2 ejercicio 1
            -->
<div class="contenedorCentrado">
<div class='content rounded-1 shadow'>
                <div class='header border-bottom-0'>
                    <h1>La pelicula introducida es</h1>
                    <a href='ejercicio_4.php'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></a>
                </div>
                <div class='body py-0'>
                    <span class='texto'>Titulo: </span><span class='descripcion'><?php echo $titulo = $_post["titulo"]; ?></span></br>
                    <span class='texto'>Actores: </span><span class='descripcion'><?php echo $actores = $_post["actores"]; ?></span></br>
                    <span class='texto'>Director: </span><span class='descripcion'><?php echo $director = $_post["director"]; ?></span></br>
                    <span class='texto'>Guion: </span><span class='descripcion'><?php echo $guion = $_post["guion"]; ?></span></br>
                    <span class='texto'>Produccion: </span><span class='descripcion'><?php echo $produccion = $_post["produccion"]; ?></span></br>
                    <span class='texto'>Año: </span><span class='descripcion'><?php echo $anio = $_post["anio"]; ?></span></br>
                    <span class='texto'>Nacionalidad: </span><span class='descripcion'><?php echo $nacionalidad = $_post["nacionalidad"]; ?></span></br>
                    <span class='texto'>Genero: </span><span class='descripcion'><?php echo $genero = $_post["genero"]; ?></span></br>
                    <span class='texto'>Duracion: </span><span class='descripcion'><?php echo $duracion = $_post["duracion"]; ?></span></br>
                    <span class='texto'>Restricciones de Edad: </span><span class='descripcion'><?php echo $restriccion = $_post["edad"]; ?></span></br>
                    <span class='texto'>Sinopsis: </span><span class='descripcion'><?php echo $sinopsis = $_post["sinopsis"]; ?></span></br>
                </div>  
            </div>
</div>
<?php
    include_once('../estructura/pie.php');
?>

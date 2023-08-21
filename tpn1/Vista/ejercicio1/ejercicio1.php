<?php 
    $tituloPagina = "Ejercicio 1 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer1";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número 
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la 
                respuesta, que permita volver a la página anterior.
            -->

            <div class="contenedorCentrado">
                <form name="form_ejercicio1" method="post" action="vernumero.php">
                    Ingrese un número: <input name="numero" type="number" id="numero" required><br>
                    <input type="submit" name="Submit" value="Aceptar" class="botonFormulario">
                </form>
            </div>

<?php
    include_once('../estructura/pie.php');
?>
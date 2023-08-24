<html>
    <head>
        <title><?php echo $tituloPagina ?></title>

        <link rel="stylesheet" type="text/css" href="../estructura/css/estilo_tp1.css">

        <script src="../estructura/js/funciones_tp1.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    </head>
    <body onload="actualizarCurrent(<?php echo $tp ?>, <?php echo $ejercicio ?>)">

        <!-- ________________________________________________ CONTENEDOR CUERPO ________________________ -->
        <div id="contenedorCuerpo">

            <!-- ____________________________________________ CONTENEDOR PÁGINA ________________________ -->
            <div id="contenedorPagina">

                <!-- ________________________________________ CONTENEDOR GENERAL _______________________________ -->
                <div id="contenedorGeneral">

                    <!-- ____________________________________ BANNER ___________________________________________ -->
                    <div id="banner">
                        <p id="tituloMateria">Programación Web Dinámica</p>
                        <p id="tituloGrupo">GRUPO 2: Entrega 01</p>
                    </div>

                    <!-- ____________________________________ CABEZAL __________________________________________ -->
                    <div id="menuTrabajos">
                        <input type="button" name="botonTP1" id="botonTP1" value="TP1" class="botonTrabajos" onclick="irATP1Ejercicio1();"><!--
                        --><input type="button" name="botonTP2" id="botonTP2" value="TP2" class="botonTrabajos" onclick="irATP2Ejercicio1();"><!--
                        --><input type="button" name="botonTP3" id="botonTP3" value="TP3" class="botonTrabajos" onclick="irATP3Ejercicio1();">
                    </div>

                    <div id="menuEjercicios">
                        <input type="button" name="botonEjer1" id="botonEjer1" value="Ejercicio 1" class="botonEjercicios" onclick="irATP1Ejercicio1();"><!--
                        --><input type="button" name="botonEjer2" id="botonEjer2" value="Ejercicio 2" class="botonEjercicios" onclick="irATP1Ejercicio2();"><!--
                        --><input type="button" name="botonEjer3" id="botonEjer3" value="Ejercicio 3" class="botonEjercicios" onclick="irATP1Ejercicio3();"><!--
                        --><input type="button" name="botonEjer4" id="botonEjer4" value="Ejercicio 4" class="botonEjercicios" onclick="irATP1Ejercicio4();"><!--
                        --><input type="button" name="botonEjer5" id="botonEjer5" value="Ejercicio 5" class="botonEjercicios" onclick="irATP1Ejercicio5();"><!--
                        --><input type="button" name="botonEjer6" id="botonEjer6" value="Ejercicio 6" class="botonEjercicios" onclick="irATP1Ejercicio6();"><!--
                        --><input type="button" name="botonEjer7" id="botonEjer7" value="Ejercicio 7" class="botonEjercicios" onclick="irATP1Ejercicio7();"><!--
                        --><input type="button" name="botonEjer8" id="botonEjer8" value="Ejercicio 8" class="botonEjercicios" onclick="irATP1Ejercicio8();">
                    </div>
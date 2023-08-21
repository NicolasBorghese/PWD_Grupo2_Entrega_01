<html>
    <head>
        <title><?php echo $tituloPagina ?></title>

        <link rel="stylesheet" type="text/css" href="../estructura/css/estilo_tp2.css">

        <script src="../estructura/js/funciones_tp2.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    </head>
    <body onload="actualizarCurrent(<?php echo $tp ?>, <?php echo $ejercicio ?>)">

        <!-- ________________________________________ CONTENEDOR GENERAL _______________________________ -->
        <div id="contenedorGeneral">

            <!-- ____________________________________ BANNER ___________________________________________ -->
            <div id="banner">
                <p>Programación Web Dinámica</p>
                <h1>GRUPO 2: Entrega 01</h1>
            </div>

            <!-- ____________________________________ CABEZAL __________________________________________ -->
            <div id="menuTrabajos">
                <input type="button" name="botonTP1" id="botonTP1" value="TP1" class="botonTrabajos" onclick="irATP1Ejercicio1();"><!--
                --><input type="button" name="botonTP2" id="botonTP2" value="TP2" class="botonTrabajos" onclick="irATP2Ejercicio1();"><!--
                --><input type="button" name="botonTP3" id="botonTP3" value="TP3" class="botonTrabajos" onclick="irATP3Ejercicio1();">
            </div>

            <div id="menuEjercicios">
                <input type="button" name="botonEjer1" id="botonEjer1" value="Ejercicio 1" class="botonEjercicios" onclick="irATP2Ejercicio1();"><!--
                --><input type="button" name="botonEjer2" id="botonEjer2" value="Ejercicio 2" class="botonEjercicios" onclick="irATP2Ejercicio2();"><!--
                --><input type="button" name="botonEjer3" id="botonEjer3" value="Ejercicio 3" class="botonEjercicios" onclick="irATP2Ejercicio3();"><!--
                --><input type="button" name="botonEjer4" id="botonEjer4" value="Ejercicio 4" class="botonEjercicios" onclick="irATP2Ejercicio4();">
            </div>

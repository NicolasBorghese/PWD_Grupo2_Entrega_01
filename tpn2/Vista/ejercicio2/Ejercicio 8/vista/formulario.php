<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="jquery_spanish.js"></script>
    <script src="verificacion.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="../control/calculo.php" method="post" id="form">
        Bienvenido a Cinem@s <br>
        Edad: <input type="number" name="edad" id="edad"><br>
        Estudiante? <input type="radio" name="estudiante" id="estudiante" value="s">Si <input type="radio" name="estudiante" id="estudiante" value="n">No<br>
        <div class="errors error2"></div> <br>
        <input type="submit" id="boton" value="Enviar"> <input type="reset" value="Limpiar">

    </form>
</body>
</html>
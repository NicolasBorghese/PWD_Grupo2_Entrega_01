<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="jquery_spanish.js"></script>
    <script src="verificacion_jquery.js"></script>
    <title>Document</title>
</head>
<body>
<form action="../control/calculo.php" method="post" name="form" id="form">
        Ingrese las Horas de cursada: <br>
        Lunes: <input type="number" name="lunes" id="lunes"><br>
        Martes: <input type="number" name="martes" id="martes"><br>
        Miercoles: <input type="number" name="miercoles" id="miercoles"> <br>
        Jueves: <input type="number" name="jueves" id="jueves"> <br>
        Viernes: <input type="number" name="viernes" id="viernes"> <br>
        <input type="submit" id="boton" value="Calcular">
</form>
</body>
</html>

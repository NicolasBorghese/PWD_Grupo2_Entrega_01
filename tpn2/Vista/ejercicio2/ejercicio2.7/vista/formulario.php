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
    <form action="../control/calculos.php" method="post" id="form">
    <input type="text" name="valor1" id="valor1"><br>
    <input type="text" name="valor2" id="valor2"><br>
    <select name="operacion" id="operacion" >
        <option value="SUMA">SUMA</option>
        <option value="RESTA">RESTA</option>
        <option value="MULTIPLICACION">MULTIPLICACION</option>
    </select>
    <input type="submit" id="boton" value="Enviar">
    </form>
</body>
</html>
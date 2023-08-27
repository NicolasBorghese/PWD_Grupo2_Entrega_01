<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="jquery_spanish.js"></script>
    <script  src="verificacion_jquery.js"></script>
    
    <title>Document</title>
</head>
<body>
    <form name="formulario" id="formulario" action="../control/vernumero.php" method="post" >
        Ingrese un numero: <br>
        <input type="number" name="numero" id="numero"><br>
        <input type="submit" value="ver" id="boton">
    </form>
    <div id="mensaje"></div>
</body>
</html>

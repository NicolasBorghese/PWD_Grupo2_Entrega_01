<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista.css">
    <script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="jquery_spanish.js"></script>
    <script src="verificacion.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="../control/texto.php" method="get" id="form">
        <table  class="nom">
       <tr><td>Nombre:</td><td><input type="text" name="nombre" id="nombre"></td></tr>  
        <tr><td>Apellido:</td><td><input type="text" name="apellido" id="apellido"></td></tr>
        <tr><td>Edad:</td><td> <input type="number" name="edad" id="edad"></td></tr> 
        <tr><td>Direccion:</td><td><input type="text" name="direccion" id="direccion"></td></tr>
        </table>
        <input type="submit" value="Enviar" id="boton">
    </form>
</body>
</html>
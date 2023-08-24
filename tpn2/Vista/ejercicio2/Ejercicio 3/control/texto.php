<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/vista.css">
    <title>Document</title>
</head>
<body >
   <div id="texto">
    <?php
    if($_GET){
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $edad=$_GET["edad"];
        $direccion=$_GET["direccion"];

        echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion;
    }else{
        echo "No se ingresaron Datos";
    }
    ?>
    </div>

</body>
</html>
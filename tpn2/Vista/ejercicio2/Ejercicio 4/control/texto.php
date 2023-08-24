<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/vista.css">
    <script type="text/javascript" src="funciones.js"></script>
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
        if($edad >= 18){
            echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
            echo "Soy mayor de Edad";
        }else{
            echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
            echo " Soy menor de Edad";
        }

        //consultar como hacer que el java ande con dos archivos?
    }else{
        echo "No se ingresaron Datos";
    }
    ?>
    
    </div>
   
</body>
</html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Programa que verifica si un numero es positivo, negativo o cero

if($_POST){
    $numero=$_POST["numero"];
    if($numero<0){
        echo "El numero es Negativo";
    }elseif($numero==0){
        echo "El numero es igual a cero";
    }elseif($numero>0){
        echo "El numero es Positivo";
    }
}else{
    echo "No se ingreso numeros";
}

?>

<a href="../vista/formularioUno.php">Volver</a>
</body>
</html>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Programa que verifica si un numero es positivo, negativo o cero
class PositividadNumero{
  public function clasificarNumero($numero){
if($_POST){
    $numero=$_POST['numero'];
    if($numero<0){
        $respuesta = "El numero ".$numero." es Negativo";
    }elseif($numero==0){
        $respuesta= "El numero ".$numero." es igual a cero";
    }elseif($numero>0){
        $respuesta= "El numero ".$numero." es Positivo";
    }
}else{
    $respuesta= "No se ingreso numeros";
}
    return $respuesta;
}
}
?>

<a href="../vista/formularioUno.php">Volver</a>
</body>
</html>


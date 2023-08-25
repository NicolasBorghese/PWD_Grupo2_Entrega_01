<?php
include_once '../control/Calculadora.php';

if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $obj = new Calculadora();
    $resultado = $obj->calcular($num1, $num2, $operacion);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php
    echo "<h4>El resultado es: " . $resultado . "</h4>";
    ?>
    <a href="../vista/vista.php">Volver</a>
</body>

</html>
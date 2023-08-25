<?php
include_once '../control/Tarifa.php';

if ($_POST) {
    $edad = $_POST['edad'];
    $condicion = $_POST['condicion'];

    $obj = new Tarifa();
    $monto = $obj->calcularMonto($edad, $condicion);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php
    echo "<h5>Total a pagar:</h5>" . "$" . $monto;
    ?>

    </br>
    <a href="../vista/vista.php">Volver</a>
</body>

</html>
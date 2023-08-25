<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <form id="form7" name="form7" method="post" action="procesaejercicio7.php">
        <h2>Ingrese dos números</h2>

        <input type="number" id="num1" name="num1" required>
        <p></p>
        <input type="number" id="num2" name="num2" required>


        <h2>Seleccione operación matemática</h2>
        <select id="operacion" name="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACIÓN</option>
            <option value="division">DIVISIÓN</option>
        </select>

        <p></p>
        <input type="submit" name="submit" value="Enviar">

    </form>
</body>

</html>
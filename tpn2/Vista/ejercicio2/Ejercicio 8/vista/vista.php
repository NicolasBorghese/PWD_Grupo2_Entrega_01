<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Ejercicio 8</title>
</head>

<body>
    <form id="form8" name="form8" method="post" action="procesaejercicio8.php">
        <h2>Para calcular la tarifa, ingrese los siguientes datos</h2>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">

        <p></p>

        <div class="condicion">

            <label for="condicion">Estudia<input type="radio" name="condicion" value="si"></label>
            </br>
            <label for="condicion">No estudia<input type="radio" name="condicion" value="no"></label>
            </br>
            <label id="condicion-error" class="error" for="condicion"></label>

        </div>

        <p></p>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
</body>

</html>
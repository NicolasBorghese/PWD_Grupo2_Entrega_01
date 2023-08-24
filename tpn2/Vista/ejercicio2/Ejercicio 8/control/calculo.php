<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST){
        $edad=$_POST["edad"];
        $estudiante=$_POST["estudiante"];
        $costo=0;
        if($edad<12){
            $costo=160;
        }elseif($edad>=12 && $estudiante=="s"){
            $costo=180;
        }
        else{
            $costo=300;
        }

        echo "Monto a pagar: ".$costo;

    }
    ?>
    <a href="../vista/formulario.php">Volver a Calular</a>
</body>
</html>
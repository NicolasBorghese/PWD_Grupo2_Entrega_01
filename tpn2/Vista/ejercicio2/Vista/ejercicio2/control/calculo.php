<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST){
        $lunes=$_POST["lunes"];
        $martes=$_POST["martes"];
        $miercoles=$_POST["miercoles"];
        $jueves=$_POST["jueves"];
        $viernes=$_POST["viernes"];
        $horas=[$lunes,$martes,$miercoles,$jueves,$viernes];

        $suma=0;

        for($i=0;$i<count($horas);$i++){
            $suma=$suma+$horas[$i];
        }

        echo "La cantidad de horas cursadas son: ".$suma." Horas";

    }else{
        echo "NO se ingresaron horas";
    }
    ?>
    <br>
    <a href="../vista/formulario.php">Volver</a>
</body>
</html>
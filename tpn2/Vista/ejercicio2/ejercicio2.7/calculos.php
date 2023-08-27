<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST){

        $valor1=$_POST["valor1"];
        $valor2=$_POST["valor2"];
        $operacion=$_POST["operacion"];
        
        //suma
        if($operacion == "SUMA"){
            $suma=$valor1+$valor2;
            echo "Resultado: ".$suma;
        }
        if($operacion == "RESTA"){
            $resta=$valor1-$valor2;
            echo "Resultado: ".$resta;
        }
        if($operacion == "MULTIPLICACION"){
            $multi=$valor1*$valor2;
            echo "Resultado: ".$multi;
        }

    }else{
        echo "No se ingresaron Datos";
    }
    ?>
</body>
</html>
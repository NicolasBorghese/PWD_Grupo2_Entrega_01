<html>
    <head>
        <title>ver numero</title>
    </head>
    <body>
        <h1>Procesa</h1>
        <?php
            if ($_POST){

                $numero = $_POST['numero'] ;

                if ($numero == ""){
                    echo "No se ingreso ningún número<br>";
                } else if($numero > 0){
                    echo "El número ingresado es positivo<br>";
                } else if ($numero < 0){
                    echo "El número ingresado es negativo<br>";
                } else {
                    echo "El número ingresado es cero<br>";
                }
                echo "El valor del número ingresado es: ".$numero."<br>";

            }else{
                echo "No se recibieron datos<br>";
            }
        ?>
        <a href="../vista/ejercicio1.php"> Volver <a>
    </body>
</html>
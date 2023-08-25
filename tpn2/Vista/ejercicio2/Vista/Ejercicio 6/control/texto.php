<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/vista.css">
    <script type="text/javascript" src="funciones.js"></script>
    <title>Document</title>
</head>
<body >
   <div id="texto">
    <?php
    if($_GET){
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $edad=$_GET["edad"];
        $direccion=$_GET["direccion"];
        $sexo=$_GET["sexo"];
        $estudios=$_GET["estudios"];
        $cant=0;
        //consultar como sacar el error. Usar el issue?
        if($_GET["futbol"]!=null){
            $cant++;
        }
        if($_GET["basket"]!=null){
            $cant++;
        }
        if($_GET["tennis"]!=null){
            $cant++;
        }
        if($_GET["voley"]!=null){
            $cant++;
        }
        if($edad >= 18){
            if($sexo== "f"){
                if($estudios=="sinestudio"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy mayor de Edad, Sexo Femenino con sin estudios y practica ".$cant." de deportes";
                }elseif($estudios== "primaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy mayor de Edad, Sexo Femenino con estudios Primarios y practica ".$cant." de deportes";
                }elseif($estudios== "secundaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy mayor de Edad, Sexo Femenino con estudios Secundarios y practica ".$cant." de deportes";
                }
            }elseif($sexo=="m"){
                if($estudios=="sinestudio"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy mayor de Edad, Sexo Masculino con sin estudios y practica ".$cant." de deportes";
                }elseif($estudios== "primaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy mayor de Edad, Sexo Masculino con estudios Primarios y practica ".$cant." de deportes";
                }elseif($estudios== "secundaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy mayor de Edad, Masculino con estudios Secundarios y practica ".$cant." de deportes";
                }
            }
            
            
        }else{

            if($sexo== "f"){
                if($estudios=="sinestudio"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy menor de Edad, Sexo Femenino con sin estudios y practica ".$cant." de deportes";
                }elseif($estudios== "primaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy menor de Edad, Sexo Femenino con estudios Primarios y practica ".$cant." de deportes";
                }elseif($estudios== "secundaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy menor de Edad, Sexo Femenino con estudios Secundarios y practica ".$cant." de deportes";
                }
            }elseif($sexo=="m"){
                if($estudios=="sinestudio"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy menor de Edad, Sexo Masculino con sin estudios y practica ".$cant." de deportes";
                }elseif($estudios== "primaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy menor de Edad, Sexo Masculino con estudios Primarios y practica ".$cant." de deportes";
                }elseif($estudios== "secundaria"){
                    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".\n";
                    echo "Soy menor de Edad, Masculino con estudios Secundarios y practica ".$cant." de deportes";
                }
            }

        }

        //consultar como hacer que el java ande con dos archivos?
    }else{
        echo "No se ingresaron Datos";
    }
    ?>
    
    </div>
   
</body>
</html>
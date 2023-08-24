<?php 
    $tituloPagina = "Ejercicio 1 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer1";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                tp2 ejercicio 1
            -->

            <div class="contenedorCentrado">
                <?php
                 if($_POST){
                    $usuario=$_POST["usuario"];
                    $pass=$_POST["pass"];
                    $datos=[];
                    $datos["usuario"]=["Alter","Flor"];
                    $datos["clave"]=["Alter1412","Flor1234"];
                    $i=0;
                    $j=0;
                    $cuenta=false;
                    $contra=false;
            
                    while(($i<count($datos["usuario"]) && !$cuenta)){
                        if($usuario==$datos["usuario"][$i]){
                            $cuenta=true;
                        }
                        $i++;
                    }
            
                    while(($j<count($datos["clave"]) && !$contra)){
                        if($pass==$datos["clave"][$j]){
                            $contra=true;
                        }
                        $j++;
                    }
            
                    if($cuenta && $contra){
                        echo "Bienvenido!";
                    }else{
                        echo "Contraseña uh usuario no validos";
                    }
                }else{
                    echo "Error";
                }
                ?>
            </div>

<?php
    include_once('../estructura/pie.php');
?>
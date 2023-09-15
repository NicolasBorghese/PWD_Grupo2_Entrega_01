<?php 
function data_submited(){
    $tipoMetodo = [];
    /* empty devuelve true si la variable es vacia y false si tiene datos */
    if(!empty($_POST)){
        $tipoMetodo = $_POST;
    }elseif(!empty($_GET)){
        $tipoMetodo = $_GET;
    }
    return $tipoMetodo;
}

function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

// autoload para version 8.0
spl_autoload_register(function($class_name) {
    $directorys = array(
        $_SESSION['ROOT'].'Modelo/',
        $_SESSION['ROOT'].'Modelo/Conector/',
        $_SESSION['ROOT'].'Control/',
      //  $GLOBALS['ROOT'].'util/class/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
    });

?>
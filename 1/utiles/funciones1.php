<?php 
function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}
function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

function darDatosSubmitted(){
    $datos = [];
    //tiene el propósito de recoger datos enviados a través de los métodos HTTP GET y POST, dándole prioridad a los datos que vienen a través de POST si hay claves duplicadas en ambos métodos...
    foreach($_GET as $key => $value){
        $datos[$key] = $value;
    }
    foreach($_POST as $key => $value){
        $datos[$key] = $value;
    }
    return $datos;
}
// autoload para version 8.0
spl_autoload_register(function($class_name) {
    $tps = array(
        $GLOBALS['ROOT'].'1/',
    );
    $directorys = array(
        'Modelo/',
        'Modelo/conector/',
        'Control/',
        'util/',
        'Test/',
    );
    //print_object($directorys) ;
    foreach($tps as $tp){
        foreach($directorys as $directory){
            if(file_exists($tp.$directory.$class_name . '.php')){
                //  echo "se incluyo".$directory.$class_name . '.php';
                require_once($tp.$directory.$class_name . '.php');
                return;
            }
        }
    }
    
}
);







?>
<?php header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$directorio = '/PWD/'; // Escribir el directorio donde se encuentra el proyecto dentro del servidor
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].$directorio);
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].$directorio);
define('STRUCTURE_PATH', ROOT_PATH.'Vista/Estructura/');
$_SESSION['ROOT'] = ROOT_PATH;
$ROOT = ROOT_PATH; 

include_once($ROOT . 'Vista/utiles/funciones.php');

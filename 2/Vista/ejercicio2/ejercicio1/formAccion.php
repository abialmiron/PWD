<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new PositividadNumero();
$respuesta = $obj->clasificarNumero($datos);

echo $respuesta;
?>
<br /><a href="form.php">Volver <a>
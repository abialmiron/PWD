<?php
include_once '../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new CuentaHoras();
$resultado = $obj->sumarHoras($datos);

echo $resultado;
?>
<br /><a href="form.php">Volver <a>
<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

echo "<pre>";
print_r($datos);
echo "</pre>";

//Creo instancia del objeto y proceso los datos
$obj = new DatosPersona3();
$cadenaDatos = $obj->datosPersonales($datos);

echo $cadenaDatos;
?>
<br /><a href="form.php">Volver <a>
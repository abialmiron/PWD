<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new MostrarDatos();
$cartelera = $obj->generarCartelera($datos);

echo $cartelera;
?>
<br /><a href="form.php">Volver <a>
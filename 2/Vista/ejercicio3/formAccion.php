<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new InicioSesion();
$resultado = $obj->verificarDatos($datos);

echo $resultado;
?>
<br /><a href="form.php">Volver <a>
<?php
include('../../../configuracion.php');
include('../../Templates/head.php');

//Extraigo los datos obtenidos del formulario
$datos = data_submitted();
$dni['nroDni'] = $datos['dniDuenio'];

//Creo instancia del objeto AbmPersona y accedo al método correspondiente
$objPersona = new AbmPersona();
$colPersonas = $objPersona->buscarColInfo($dni);

//Creo instancia del objeto AbmAuto y accedo al método correspondiente
$objAuto = new AbmAuto();

//Verifico si existe alguien con el mismo dni
$pudo = false;
$mensaje = "No se ha encontrado a la persona con dni " . $dni['nroDni'] . ".";

if (count($colPersonas) > 0) {
    if ($objAuto->alta($datos)) {
        $pudo = true;
        $mensaje = "Se ha completado el registro con éxito.";
    }
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 mx-auto">
            <div class="card-header">
                <h3>Resultado</h3>
            </div>
            <div class="card-body">
                <?php if ($pudo): ?>
                    <p><?php echo $mensaje; ?></p>
                <?php else: ?>
                    <p><?php echo $mensaje; ?></p>
                    <a href="../../ejercicio6/nuevaPersona.php" class="btn btn-secondary">Añadir persona</a>
                <?php endif ?>
                <a href="../nuevoAuto.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include('../../Templates/footer.php'); ?>









<?php
include('../../../configuracion.php');

//Extraigo los datos obtenidos del formulario
$datos = data_submitted();
$dni['nroDni'] = $datos['dniDuenio'];

//Creo instancia del objeto AbmPersona y accedo al método correspondiente
$objPersona = new AbmPersona();
$colPersonas = $objPersona->buscarColInfo($dni);

//Creo instancia del objeto AbmAuto y accedo al método correspondiente
$objAuto = new AbmAuto();

//Verifico si existe alguien con el mismo dni
$pudo = false;
if (count($colPersonas) > 0) {
    if ($objAuto->alta($datos)) {
        $pudo = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

</body>

</html>
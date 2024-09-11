<?php
include('../../../configuracion.php');
include('../../Templates/head.php');

//Extraigo los datos obtenidos del formulario
$datos = data_submitted();
$dni['nroDni'] = $datos['nroDni'];

//Creo instancia del objeto AbmPersona y accedo al método correspondiente
$objPersona = new AbmPersona();

//Listo todas las personas
$colPersonas = $objPersona->buscarColInfo($dni);

//Verifico si existe alguien con el mismo dni
$existePersona = false;
if (count($colPersonas) > 0) {
    $existePersona = true;
    $mensaje = "Ya existe una persona con este dni.";
} else {
    if ($objPersona->alta($datos)) {
        $mensaje = "Se ha completado el registro con éxito.";
    } else {
        $mensaje = "Ha ocurrido un error durante la inserción.";
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
                <p><?php echo $mensaje; ?></p>
                <a href="../nuevaPersona.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include('../../Templates/footer.php'); ?>
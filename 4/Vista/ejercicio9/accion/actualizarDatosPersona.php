<?php
include('../../../configuracion.php');
include('../../Templates/head.php');

// Carga el controlador
$abmPersona = new ABMPersona();
$datos = data_submitted();
if (
    $datos['apellido'] == $datos['original_apellido'] &&
    $datos['nombre'] == $datos['original_nombre'] &&
    $datos['fechaNac'] == $datos['original_fechaNac'] &&
    $datos['telefono'] == $datos['original_telefono'] &&
    $datos['domicilio'] == $datos['original_domicilio']
) {
    $mensaje = "Los datos ingresados son los mismos que ya están en la base de datos.";
} else {
// Intenta modificar los datos en la base de datos
    if ($abmPersona->modificacion($datos)) {
        $mensaje = "Los datos fueron actualizados correctamente.";
    } else {
        $mensaje = "Error al actualizar los datos.";
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
                <div class="mb-1">
                    <?php echo $mensaje; ?>
                </div>
                <div class="mb-1">
                    <a href="../buscarPersona.php" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('../../Templates/footer.php');
?>
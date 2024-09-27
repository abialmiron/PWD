<?php
include('../../../configuracion.php');
include('../../Templates/head.php');
$objAuto = new ABMAuto();
$datos = data_submitted();
$resp = $objAuto->cambiaDuenio($datos);
switch ($resp) {
    case 0:
        $mensaje = "Se realizó la modificación con éxito";
        break;
    case 1:
        $mensaje = "No se ha encontrado la patente";
        break;
    case 2:
        $mensaje = "Este vehículo ya pertenece a la persona";
        break;
    case 3:
        $mensaje = "No se ha encontrado el DNI";
        break;
}
?>

<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $mensaje; ?></h5>
                        <div class="text-center p-2">
                            <a class="btn btn-secondary" href="../CambiarDuenio.php">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../../Templates/footer.php');
?>
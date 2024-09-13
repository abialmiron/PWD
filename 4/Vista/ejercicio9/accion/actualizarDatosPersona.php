<?php
include('../../../configuracion.php');
include('../../Templates/head.php');


// Carga el controlador
$abmPersona = new ABMPersona();
$datos = data_submitted();

// Intenta modificar los datos en la base de datos
if ($abmPersona->modificacion($datos)) {
        $mensaje = "Los datos fueron actualizados correctamente.";
    } else {
        $mensaje = "Error al actualizar los datos.";
    }

?>

<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $mensaje;?></h5>
                        <div class="text-center p-2">
                            <a class="btn btn-secondary" href="../buscarPersona.php">Volver</a>
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
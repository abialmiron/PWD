<?php
include('../../configuracion.php');
include('../Templates/head.php');

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new MostrarDatos();
$cartelera = $obj->generarCartelera($datos);
?>
<main class="index">
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body d-flex">
                        <?php echo $cartelera; ?>
                    </div>
                    <div class="text-center mb-3">
                        <br /><a class="btn btn-primary" href="form.php">Volver <a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('../Templates/footer.php');
?>
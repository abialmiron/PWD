<?php
include('Templates/head.php');
include("Accion/ejercicio1Accion.php");
?>
<main class="row justify-content-center align-items-center m-auto p-4">
    <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="text-center">Ejercicio 1</h3>
            </div>
            <div class="card-body">
                <p> <?php echo $mensaje ?></p>
                <a href="ejercicio1.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php
include('Templates/footer.php');
?>
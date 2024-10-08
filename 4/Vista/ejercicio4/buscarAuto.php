<?php
include('../../configuracion.php');
include('../Estructura/head.php');

//Creo instancia del objeto AbmAuto y accedo al método correspondiente
$objAuto = new AbmAuto();

//Listo todos los autos antes de comenzar la búsqueda
$colAutos = $objAuto->buscarColInfo("");

//Verifico que hayan autos en la base de datos
$hayAutos = false;
if (count($colAutos) > 0) {
    $hayAutos = true;
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 mx-auto">
            <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>
            <div class="card-header">
                <h3>Buscar auto por patente</h3>
            </div>
            <div class="card-body">
                <?php if ($hayAutos): ?>
                    <form id="form" name="form" method="post" action="./accion/accionBuscarAuto.php">
                        <div class="mb-1">
                            <label for="patente" class="form-label fw-semibold">Ingrese número de patente</label>
                            <input type="text" id="patente" name="patente" class="form-control" placeholder="AAA 111">
                            <div class="mensaje-error"></div>
                        </div>
                        <div class="mt-2">
                            <input class="btn btn-primary" type="submit" id="submit" value="Enviar">
                        </div>
                    </form>
                <?php else: ?>
                    <p><?php echo "No hay autos cargados en la base de datos."; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php include('../Estructura/footer.php'); ?>
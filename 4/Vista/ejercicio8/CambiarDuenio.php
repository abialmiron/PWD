<?php
    include('../../configuracion.php');
    include('../Templates/head.php');
?>
<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Cambio de dueño</h5>
                        <form name="form" id="form" method="get" action="Accion/CambiarDuenioAccion.php">
                            <div class="form-group">
                                <div class="mb-1">
                                    <label class="fw-semibold" for="patente" class="form-label">Patente</label>
                                    <input class="form-control" type="text" name="patente" id="patente" required>
                                    <div class="mensaje-error"></div>
                                </div>
                                <div class="mb-1">
                                    <label class="fw-semibold" for="nuevoduenio" class="form-label">Nuevo dueño</label>
                                    <input class="form-control" type="text" name="dniduenio" id="nuevoduenio" required>
                                    <div class="mensaje-error"></div>
                                </div>
                            </div>
                            <div class="text-center p-2">
                                <input type="submit" id="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    include('../Templates/footer.php');
?>
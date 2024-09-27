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
                        <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>
                        <h5 class="card-title">Buscar Persona</h5>
                        <form name="form" id="form" method="get" action="Accion/accionBuscarPersona.php">
                            <div class="form-group">
                                <div class="mb-1">
                                    <label for="nroDni" class="form-label fw-semibold">Número DNI</label>
                                    <input type="text" id="nroDni" name="nroDni" class="form-control" required>
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
<?php
include('../../../configuracion.php');
include('../../Templates/head.php');
?>
<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Para calcular la tarifa ingrese los siguientes datos</h5>
                        <form name="form" method="post" action="formAccion.php">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="fw-semibold" for="edad">Edad</label>
                                    <input class="form-control" type="number" id="edad" name="edad" required>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <label for="estudia">Estudia</label>
                                        <input class="form-check-input" type="radio" name="estudia" value="si" required>
                                    </div>
                                    <div class="form-check">
                                        <label for="estudia">No estudia</label>
                                        <input class="form-check-input" type="radio" name="estudia" value="no" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center p-2">
                                <input type="submit" id="submit" class="btn btn-primary" value="Enviar">
                                <a class="btn btn-secondary" href="../../ejercicio2/">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion8.js"></script>
<?php
include('../../Templates/footer.php');
?>
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
                        <h5 class="card-title text-center">Ingrese las horas de cursada por día de la materia Programación Web Dinámica</h5>
                        <form name="form" method="get" action="formAccion.php">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="fw-semibold" for="lunes" class="form-label">Lunes</label>
                                    <input class="form-control" type="number" step="any" name="horasCursada[]" id="hsLunes" min=0 required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="martes" class="form-label">Martes</label>
                                    <input class="form-control" type="number" step="any" name="horasCursada[]" id="hsMartes" min=0 required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="miercoles" class="form-label">Miércoles</label>
                                    <input class="form-control" type="number" step="any" name="horasCursada[]" id="hsMiercoles" min=0 required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="jueves" class="form-label">Jueves</label>
                                    <input class="form-control" type="number" step="any" name="horasCursada[]" id="hsJueves" min=0 required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="viernes" class="form-label">Viernes</label>
                                    <input class="form-control" type="number" step="any" name="horasCursada[]" id="hsViernes" min=0 required>
                                </div>
                            </div>
                    </div>
                    <div class="text-center p-2">
                        <input type="submit" id="submit" class="btn btn-primary" value="Enviar">
                        <a class="btn btn-secondary" href="../../">Volver <a>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</main>
<?php
include('../Templates/footer.php');
?>
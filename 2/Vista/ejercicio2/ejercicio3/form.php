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
                        <h5 class="card-title text-center">Ingrese sus datos personales</h5>
                        <form class="needs-validation" id="form" name="form" method="get" action="formAccion.php">
                            <div class="form-group">
                                <div class="mb-1">
                                    <label class="fw-semibold" for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                                    <div class="mensaje-error"></div>
                                </div>
                                <div class="mb-1">
                                    <label class="fw-semibold" for="nombre">Apellido</label>
                                    <input class="form-control" type="text" name="apellido" id="apellido" required>
                                    <div class="mensaje-error"></div>
                                </div>
                                <div class="mb-1">
                                    <label class="fw-semibold" for="nombre">Edad</label>
                                    <input class="form-control" type="number" name="edad" id="edad" min="0" required>
                                    <div class="mensaje-error"></div>
                                </div>
                                <div class="mb-1">
                                    <label class="fw-semibold" for="nombre">Dirección</label>
                                    <input class="form-control" type="text" name="direccion" id="direccion" required>
                                    <div class="mensaje-error"></div>
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

<?php
include('../../Templates/footer.php');
?>
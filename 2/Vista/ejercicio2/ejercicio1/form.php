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
                        <h5 class="card-title text-center">Ingresar un número</h5>
                        <form class="needs-validation" name="form" id="form" method="post" action="formAccion.php">
                            <div class="form-group mb-1">
                                <input type="number" name="numero" id="numero" class="form-control" step="any" required>
                                <div class="mensaje-error"></div>
                            </div>
                            <div class="text-center p-2">
                                <input type="submit" id="submit" class="btn btn-primary" value="Enviar">
                                <a class="btn btn-secondary" href="../index.php">Volver</a>
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
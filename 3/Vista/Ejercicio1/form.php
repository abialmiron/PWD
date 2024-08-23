<?php
include('../../configuracion.php');
include('../Templates/head.php');
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>
            <div class="card-header">
                <h3>Subir archivo (solo .doc/.pdf)</h3>
            </div>
            <div class="card-body">
                <form action="./formAccion.php" method="post" enctype="multipart/form-data" class="input-group" onsubmit="return validarArchivo()">
                    <input type="file" class="form-control" id="archivo" name="archivo">
                    <div class="invalid-feedback">
                        Por favor, debe ingresar un archivo JPG.
                    </div>
                    <button class="btn btn-primary" type="submit">Subir Archivo</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('../Templates/footer.php'); ?>
<?php
include('../../configuracion.php');
include('../Templates/head.php');
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card-header">
                <h3>Subir archivo (solo .text)</h3>
            </div>
            <div class="card-body">
                <form action="./formAccion.php" method="post" enctype="multipart/form-data" class="input-group validate" onsubmit="return validarArchivo()">
                    <input type="file" class="form-control" id="archivo" name="archivo">
                    <div class="invalid-feedback">
                        Por favor, debe ingresar un archivo.
                    </div>
                    <button class="btn btn-primary" type="submit">Subir Archivo</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>
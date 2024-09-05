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
                <form action="formAccion.php" id="form" method="post" enctype="multipart/form-data">
                    <div class="mb-1">
                        <input id="archivo" name="archivo" class="form-control" type="file" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mt-2">
                        <input class="btn btn-primary" type="submit" id="submit" value="Subir archivo">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('../Templates/footer.php'); ?>
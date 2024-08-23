<?php
include('../../configuracion.php');
include('../Templates/head.php');

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Extraigo los datos individualmente
$titulo = $datos['titulo'];
$actores = $datos['actores'];
$director = $datos['director'];
$guion = $datos['guion'];
$produccion = $datos['produccion'];
$anio = $datos["anio"];
$nacionalidad = $datos['nacionalidad'];
$genero = $datos['genero'];
$duracion = $datos['duracion'];
$restriccion = $datos['restriccion'];
$sinopsis = $datos['sinopsis'];
?>
<main class="index">
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body d-flex">
                        <link rel='stylesheet' href='../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css'>
                        <div class='container mt-4'>
                            <div class='card p-4' style='background-color: #D8F1CF'>
                                <div class='fs-2 text-primary'>
                                    La película introducida es
                                </div>
                                </br>
                                <div class='text-success'>
                                    <span class='fw-bold'>Título:</span> <?php echo $titulo ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Actores:</span> <?php echo $actores ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Director:</span> <?php echo $director ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Guión:</span><?php echo $guion ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Producción:</span><?php echo $produccion ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Año:</span> <?php echo $anio ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Nacionalidad:</span> <?php echo $nacionalidad ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Género:</span> <?php echo $genero ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Duración:</span> <?php echo $duracion ?>
                                </div>
                                <div class='text-success'>
                                    <span class='fw-bold'>Restricciones de edad:</span> <?php echo $restriccion ?>
                                </div>
                                <div class='text-success'><span class='fw-bold'>Sinópsis:</span> <?php echo $sinopsis ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <br /><a class="btn btn-primary" href="form.php">Volver <a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('../Templates/footer.php');
?>
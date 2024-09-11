<?php
include('../../configuracion.php');
include('../Templates/head.php');

//Creo instancia del objeto AbmAuto y accedo al método correspondiente
$objAuto = new AbmAuto();
$colAutos = $objAuto->buscarColInfo("");

//Verifico que hayan autos en la base de datos
$hayAutos = false;
if (count($colAutos) > 0) {
    $hayAutos = true;
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center">
        <div class="card shadow col-sm-8 m-5 mx-auto">
            <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>
            <div class="card-header">
                <h3>Listado de autos cargados en la base de datos</h3>
            </div>
            <div class="card-body">
                <?php if ($hayAutos): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Patente</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">DNI dueño</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Nombre</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($colAutos as $auto):
                            $patente = $auto['patente'];
                            $marca = $auto['marca'];
                            $modelo = $auto['modelo'];
                            $dniDuenio = $auto['objPersona']['nroDni'];
                            $apellido = $auto['objPersona']['apellido'];
                            $nombre = $auto['objPersona']['nombre'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $patente ?></td>
                                    <td><?php echo $marca ?></td>
                                    <td><?php echo $modelo ?></td>
                                    <td><?php echo $dniDuenio ?></td>
                                    <td><?php echo $apellido ?></td>
                                    <td><?php echo $nombre ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                <?php else: ?>
                    <p><?php echo "No hay autos cargados en la base de datos."; ?></p>
                <?php endif; ?>
            </div>
            <div class="card-header">
                <h3>Completar datos de auto nuevo</h3>
            </div>
            <div class="card-body">
                <form id="form" name="form" method="post" action="./accion/accionNuevoAuto.php">
                    <div class="mb-1">
                        <label for="patente" class="form-label fw-semibold">Patente</label>
                        <input type="text" id="patente" name="patente" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="marca" class="form-label fw-semibold">Marca</label>
                        <input type="text" id="marca" name="marca" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="modelo" class="form-label fw-semibold">Modelo</label>
                        <input type="number" id="modelo" name="modelo" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="dniDuenio" class="form-label fw-semibold">DNI dueño</label>
                        <input type="number" id="dniDuenio" name="dniDuenio" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mt-2">
                        <input class="btn btn-primary" type="submit" id="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('../Templates/footer.php'); ?>
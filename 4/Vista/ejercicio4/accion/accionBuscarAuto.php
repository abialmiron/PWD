<?php
include('../../../configuracion.php');
include('../../Estructura/head.php');

//Extraigo datos del formulario
$datos = data_submitted();
$patente['patente'] = $datos['patente'];

//Creo instancia del objeto AbmAuto y accedo al método correspondiente
$objAuto = new AbmAuto();
$colAutos = $objAuto->buscarColInfo($patente);

//Verifico que ese auto exista
$hayAutos = false;
if (count($colAutos) > 0) {
    $hayAutos = true;
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 mx-auto">
            <div class="card-header">
                <h3>Resultado</h3>
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
                    <p><?php echo "No se han encontrado resultados." ?></p>
                <?php endif; ?>
                <a href="../buscarAuto.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include('../../Estructura/footer.php'); ?>
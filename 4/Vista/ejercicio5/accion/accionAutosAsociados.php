<?php
include('../../../configuracion.php');
include('../../Templates/head.php');

//Extraigo datos del formulario
$datos = data_submitted();
$dni['nroDni'] = $datos['nroDni'];

//Creo instancia del objeto AbmPersona y accedo al método correspondiente
$objPersona = new AbmPersona();
$colPersonas = $objPersona->buscarColInfo($dni);

//Verifico que esa persona exista
$hayPersonas = false;
if (count($colPersonas) > 0) {
    $hayPersonas = true;

    //Creo instancia del objeto AbmAuto y accedo al método correspondiente
    $objAuto = new AbmAuto();
    $dni['dniDuenio'] = $datos['nroDni'];
    $colAutos = $objAuto->buscarColInfo($dni);

    //Busco autos asociados a esa persona
    $hayAutos = false;
    if (count($colAutos) > 0) {
        $hayAutos = true;
    }
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 mx-auto">
            <div class="card-header">
                <h3>Resultado</h3>
            </div>
            <div class="card-body">
                <?php if ($hayPersonas): ?>
                    <?php
                    foreach ($colPersonas as $persona) {
                        $nroDni = $persona['nroDni'];
                        $apellido = $persona['apellido'];
                        $nombre = $persona['nombre'];
                        $fechaNac = $persona['fechaNac'];
                        $telefono = $persona['telefono'];
                        $domicilio = $persona['domicilio'];
                    } ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NroDni</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">FechaNac</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Domicilio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $nroDni ?></td>
                                <td><?php echo $apellido ?></td>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $fechaNac ?></td>
                                <td><?php echo $telefono ?></td>
                                <td><?php echo $domicilio ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php if ($hayAutos): ?>
                        <h3>Vehículos asociados</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Patente</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($colAutos as $auto):
                                $patente = $auto['patente'];
                                $marca = $auto['marca'];
                                $modelo = $auto['modelo'];
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $patente ?></td>
                                        <td><?php echo $marca ?></td>
                                        <td><?php echo $modelo ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    <?php else: ?>
                        <p><?php echo "No se encontraron autos asociado a " . $apellido . " " . $nombre . "."; ?></p>
                    <?php endif; ?>
                <?php else: ?>
                    <p><?php echo "No se ha encontrado a la persona." ?></p>
                <?php endif; ?>
                <a href="../autosPersona.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include('../../Templates/footer.php'); ?>
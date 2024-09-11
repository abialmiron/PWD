<?php
include('../../configuracion.php');
include('../Templates/head.php');

//Creo instancia del objeto AbmPersona y accedo al método correspondiente
$objPersona = new AbmPersona();
$colPersonas = $objPersona->buscarColInfo("");

//Verifico que hayan personas en la base de datos
$hayPersonas = false;
if (count($colPersonas) > 0) {
    $hayPersonas = true;
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 mx-auto">
            <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>
            <div class="card-header">
                <h3>Listado de personas cargadas en la base de datos</h3>
            </div>
            <div class="card-body">
                <?php if ($hayPersonas): ?>
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
                        <?php
                        foreach ($colPersonas as $persona):
                            $nroDni = $persona['nroDni'];
                            $apellido = $persona['apellido'];
                            $nombre = $persona['nombre'];
                            $fechaNac = $persona['fechaNac'];
                            $telefono = $persona['telefono'];
                            $domicilio = $persona['domicilio'];
                        ?>
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
                        <?php endforeach; ?>
                    </table>
                    <a href="autosPersona.php" class="btn btn-primary">Autos asociados a persona</a>
                <?php else: ?>
                    <p><?php echo "No hay personas cargadas en la base de datos."; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php include('../Templates/footer.php'); ?>
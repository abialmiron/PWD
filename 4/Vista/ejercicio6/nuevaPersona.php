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
    <div class="justify-content-md-center align-items-center">
        <div class="card shadow col-sm-8 m-5 mx-auto">
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
                <?php endif; ?>
            </div>
            <div class="card-header">
                <h3>Completar datos de persona nueva</h3>
            </div>
            <div class="card-body">
                <form id="form" name="form" method="post" action="./accion/accionNuevaPersona.php">
                    <div class="mb-1">
                        <label for="nroDni" class="form-label fw-semibold">Número DNI</label>
                        <input type="text" id="nroDni" name="nroDni" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="apellido" class="form-label fw-semibold">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="nombre" class="form-label fw-semibold">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="fechaNac" class="form-label fw-semibold">Fecha nacimiento</label>
                        <input type="text" id="fechaNac" name="fechaNac" class="form-control" placeholder="AAAA-MM-DD" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
                        <div class="mensaje-error"></div>
                    </div>
                    <div class="mb-1">
                        <label for="domicilio" class="form-label fw-semibold">Domicilio</label>
                        <input type="text" id="domicilio" name="domicilio" class="form-control" required>
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
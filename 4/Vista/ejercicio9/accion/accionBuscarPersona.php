<?php
include('../../../configuracion.php');
include('../../Templates/head.php');

//Extraigo los datos obtenidos del formulario
$datos = data_submitted();
$dni['nroDni'] = $datos['nroDni'];

//Creo instancia del objeto AbmPersona y accedo al método correspondiente
$objPersona = new AbmPersona();

//Listo todas las personas
$colPersonas = $objPersona->buscarColInfo($dni);

//Verifico si existe la persona con ese dni
$existePersona = false;
if (count($colPersonas) > 0) {
    $existePersona = true;
    // Si se encontró la persona, toma los datos
    $persona = $colPersonas[0];
} else {
    $mensaje = "No existe una persona con este DNI.";
}

?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 mx-auto">
            <div class="card-header">
                <h3>Actualizar datos persona</h3>
            </div>
            <div class="card-body">
                <?php if ($existePersona): ?>
                    <form name="form" id="form" method="post" action="actualizarDatosPersona.php">
                        <div class="form-group">
                            <!-- Número de DNI, no editable -->
                            <div class="mb-1">
                                <label for="nroDni" class="form-label fw-semibold">Número DNI</label>
                                <input type="text" id="nroDni" name="nroDni" class="form-control" value="<?php echo $persona['nroDni'] ?>" readonly>
                                <div class="mensaje-error"></div>
                            </div>
                            <!-- Campos editables con valores originales en campos ocultos -->
                            <div class="mb-1">
                                <label for="apellido" class="form-label fw-semibold">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control" value="<?php echo $persona['apellido'] ?>" required>
                                <input type="hidden" name="original_apellido" value="<?php echo $persona['apellido'] ?>">
                                <div class="mensaje-error"></div>
                            </div>
                            <div class="mb-1">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $persona['nombre'] ?>" required>
                                <input type="hidden" name="original_nombre" value="<?php echo $persona['nombre'] ?>">
                                <div class="mensaje-error"></div>
                            </div>
                            <div class="mb-1">
                                <label for="fechaNac" class="form-label fw-semibold">Fecha de Nacimiento</label>
                                <input type="text" id="fechaNac" name="fechaNac" class="form-control" value="<?php echo $persona['fechaNac'] ?>" required>
                                <input type="hidden" name="original_fechaNac" value="<?php echo $persona['fechaNac'] ?>">
                                <div class="mensaje-error"></div>
                            </div>
                            <div class="mb-1">
                                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                                <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $persona['telefono'] ?>" required>
                                <input type="hidden" name="original_telefono" value="<?php echo $persona['telefono'] ?>">
                                <div class="mensaje-error"></div>
                            </div>
                            <div class="mb-1">
                                <label for="domicilio" class="form-label fw-semibold">Domicilio</label>
                                <input type="text" id="domicilio" name="domicilio" class="form-control" value="<?php echo $persona['domicilio'] ?>" required>
                                <input type="hidden" name="original_domicilio" value="<?php echo $persona['domicilio'] ?>">
                                <div class="mensaje-error"></div>
                            </div>
                            <!-- Botón para enviar los datos a ActualizarDatosPersona.php -->
                            <div class="mb-2">
                                <div class="text-center p-2">
                                    <input type="submit" id="submit" class="btn btn-primary" value="Actualizar">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php else: ?>
                    <p><?php echo $mensaje ?></p>
                <?php endif ?>
                <a href="../buscarPersona.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include('../../Templates/footer.php'); ?>
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
    // $infoPersona = $persona->obtenerInfo();
    $mensaje = '
    <form name="form" id="form" method="post" action="actualizarDatosPersona.php">
        <div class="form-group">
            <!-- Número de DNI, no editable -->
            <label for="nroDni" class="form-label fw-semibold">Número DNI</label>
            <input type="text" id="nroDni" name="nroDni" class="form-control" value="' . $persona['nroDni'] . '" readonly>

            <!-- Campos editables -->
            <label for="apellido" class="form-label fw-semibold">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" value="' . $persona['apellido'] . '" required>

            <label for="nombre" class="form-label fw-semibold">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="' . $persona['nombre'] . '" required>

            <label for="fechaNac" class="form-label fw-semibold">Fecha de Nacimiento</label>
            <input type="date" id="fechaNac" name="fechaNac" class="form-control" value="' . $persona['fechaNac'] . '" required>

            <label for="telefono" class="form-label fw-semibold">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" value="' . $persona['telefono'] . '" required>

            <label for="domicilio" class="form-label fw-semibold">Domicilio</label>
            <input type="text" id="domicilio" name="domicilio" class="form-control" value="' . $persona['domicilio'] . '" required>

            <!-- Botón para enviar los datos a ActualizarDatosPersona.php -->
            <div class="text-center p-2">
                <input type="submit" id="submit" class="btn btn-primary" value="Actualizar">
            </div>
        </div>
    </form>';
} else {
    $mensaje = "NO EXISTE UNA PERSONA CON ESTE DNI";
}
?>
<main class="index">
    <div class="justify-content-md-center align-items-center mt-5">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 mx-auto">
            <div class="card-header">
                <h3>Actualizar Datos Persona</h3>
            </div>
            <div class="card-body">
                <p><?php echo $mensaje; ?></p>
                <a href="../buscarPersona.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include('../../Templates/footer.php'); ?>
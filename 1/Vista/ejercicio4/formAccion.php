<?php
include('../../configuracion.php');
include('../Estructura/head.php');

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new DatosPersona1();
$cadenaDatos = $obj->datosPersonales($datos);

//Extraigo los datos individualmente
$nombre = $cadenaDatos['nombre'];
$apellido = $cadenaDatos['apellido'];
$edad = $cadenaDatos['edad'];
$direccion = $cadenaDatos['direccion'];
$mensajeEdad = $cadenaDatos['mensajeEdad'];
?>
<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        Nombre: <?php echo $nombre ?><br />
                        Apellido:<?php echo $apellido ?><br />
                        Edad: <?php echo $edad ?><br />
                        Dirección: <?php echo $direccion ?><br />
                        <?php echo $mensajeEdad ?>
                        <div class="text-center p2">
                            <br /><a class="btn btn-primary" href="form.php">Volver <a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('../Estructura/footer.php');
?>
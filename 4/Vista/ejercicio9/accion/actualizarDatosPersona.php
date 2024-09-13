<?php
include('../../../configuracion.php');
include('../../Templates/head.php');


// Carga el controlador
$abmPersona = new ABMPersona();
$datos = data_submitted();

// Intenta modificar los datos en la base de datos
if ($abmPersona->modificacion($datos)) {
        echo "Los datos fueron actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos.";
    }

?>

<?php
    include('../../Templates/footer.php');
?>
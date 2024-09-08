<?php
include_once '../Modelo/Conector/BaseDatos.php';
include_once '../Modelo/Auto.php';
include_once '../Control/ABMAuto.php';
include_once '../Control/ABMPersona.php';

$abmAuto = new ABMAuto();
$param = null;

$arregloAutos = $abmAuto->buscar($param);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autos</title>
<body>

<h1>Lista de Autos</h1>

<?php
if (is_array($arregloAutos) && count($arregloAutos) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Dueño</th>
            </tr>";
    foreach ($arregloAutos as $auto) {
        $persona = $auto->getPersona(); 
        
        echo "<tr>
                <td>{$auto->getPatente()}</td>
                <td>{$auto->getMarca()}</td>
                <td>{$auto->getModelo()}</td>
                <td>{$persona->getNombre()} {$persona->getApellido()}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay autos cargados en la base de datos.</p>";
}
?>

</body>
</html>

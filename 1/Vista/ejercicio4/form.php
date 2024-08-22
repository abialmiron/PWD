<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../Estructura/css/styles.css">
</head>

<body>
    <h2>Ingrese sus datos personales</h2>
    <form name="form" method="get" action="formAccion.php">
        <div class="datosPersonales">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" minlength="2" required>
        </div>
        <div class="datosPersonales">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" minlength="2" required>
        </div>
        <div class="datosPersonales">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" min="0" required>
        </div>
        <div class="datosPersonales">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" required>
        </div>
        <input type="submit" id="submit" value="Enviar">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.4</title>
    <link rel="stylesheet" href="../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-validation/dist/jquery.validate.min.js"></script>
</head>

<body>
    <h2>Ingrese sus datos personales</h2>
    <form name="form" id="form" method="get" action="formAccion.php" novalidate>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>

        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" min="0" max="150" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>

        <input type="submit" id="submit" value="Enviar">
    </form>
    <script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion3-4.js"></script>
</body>

</html>
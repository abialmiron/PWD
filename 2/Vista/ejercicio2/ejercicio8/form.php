<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.8</title>
    <link rel="stylesheet" href="../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-validation/dist/jquery.validate.min.js"></script>
</head>

<body>
    <form name="form" id="form" method="post" action="formAccion.php" novalidate>
        <h2> Para calcular la tarifa ingrese los siguientes datos</h2>
        <table>
            <tr>
                <td>
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" max=150 min=0 required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="estudia">Estudia</label>
                    <input type="radio" name="estudia" id="estudia" value="si" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="estudia">No estudia</label>
                    <input type="radio" name="estudia" id="estudia" value="no">
                </td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Enviar">
    </form>
    <script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion8.js"></script>
</body>

</html>
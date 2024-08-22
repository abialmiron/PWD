<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.2</title>
    <link rel="stylesheet" href="../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-validation/dist/jquery.validate.min.js"></script>
</head>

<body>
    <h2>Ingrese las horas de cursada por día de la materia Programación Web Dinámica</h2>

    <form name="form" id="form" method="get" action="formAccion.php" novalidate>
        <table>
            <tr>
                <td>Lunes</td>
                <td><input type="number" step="any" name="hsLunes" id="hsLunes" min=0 max=24 required></td>
            </tr>
            <tr>
                <td>Martes</td>
                <td><input type="number" step="any" name="hsMartes" id="hsMartes" min=0 max=24 required></td>
            </tr>
            <tr>
                <td>Miércoles</td>
                <td><input type="number" step="any" name="hsMiercoles" id="hsMiercoles" min=0 max=24 required></td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td><input type="number" step="any" name="hsJueves" id="hsJueves" min=0 max=24 required></td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td><input type="number" step="any" name="hsViernes" id="hsViernes" min=0 max=24 required></td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Enviar">
    </form>
    <script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion2.js"></script>
</body>

</html>
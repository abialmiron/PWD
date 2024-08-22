<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.7</title>
    <link rel="stylesheet" href="../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../../estructura/js/librerias-plugins/jquery-validation/dist/jquery.validate.min.js"></script>
</head>

<body>
    <form name="form" id="form" method="post" action="formAccion.php" novalidate>
        <label for="consigna">Indique dos números para operar</label>
        <tr>
            <td>Número 1° <input type="number" id="num1" name="num1" required></td>
        </tr>
        <tr>
            <td>Número 2° <input type="number" id="num2" name="num2" required></td>
        </tr>
        <tr>
            <td>Seleccione una operación matemática</td>
            <td>
                <select id="operacion" name="operacion">
                    <option value="suma">SUMA</option>
                    <option value="resta">RESTA</option>
                    <option value="multiplicacion">MULTIPLICACIÓN</option>
                    <option value="division">DIVISIÓN</option>
                </select>
            </td>
        </tr>
        </table>
        <input type="submit" id="submit" value="Enviar">
    </form>
    <script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion7.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h2>Ingrese las horas de cursada por día de la materia Programación Web Dinámica</h2>

    <form name="form" method="get" action="formAccion.php">
        <table>
            <tr>
                <td>Lunes</td>
                <td><input type="number" step="any" name="horasCursada[]" id="hsLunes" min=0 required></td>
            </tr>
            <tr>
                <td>Martes</td>
                <td><input type="number" step="any" name="horasCursada[]" id="hsMartes" min=0 required></td>
            </tr>
            <tr>
                <td>Miercoles</td>
                <td><input type="number" step="any" name="horasCursada[]" id="hsMiercoles" min=0 required></td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td><input type="number" step="any" name="horasCursada[]" id="hsJueves" min=0 required></td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td><input type="number" step="any" name="horasCursada[]" id="hsViernes" min=0 required></td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Enviar">
    </form>
</body>

</html>
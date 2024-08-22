<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
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

        <div class="datosPersonales">
            <label for="sexo">Sexo</label>
            <select id="sexo" name="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        <div class="datosEstudios">
            <h2>Nivel de estudios</h2>
            <div class="opciones">
                <input type="radio" name="estudios" id="estudios1" value="no tiene" required> No tiene estudios
            </div>
            <div class="opciones">
                <input type="radio" name="estudios" id="estudios2" value="primarios"> Estudios primarios
            </div>
            <div class="opciones">
                <input type="radio" name="estudios" id="estudios3" value="secundarios"> Estudios secundarios
            </div>
        </div>

        <div class="datosEstudios">
            <h2>Deportes que practica</h2>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="voley">Voley
            </div>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="basket">Basket
            </div>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="futbol">Futbol
            </div>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="tennis">Tennis
            </div>
        </div>

        <input type="submit" id="submit" value="Enviar">
    </form>
</body>

</html>
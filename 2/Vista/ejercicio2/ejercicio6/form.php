<?php
include('../../../configuracion.php');
include('../../Templates/head.php');
?>
<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Ingrese sus datos personales</h5>
                        <form name="form" id="form" method="get" action="formAccion.php">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="fw-semibold" for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" minlength="2" required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="nombre">Apellido</label>
                                    <input class="form-control" type="text" name="apellido" id="apellido" minlength="2" required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="nombre">Edad</label>
                                    <input class="form-control" type="number" name="edad" id="edad" min="0" required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="nombre">Dirección</label>
                                    <input class="form-control" type="text" name="direccion" id="direccion" required>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" class for="sexo">Sexo</label>
                                    <select class="form-select" id="sexo" name="sexo">
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="estudios">Nivel de estudios</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estudios" id="estudios1" value="no tiene" required> No tiene
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estudios" id="estudios2" value="primarios"> Estudios primarios
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estudios" id="estudios3" value="secundarios"> Estudios secundarios
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-semibold" for="deportes">Deportes que practica</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="deporte[]" id="deporte[]" value="voley">Voley
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="deporte[]" id="deporte[]" value="basket">Basket
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="deporte[]" id="deporte[]" value="futbol">Futbol
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="deporte[]" id="deporte[]" value="tennis">Tennis
                                    </div>
                                </div>
                            </div>
                            <div class="text-center p-2">
                                <input type="submit" id="submit" class="btn btn-primary" value="Enviar">
                                <a class="btn btn-secondary" href="../../ejercicio2/">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion5-6.js"></script>
<?php
include('../../Templates/footer.php');
?>
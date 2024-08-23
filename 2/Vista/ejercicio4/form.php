<?php
include('../../configuracion.php');
include('../Templates/head.php');
?>
<main class="index">
    <div class="container p-2">
        <div class="card">
            <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>

            <div class="card-header bg-secondary-subtle border rounded-3 text-primary">
                <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                    </svg> Cinem@s</h5>
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation" id="form" name="form" id="form" method="post" action="formAccion.php" novalidate>

                    <div class="col">
                        <!--TÍTULO-->
                        <div class="form-group mb-3" id="grupo_titulo">
                            <label class="form-label fw-medium">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--DIRECTOR-->
                        <div class="form-group col-12 mb-3" id="grupo_director">
                            <label class="form-label fw-medium">Director</label>
                            <input type="text" class="form-control" id="director" name="director" placeholder="Director" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--PRODUCCIÓN-->
                        <div class="form-group col-12 mb-3" id="grupo_produccion">
                            <label class="form-label fw-medium">Producción</label>
                            <input type="text" class="form-control" id="produccion" name="produccion" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--NACIONALIDAD-->
                        <div class="form-group col-12 mb-3" id="grupo_nacionalidad">
                            <label class="form-label fw-medium">Nacionalidad</label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Argentina, Rusa, Francia" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--DURACIÓN-->
                        <div class="form-group col-4 mb-3" id="grupo_duracion">
                            <label class="form-label fw-medium">Duración</label>
                            <input type="number" class="form-control" id="duracion" name="duracion" placeholder="999" max="999" min="1" required>
                            <div class="invalid-feedback">
                                Ingrese minutos (3 dígitos)
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <!--ACTORES-->
                        <div class="form-group col-12 mb-3" id="grupo_actores">
                            <label class="form-label fw-medium">Actores</label>
                            <input type="text" class="form-control" id="actores" name="actores" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--GUIÓN-->
                        <div class="form-group col-12 mb-3" id="grupo_guion">
                            <label class="form-label fw-medium">Guión</label>
                            <input type="text" class="form-control" id="guion" name="guion" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--AÑO-->
                        <div class="form-group col-3 mb-3" id="grupo_anio">
                            <label class="form-label fw-medium">Año</label>
                            <input type="number" class="form-control formulario_input" id="anio" pattern="[0-9]+" max="9999" min="1" name="anio" required>
                            <div class="invalid-feedback">
                                Ingrese un año válido (4 dígitos).
                            </div>
                        </div>

                        <!--GÉNERO-->
                        <div class="form-group col-3 mb-3" id="grupo_genero">
                            <label class="form-label fw-medium">Género</label>
                            <select id="genero" name="genero" class="form-select" required>
                                <option selected disabled value="">Seleccionar...</option>
                                <option>Comedia</option>
                                <option>Drama</option>
                                <option>Terror</option>
                                <option>Románticas</option>
                                <option>Suspenso</option>
                                <option>Otras</option>
                            </select>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>

                        <!--EDAD-->
                        <div class="form-group mb-3" id="grupo_edad">
                            <div class="form-label fw-medium">
                                <label class="mb-2">Restricciones de edad</label>
                            </div>
                            <input type="radio" name="restriccion" id="todolospublicos" value="Todo los públicos" class="form-check-input" required><label class="etiqueta form-check-label">Todo los publicos</label>
                            <input type="radio" name="restriccion" id="mayores7" value="Mayores a 7 años" class="form-check-input" required><label class="form-check-label"> Mayores a 7 años</label>
                            <input type="radio" name="restriccion" id="mayores18" value="Mayores a 18 años" class="form-check-input" required><label class="form-check-label"> Mayores a 18 años</label>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>
                    </div>

                    <!--SINÉPSIS-->
                    <div class="row">
                        <div class="form-group mb-3" id="sinopsis">
                            <label class="form-label fw-medium">Sinópsis</label>
                            <textarea class="form-control" id="sinopsis" rows="3" name="sinopsis" required></textarea>
                        </div>
                        <div class="invalid-feedback">
                            Campo requerido.
                        </div>
                    </div>

                    <!--ENVIAR-->
                    <div class="row justify-content-end">
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
                                <button type="reset" class="btn btn-secondary ms-2">Borrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../estructura/js/validaciones/ejercicio4.js"></script>
</main>
<?php
include('../Templates/footer.php');
?>
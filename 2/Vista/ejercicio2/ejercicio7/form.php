<?php
include('../../../configuracion.php');
include('../../Estructura/head.php');
?>
<main class="index">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Indique dos números para operar con ellos</h5>
                        <form name="form" id="form" method="get" action="formAccion.php">
                            <div class="form-group">
                                <div class="d-flex justify-content-center mb-1">
                                    <input class="form-control" type="number" id="num1" name="num1" required>
                                    <div class="mensaje-error"></div>
                                    <input class="form-control" type="number" id="num2" name="num2" required>
                                    <div class="mensaje-error"></div>
                                </div>
                                <div class="mb-1">
                                    <label class="fw-semibold" class for="sexo">Seleccione una operación matemática</label>
                                    <select class="form-select" id="operacion" name="operacion">
                                        <option value="suma">SUMA</option>
                                        <option value="resta">RESTA</option>
                                        <option value="multiplicacion">MULTIPLICACIÓN</option>
                                        <option value="division">DIVISIÓN</option>
                                    </select>
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
<script type="text/javascript" src="../../estructura/js/validaciones/ejercicio2/validacion7.js"></script>
<?php
include('../../Estructura/footer.php');
?>
<?php
include('Templates/head.php');
?>
<main class="row justify-content-center align-items-center m-auto p-4">
    <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="text-center">Ejercicio 1</h3>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate method="post" action="vernumero.php" id="formLogin" name="form">
                    <div class="mb-3">
                        <div class="input-group">
                            <input class="form-control validate" type="text" name="numero" placeholder="Número" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese un número.
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include('Templates/footer.php');
?>
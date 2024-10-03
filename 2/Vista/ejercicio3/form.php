<?php
include('../../configuracion.php');
include('../Estructura/head.php');
?>
<main class="index">
    <form name="form" id="form" method="post" action="formAccion.php">
        <div class="container d-flex justify-content-center">
            <div class="bg-secondary m-4  d-flex justify-content-center align-items-center" style="height: 400px; width: 400px;">
                <div class="bg-light position-relative " style="height: 370px; width: 370px;">
                    <button type="button" class="btn-close position-absolute top-0 end-0" onclick="window.location.href='../../'"></button>
                    <div class="d-grid gap-2 col-10 mx-auto position-absolute top-50 start-50 translate-middle">
                        <div class="d-grid row">
                            <div class="col justify-content-between text-center">
                                <h4>Member Login</h4>
                            </div>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username">
                            <label for="usuario"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> Username</label>
                            <div class="mensaje-error"></div>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            <label for="pass"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                                </svg> Password</label>
                            <div class="mensaje-error"></div>
                        </div>
                        <input type="submit" value="Login" id="boton" style="background-color: #24CF9C; color: white;" class="btn btn-primar">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript" src="../estructura/js/validaciones/ejercicio3.js"></script>
</main>
<?php
include('../Estructura/footer.php');
?>
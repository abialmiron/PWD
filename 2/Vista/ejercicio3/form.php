<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estructura/css/bootstrap-icons-1.11.3/">

    <script type="text/javascript" src="../estructura/js/librerias-plugins/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../estructura/js/librerias-plugins/jquery-validation/dist/jquery.validate.min.js"></script>
</head>

<body>

    <form name="form" id="form" method="post" action="formAccion.php" novalidate>

        <div class="container d-flex justify-content-center">
            <div class="bg-secondary m-4  d-flex justify-content-center align-items-center" style="height: 400px; width: 400px;">
                <div class="bg-light position-relative " style="height: 370px; width: 370px;">
                    <button type="reset" class="btn-close position-absolute top-0 end-0" aria-label="Close"></button>
                    <div class="d-grid gap-2 col-10 mx-auto position-absolute top-50 start-50 translate-middle">

                        <div class="d-grid row">
                            <div class="col justify-content-between text-center">
                                <h4>Member Login</h4>
                            </div>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="usuario" name="usuario" placeholder="Password">
                            <label for="pass"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> Username</label>
                            <div class="mensaje-error"></div>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            <label for="pass"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                                </svg> Password</label>
                            <div class="mensaje-error"></div>
                        </div>

                        <div id="formconsole" class="error"></div>
                        <input type="submit" value="Login" id="boton" style="background-color: #24CF9C; color: white;" class="btn btn-primar">
                    </div>
                </div>
            </div>
        </div>

    </form>

    <script type="text/javascript" src="../estructura/js/validaciones/ejercicio3.js"></script>

</html>
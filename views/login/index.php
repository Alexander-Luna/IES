<?php
session_start();
if (!isset($_SESSION["user_session"]) || !isset($_SESSION['user_session']['user_id'])) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Login</title>

        <?php require_once '../html/MainHead.php'; ?>

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">IES</h1>
                                        </div>
                                        <form class="user" id="miForm">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Contraseña...">
                                            </div>

                                            <button type="button" id="btnentrar" class="btn btn-primary btn-user btn-block">
                                                Iniciar Sesión
                                            </button>
                                            <hr>

                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">¿Olvido su contraseña?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <script src="../login/content.js"></script>
        <?php require_once '../html/headerJS.php'; ?>

    </body>

    </html>
<?php
} else {
    header("Location: ../main/index.php");
    exit();
}
?>
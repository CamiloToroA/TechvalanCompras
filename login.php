<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/users/login-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SCRIPT LOGIN -->
    <script src="src/app/users.app.js"></script>
    <script src="src/assets/js/libs/jquery-3.1.1.min.js"></script>


</head>

<body class="login">
    <form action="login.php" method="POST" class="form-login">
        <?php
        include('src/http/db/conexion.php');
        ?>
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="" src="src/assets/img/logo-tecnovalan.png" class="theme-logo">
            </div>
            <div class="col-md-12">
                <label for="inputEmail" class="">Correo Electrónico</label>
                <input type="email" autocomplete="off" name="correoElectronico" id="inputEmail" class="form-control mb-4" value="<?php if (isset($_POST['correoElectronico'])) echo $_POST['correoElectronico'] ?>">

                <label for="inputPassword" class="">Contraseña</label>
                <input type="password" name="contraseña" id="inputPassword" class="form-control mb-5">

                <div class="checkbox d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                    </div>
                    <div>
                        <a href="user_pass_recovery_1.html">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <button type="submit" name="ingresar" class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5">INGRESAR</button>
                <a href="registro.php" class="btn btn-lg btn-outline-primary btn-block btn-rounded mb-3">REGISTRARME</a>
                <a href="index.php" class="btn btn-lg btn-outline-danger btn-block btn-rounded mb-3">VOLVER</a>

            </div>
        </div>
    </form>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="src/bootstrap/js/popper.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>

<!-------------------PHP LOGIN------------------->

<?php

include('src/http/db/conexion.php');

if (isset($_POST['ingresar'])) {

    $correo = $_POST['correoElectronico'];
    $contraseña = $_POST['contraseña'];

    $contraseña_incorrecta = "SELECT password_user FROM users_management";
    $resultado_contraseña = mysqli_query($conexion, $contraseña_incorrecta);


    $correo_incorrecto = "SELECT email_user FROM users_management";
    $resultado_correo = mysqli_query($conexion, $correo_incorrecto);


    if ($resultado_correo != $correo or $resultado_contraseña != $contraseña) {
?>
        <script>
            Swal.fire({
                icon: 'warning',
                heightAuto: false,
                title: '¡Correo electrónico o contraseña incorrecto/s!',
                confirmButtonText: "Aceptar",
            })
        </script>
    <?php
    }

    if ($correo == "" && $contraseña == "") {
    ?>
        <script>
            Swal.fire({
                icon: 'warning',
                heightAuto: false,
                title: '¡Por favor, llena todos los campos!',
                confirmButtonText: "Aceptar",
            })
        </script>
<?php
    } else {
        $query = "SELECT * FROM users_management WHERE email_user = '$correo' AND password_user = '$contraseña'";

        $file = mysqli_query($conexion, $query);

        if (mysqli_num_rows($file) > 0) {
            session_start();

            while ($datos = mysqli_fetch_assoc($file)) {
                $_SESSION['nombre'] = $datos['name_user'];
                $_SESSION['correo'] = $datos['email_user'];
                $_SESSION['rol'] = $datos['id_rol_user'];
            }

            header('Location: src/dashboard.php');
        }
    }
}

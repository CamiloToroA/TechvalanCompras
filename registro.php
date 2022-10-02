


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Registrarse </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/users/register-1.css" rel="stylesheet" type="text/css" /> 
    <!-- END GLOBAL MANDATORY STYLES -->
    <script src="src/app/users.app.js"></script>
    
</head>
<body class="register">
    <div class="form-register">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="" src="src/assets/img/logo-tecnovalan.png" class="theme-logo">
            </div>
            <div class="col-md-12">
                <label for="full-name" class="">Nombre</label>
                <input type="text" id="full-name" name="nombre" class="form-control mb-4">

                <label for="inputEmail" class="">Correo Electrónico</label>
                <input type="text" id="inputEmail" name="correo" class="form-control mb-4">

                <label for="inputPassword" class="">Contraseña</label>
                <input type="password" id="inputPassword" name="contraseña" class="form-control mb-5">

                <label for="inputTelefono" class="">Teléfono</label>
                <input type="number" id="inputTelefono" name="contraseña" class="form-control mb-5">

                <input type="hidden" id="inputRol" name="rol" class="form-control mb-5">

                <button type="submit" onclick="registroUsers()" name="registro" class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5">REGISTRARME</button>
                <a href="index.php" class="btn btn-lg btn-outline-danger btn-block btn-rounded mb-3">VOLVER</a>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="src/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="src/bootstrap/js/popper.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>

<!-------------------PHP REGISTRO------------------->







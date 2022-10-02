<?php

require '../http/db/conexion.php';

if ($_POST['accion'] == 'registroUsers') {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $phone = $_POST['telefono'];
    $rol = 2;

    $query = "INSERT INTO users_management (name_user, email_user, password_user, phone_user, id_rol_user) VALUES ('$nombre', '$correo', '$contraseña', '$phone', '$rol')";

    $file = mysqli_query($conexion, $query);

    if ($file) {
        echo json_encode('ok');
    } else {
        echo json_encode('error');
    }
}

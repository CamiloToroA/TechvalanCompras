<?php

require_once 'db/conexion.php';
if ($_POST['accion'] == 'registrarUsuario') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado'];
    $idrol = 2;

    $query = "INSERT INTO users_management(name_user, email_user, password_user, phone_user, state_user, id_rol_user) VALUE('$nombre','$correo','$contrasena','$telefono','$estado','$idrol')";

    $file = mysqli_query($conexion,$query);

    if ($file) {
        echo json_encode('ok');
    } else {
        echo json_encode('error');
    }

}


if (trim($_POST['accion']) == 'seleccionarListaUsuarios') {

    $respuesta = new stdclass();

    $cadena = "SELECT * FROM users_management";

    $resultado = mysqli_query($conexion, $cadena);

    $elementos = [];
    $i = 1;

    while ($datos = mysqli_fetch_array($resultado)) {

        array_push(
            $elementos,
            [
                'id' => $datos["id_user"],
                'nombre' => $datos["name_user"],
                'email' => $datos["email_user"],
                'contrasena' => $datos["password_user"],
                'telefono' => $datos["phone_user"],
                'estado' => $datos["state_user"]
                
            ]
        );
        $i++;
    }

    $respuesta->registros = $elementos;

    echo json_encode($respuesta);
}


if ($_POST['accion'] == 'actualizarUsuarios') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];
    $telefono = $_POST['phone'];
    $estado = $_POST['state'];
    $query = "UPDATE users_management SET name_user = '$nombre', email_user = '$correo', password_user = '$contrasena', phone_user = '$telefono', state_user = '$estado' WHERE id_user = '$id'";

    $file = mysqli_query($conexion,$query) or die(mysqli_errno($conexion));

    if ($file > 0) {
        echo json_encode('ok');
    } else {
        echo json_encode('error');
    }
}

<?php

require '../http/db/conexion.php';


if ($_POST['accion'] == 'registrarCliente') {

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado'];
    $contraseña = $_POST['contraseña'];
 
    $query = "INSERT INTO client_management(document_number_client, name_client, lastname_client, email_client, phone_client, state_client, password_client)
    VALUE (' $documento','$nombre','$apellidos','$correo','$telefono','$estado','$contraseña')";

    $file = mysqli_query($conexion, $query);

    if($file){
        echo json_encode('ok');
    }else{
        echo json_encode('error');     
    }
}

if(trim($_POST['accion'])=='select_listaClientes'){

    $respuesta = new stdClass();
    $cadena = "SELECT * FROM client_management";

    $result = mysqli_query($conexion, $cadena);

    $elementos = [];
    $i = 1;
    while($datos = mysqli_fetch_array($result)){
        array_push($elementos,
        ['id'       =>$datos["id_client"],
        'documento' =>$datos["document_number_client"],
        'nombre'    =>$datos["name_client"],
        'apellidos' =>$datos["lastname_client"],
        'correo'    =>$datos["email_client"],
        'telefono'  =>$datos["phone_client"],
        'estado'    =>$datos["state_client"],
        'contraseña'=>$datos["password_client"],

    ]);
    $i++;
    }

    $respuesta->registros = $elementos;

    echo json_encode($respuesta);
}

if ($_POST['accion'] == 'actualizarCliente') {

    $id = $_POST['id'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado'];
    $contraseña = $_POST['contraseña'];
 
    $query = "UPDATE client_management SET document_number_client = '$documento', name_client = '$nombre', lastname_client = '$apellidos', email_client = '$correo', phone_client = '$telefono', state_client = '$estado', password_client = '$contraseña' WHERE id_client = '$id'";

    $file = mysqli_query($conexion, $query);

    if($file){
        echo json_encode('ok');
    }
}

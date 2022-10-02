<?php

require_once 'db/conexion.php';
if($_POST['accion'] == 'registrarProvider'){
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $contacto = $_POST['contacto'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO providers_management(name_provider, email_provider, number_contact_provider, state_provider) VALUE('$nombre','$correo','$contacto','$estado')";

    $file = mysqli_query($conexion,$query);

    if($file){
        echo json_encode('ok');
    }else{
        echo json_encode('error');
    }

}



if (trim($_POST['accion']) == 'seleccionarListaProviders') {

    $respuesta = new stdclass();

    $cadena = "SELECT * FROM providers_management";

    $resultado = mysqli_query($conexion, $cadena);

    $elementos = [];
    $i = 1;

    while ($datos = mysqli_fetch_array($resultado)) {

        array_push(
            $elementos,
            [
                'id' => $datos["id_provider"],
                'nombre' => $datos["name_provider"],
                'email' => $datos["email_provider"],
                'contacto' => $datos["number_contact_provider"],
                'estado' => $datos["state_provider"]
                
            ]
        );
        $i++;
    }

    $respuesta->registros = $elementos;

    echo json_encode($respuesta);
}


if($_POST['accion'] == 'actualizarProvider') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $contacto = $_POST['contacto'];
    $estado = $_POST['estado'];
    $query = "UPDATE providers_management SET name_provider = '$nombre', email_provider = '$correo', number_contact_provider = '$contacto', state_provider = '$estado' WHERE id_provider = '$id'";

    $file = mysqli_query($conexion,$query) or die(mysqli_errno($conexion));

    if($file > 0){
        echo json_encode('ok');
    }else{
        echo json_encode('error');
    }
}

<?php

require_once 'db/conexion.php';
if($_POST['accion'] == 'registrarCompra'){
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO purchasing_management(description_purchasing, quantity_purchasing, amount_purchasing, id_provider, id_product, state_purchasing ) VALUE('$descripcion','$cantidad','$valor','1', '1', '$estado')";

    $file = mysqli_query($conexion,$query);

    if($file){
        echo json_encode('ok');
    }else{
        echo json_encode('error');
    }

}



if (trim($_POST['accion']) == 'seleccionarListaCompra') {

    $respuesta = new stdclass();

    $cadena = "SELECT * FROM purchasing_management";

    $resultado = mysqli_query($conexion, $cadena);

    $elementos = [];
    $i = 1;

    while ($datos = mysqli_fetch_array($resultado)) {

        array_push(
            $elementos,
            [
                'id' => $datos["id_purchasing"],
                'descripcion' => $datos["description_purchasing"],
                'cantidad' => $datos["quantity_purchasing"],
                'valor' => $datos["amount_purchasing"],
                'estado' => $datos["state_purchasing"]               
            ]
        );
        $i++;
    }
    $respuesta->registros = $elementos;
    

    echo json_encode($respuesta);
}


if($_POST['accion'] == 'actualizarCompra') {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $estado = $_POST['estado'];
    $query = "UPDATE purchasing_management SET description_purchasing = '$descripcion', quantity_purchasing = '$cantidad', amount_purchasing = '$valor', state_purchasing = '$estado' WHERE id_purchasing = '$id'";

    $file = mysqli_query($conexion,$query) or die(mysqli_errno($conexion));

    if($file > 0){
        echo json_encode('ok');
    }else{
        echo json_encode('error');
    }
}

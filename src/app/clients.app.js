function registrarClientes() {

    var parametros = {
        "accion"    : "registrarCliente",
        "documento" : document.getElementById('documentoCliente').value,
        "nombre"    : document.getElementById('nombreCliente').value,
        "apellidos" : document.getElementById('apellidosCliente').value,
        "correo"    : document.getElementById('correoCliente').value,
        "telefono"  : document.getElementById('telefonoCliente').value,
        "estado"    : document.getElementById('estadoCliente').value,
        "contraseña": document.getElementById('contraseñaCliente').value,
    };

    $.ajax({
        data: parametros,
        url: "http/clients.controller.php",
        type: "post",
        beforeSend: function () {
            
        },
        success: function (data) {

            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    icon: 'success',
                    title: '',
                    position: 'center',
                    text: '¡Registro exitoso!',
                    footer: ''
                })
                listarClientes()
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    position: 'center',
                    text: '¡Fallo en el registro!',
                    footer: ''
                })
            }
        },
        error: function (error) {
            console.log("No se ha podido obtener la información"+error)
        },
    });

}

function asignacionClave(){
    document.getElementById('contraseñaCliente').value = document.getElementById('documentoCliente').value
}

function listarClientes() {
    eliminaFilasTableClientes();

    var tableCliente = $("#tablaClientes").DataTable();

    tableCliente.clear();
    tableCliente.destroy();

    var parametros = {
        accion: "select_listaClientes",
    };

    $.ajax({
        data: parametros,
        url: "http/clients.controller.php",
        type: "post",
        beforeSend: function () {              
        },
        success: function (data) {
            for (var i in JSON.parse(data).registros) {

                agregarFila_Clientes(
                    JSON.parse(data).registros[i].id,
                    JSON.parse(data).registros[i].documento,
                    JSON.parse(data).registros[i].nombre,
                    JSON.parse(data).registros[i].apellidos,
                    JSON.parse(data).registros[i].correo,
                    JSON.parse(data).registros[i].telefono,
                    JSON.parse(data).registros[i].estado,
                    JSON.parse(data).registros[i].contraseña,
                    ""
                );
            }
            $("#tablaClientes").DataTable({
                dom: "Bfrtip",
                buttons: ["pdf"],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
                },
                order: [[1, "asc"]],
            });
          
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        },
    });


}

function agregarFila_Clientes(id, documento, nombre, apellidos, correo, telefono, estado, contraseña) {

    if (estado == 1) {
        varEstado = '<button class="btn btn-success btn-sm col-10" style="cursor: text">Activo</button>';
    } else if (estado == 0) {
        varEstado = '<button class="btn btn-danger btn-sm col-10" style="cursor: text">Inactivo</button>';
    }

    let datosCliente = "'" + id + "', '" + documento + "','" + nombre + "','" + apellidos + "','" + correo + "','" + telefono + "','" + estado + "','"+ contraseña +"'";

    var tablaClientes = `<tr>
    <td> ${id}</td>
    <td> ${documento}</td>
    <td> ${nombre}</td>
    <td> ${apellidos}</td>
    <td> ${correo}</td>
    <td> ${telefono}</td>
    <td> ${varEstado}</td>
    <td> ${contraseña}</td>
    <td><button data-toggle="modal" data-target="#actualizarCliente" class="btn btn-success btn-sm" onclick="tomarDatos(${datosCliente})"><i class="bi bi-pencil-square"></i></button></td>
    </tr>`;

    $("#tablaClientes tbody").append(tablaClientes);

}

function eliminaFilasTableClientes() {
    var n = 0;
    $("#tablaClientes tbody tr").each(function () {
        n++;
    });
    for (i = n - 1; i > 1; i--) {
        $("#tablaClientes tbody tr:eq('" + i + "')").remove();
    }
}

function tomarDatos(id, documento, nombre, apellidos, correo, telefono, estado, contraseña) {
    document.getElementById('idClienteActualizar').value = id
    document.getElementById('documentoClienteActualizar').value = documento
    document.getElementById('nombreClienteActualizar').value = nombre
    document.getElementById('apellidosClienteActualizar').value = apellidos
    document.getElementById('correoClienteActualizar').value = correo
    document.getElementById('telefonoClienteActualizar').value = telefono
    document.getElementById('estadoClienteActualizar').value = estado
    document.getElementById('contraseñaClienteActualizar').value = contraseña


}


function actualizarCliente() {
    var parametros = {
        "accion": "actualizarCliente",
        "id": document.getElementById('idClienteActualizar').value,
        "documento": document.getElementById('documentoClienteActualizar').value,
        "nombre": document.getElementById('nombreClienteActualizar').value,
        "apellidos": document.getElementById('apellidosClienteActualizar').value,
        "correo": document.getElementById('correoClienteActualizar').value,
        "telefono": document.getElementById('telefonoClienteActualizar').value,
        "estado": document.getElementById('estadoClienteActualizar').value,
        "contraseña": document.getElementById('contraseñaClienteActualizar').value,
    };

    $.ajax({
        data: parametros,
        url: "http/clients.controller.php",
        type: "post",
        beforeSend: function () {

        },
        success: function (data) {
            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    icon: 'success',
                    title: '',
                    position: 'center',
                    text: '¡Actualización exitosa!',
                    footer: ''
                })
                listarClientes()
            }
        },
        error: function () {
            console.log("No se ha podido obtener la información")
        },
    });

}
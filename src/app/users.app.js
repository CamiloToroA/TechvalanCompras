function registrarUsuarios() {

    var parametros = {
        "accion": "registrarUsuario",
        "nombre": document.getElementById('name_user').value,
        "correo": document.getElementById('email_user').value,
        "contrasena": document.getElementById('password_user').value,
        "telefono": document.getElementById('phone_user').value,
        "estado": document.getElementById('state_user').value,
        "idrol": document.getElementById('id_rol_user').value
    }

    $.ajax({
        data: parametros,
        url: 'http/users.controller.php',
        type: 'post',
        beforeSend: function () {
            //mostrar cargando
        },
        success: function (data) {
            //console.log(JSON.parse(data));

            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Registro exitoso',
                    showConfirmButton: false,
                    timer: 1500
                })
                listarUsuarios()
            }

        },
        error: function (error) {
            console.log("No se a podido obtener la información " + error);
        }
    })
}

function listarUsuarios() {
    eliminaFilastablaUsuarios();

    var tablaUsuarios = $('#tablaUsuarios').DataTable();
    tablaUsuarios.clear();
    tablaUsuarios.destroy();

    var parametros = {
        "accion": "seleccionarListaUsuarios"
    };

    $.ajax({
        data: parametros,
        url: 'http/users.controller.php',
        type: 'post',
        beforeSend: function () {
            cargando()
        },
        success: function (data) {
            //console.log(JSON.parse(data));
            //if(JSON.parse(data).registros == ""){

            for (var i in JSON.parse(data).registros) {

                agregarFilaUsuarios(
                    JSON.parse(data).registros[i].id,
                    JSON.parse(data).registros[i].nombre,
                    JSON.parse(data).registros[i].email,
                    JSON.parse(data).registros[i].contrasena,
                    JSON.parse(data).registros[i].telefono,
                    JSON.parse(data).registros[i].estado,
                    ""
                );
            }

            $('#tablaUsuarios').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });

            setTimeout(() => {
                cerrarAlert()
            }, 1200);
        },


        error: function (error) {
            console.log("No se ha podido obtener la información " + error);
        },
    });
}

function eliminaFilastablaUsuarios() {
    var n = 0;
    $("#tablaUsuarios tbody tr").each(function () {
        n++;
    });
    for (i = n - 1; i > 1; i--) {
        $("#tablaUsuarios tbody tr:eq('" + i + "')").remove();

    }
}

function agregarFilaUsuarios(id, nombre, email, contrasena, telefono, estado, acciones) {

    if (estado == 'Activo') {
        varEstado = '<button class="btn btn-success btn-sm col-8" style="cursor: text">Activo</button>'
    } else if(estado == 'Inactivo') {
        varEstado = '<button class="btn btn-danger btn-sm col-8" style="cursor: text">Inactivo</button>'
    }

    let datosUsuario = "'"+id+"', '"+nombre+"', '"+email+"', '"+contrasena+"', '"+telefono+"', '"+estado+"' ";

    var htmlTags = `<tr>
    <td> ${id}</td>
    <td> ${nombre}</td>
    <td> ${email}</td>
    <td> ${contrasena}</td>
    <td> ${telefono}</td>
    <td> ${varEstado}</td>
    <td><button data-toggle="modal" data-target="#actualizacionUsuario" class="btn btn-success btn-sm" onclick="tomarDatos(${datosUsuario})"><i class="bi bi-pencil-square"></i></button></td>
    </tr>`;

    $("#tablaUsuarios tbody").append(htmlTags);
}

function tomarDatos(id, nombre, email, contrasena, telefono, estado) {
    document.getElementById('id_user_update').value=id
    document.getElementById('name_user_update').value=nombre
    document.getElementById('email_user_update').value=email
    document.getElementById('password_user_update').value=contrasena
    document.getElementById('phone_user_update').value=telefono
    document.getElementById('state_user_update').value=estado
}

function actualizarUsuarios() {
    let parametros = {
        "accion": "actualizarUsuarios",
        "id": document.getElementById('id_user_update').value,
        "nombre": document.getElementById('name_user_update').value,
        "email": document.getElementById('email_user_update').value,
        "password": document.getElementById('password_user_update').value,
        "phone": document.getElementById('phone_user_update').value,
        "state": document.getElementById('state_user_update').value
    }

    $.ajax({
        data: parametros,
        url: 'http/users.controller.php',
        type: 'POST',
        beforeSend: function () {
            //mostrar cargando
        },
        success: function (data) {
            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Usuario editado con éxito',
                    showConfirmButton: false,
                    timer: 1500
                })
                listarUsuarios()
            }
        },
        error: function (error) {
            console.log("No se a podido editar la información " + error);
        }
    })
}

function cargando() {
    let timerInterval
    Swal.fire({
        title: 'cargando...',
        html: 'Cargando registros',
        timer: 20000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
            }, 1000)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('Error de conexión con la BD')
        }
    })
}

function cerrarAlert() {
    Swal.close();
}

function registrarProviders() {

    var parametros = {
        "accion": "registrarProvider",
        "nombre": document.getElementById('nameProvider').value,
        "email": document.getElementById('emailProvider').value,
        "contacto": document.getElementById('numberProvider').value,
        "estado": document.getElementById('stateProvider').value
    }

    $.ajax({
        data: parametros,
        url: 'http/provider.controller.php',
        type: 'post',
        beforeSend: function () {
            //mostrar cargando
        },
        success: function (data) {
            console.log(data);
            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Registro exitoso',
                    showConfirmButton: false,
                    timer: 1500
                })
                listarProviders()
            }

        },
        error: function (error) {
            console.log("No se a podido obtener la información " + error);
        }
    })
}

function listarProviders() {
    eliminaFilastablaProviders();

    var tablaProviders = $('#tablaProviders').DataTable();
    tablaProviders.clear();
    tablaProviders.destroy();

    var parametros = {
        "accion": "seleccionarListaProviders"
    };

    $.ajax({
        data: parametros,
        url: 'http/provider.controller.php',
        type: 'post',
        beforeSend: function () {
            cargando()
        },
        success: function (data) {
            //console.log(JSON.parse(data));
            //if(JSON.parse(data).registros == ""){


            for (var i in JSON.parse(data).registros) {

                agregarFilaProviders(
                    JSON.parse(data).registros[i].id,
                    JSON.parse(data).registros[i].nombre,
                    JSON.parse(data).registros[i].email,
                    JSON.parse(data).registros[i].contacto,
                    JSON.parse(data).registros[i].estado,
                    ""

                );
            }

            $('#tablaProviders').DataTable({
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
function eliminaFilastablaProviders() {
    var n = 0;
    $("#tablaProviders tbody tr").each(function () {
        n++;
    });
    for (i = n - 1; i > 1; i--) {
        $("#tablaProviders tbody tr:eq('" + i + "')").remove();

    }
}

function agregarFilaProviders(id, nombre, email, contacto, estado, acciones) {

    if(estado == 1){
        varEstado = '<button class="btn btn-success btn-sm col-8" style="cursor: text">Activo</button>'
    }else if(estado == 0){
        varEstado = '<button class="btn btn-danger btn-sm col-8" style="cursor: text">Inactivo</button>'
    }

    let datosProvider = "'"+id+"', '"+nombre+"', '"+email+"', '"+contacto+"', '"+estado+"' ";

    var htmlTags = `<tr>
    <td> ${id}</td>
    <td> ${nombre}</td>
    <td> ${email}</td>
    <td> ${contacto}</td>
    <td> ${varEstado}</td>
    <td><button data-toggle="modal" data-target="#actualizacionProveedor" class="btn btn-success btn-sm" onclick="tomarDatos(${datosProvider})"><i class="bi bi-pencil-square"></i></button></td>
    </tr>`;

    $("#tablaProviders tbody").append(htmlTags);
}

function tomarDatos(id, nombre, email, contacto, estado){
    document.getElementById('idUpdateProvider').value=id
    document.getElementById('nameUpdateProvider').value=nombre
    document.getElementById('emailUpdateProvider').value=email
    document.getElementById('numberUpdateProvider').value=contacto
    document.getElementById('estadoCompraUpdate').value=estado
}

function actualizarProveedor(){
    let parametros = {
        "accion": "actualizarProvider",
        "id": document.getElementById('idUpdateProvider').value,
        "nombre": document.getElementById('nameUpdateProvider').value,
        "email": document.getElementById('emailUpdateProvider').value,
        "contacto": document.getElementById('numberUpdateProvider').value,
        "estado": document.getElementById('stateUpdateProvider').value
    }

    $.ajax({
        data: parametros,
        url: 'http/provider.controller.php',
        type: 'POST',
        beforeSend: function () {
            //mostrar cargando
        },
        success: function (data) {
            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Proveedor editado con exitoso',
                    showConfirmButton: false,
                    timer: 1500
                })
                listarProviders()
            }
        },
        error: function (error) {
            console.log("No se a podido editar la información " + error);
        }
    })
}
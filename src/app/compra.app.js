
function registrarCompra() {

    var parametros = {
        "accion": "registrarCompra",
        "descripcion": document.getElementById('descripcionCompra').value,
        "cantidad": document.getElementById('cantidadCompra').value,
        "valor": document.getElementById('valorCompra').value,
        "estado": document.getElementById('estadoCompra').value
    }

    $.ajax({
        data: parametros,
        url: 'http/purchasing.controller.php',
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
                listarCompra()
            }

        },
        error: function (error) {
            console.log("No se a podido obtener la información " + error);
        }
    })
}

function listarCompra() {
    eliminaFilastablaCompra();

    var tablaCompra = $('#tablaCompras').DataTable();
    tablaCompra.clear();
    tablaCompra.destroy();

    var parametros = {
        "accion": "seleccionarListaCompra"
    };

    $.ajax({
        data: parametros,
        url: 'http/purchasing.controller.php',
        type: 'post',
        beforeSend: function () {
            cargando()
        },
        success: function (data) {
            //console.log(JSON.parse(data));
            //if(JSON.parse(data).registros == ""){


            for (var i in JSON.parse(data).registros) {

                agregarFilaCompra(
                    JSON.parse(data).registros[i].id,
                    JSON.parse(data).registros[i].descripcion,
                    JSON.parse(data).registros[i].cantidad,
                    JSON.parse(data).registros[i].valor,
                    JSON.parse(data).registros[i].estado

                );
            }

            $('#tablaCompra').DataTable({
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
function eliminaFilastablaCompra() {
    var n = 0;
    $("#tablaCompras tbody tr").each(function () {
        n++;
    });
    for (i = n - 1; i > 1; i--) {
        $("#tablaCompras tbody tr:eq('" + i + "')").remove();

    }
}

function agregarFilaCompra(id, descripcion, cantidad, valor, estado) {

    if(estado == 1){
        varEstado = '<button class="btn btn-success btn-sm col-8" style="cursor: text">Activo</button>'
    }else if(estado == 0){
        varEstado = '<button class="btn btn-danger btn-sm col-8" style="cursor: text">Inactivo</button>'
    }


    let datosProvider = "'"+id+"', '"+descripcion+"', '"+cantidad+"', '"+valor+"', '"+estado+"' ";

    var htmlTags = `<tr>
    <td>${id}</td>
    <td>${descripcion}</td>
    <td>${cantidad}</td>
    <td>${valor}</td>
    <td>Proveedor</td>
    <td>Producto</td>
    <td>${varEstado}</td>
    <td><button data-toggle="modal" data-target="#actualizacionCompra" class="btn btn-success btn-sm" onclick="tomarDatos(${datosProvider})"><i class="bi bi-pencil-square"></i></button></td>
    </tr>`;

    $("#tablaCompras tbody").append(htmlTags);
}

function tomarDatos(id, descripcion, cantidad, valor, estado){
    document.getElementById('idUpdateCompra').value=id
    document.getElementById('descripcionUpdateCompra').value=descripcion
    document.getElementById('cantidadUpdateCompra').value=cantidad
    document.getElementById('valorUpdateCompra').value=valor
    document.getElementById('estadoCompraUpdate').value=estado
}

function actualizarCompra(){
    let parametros = {
        "accion": "actualizarCompra",
        "id": document.getElementById('idUpdateCompra').value,
        "descripcion": document.getElementById('descripcionUpdateCompra').value,
        "cantidad": document.getElementById('cantidadUpdateCompra').value,
        "valor": document.getElementById('valorUpdateCompra').value,
        "estado": document.getElementById('estadoCompraUpdate').value
    }

    $.ajax({
        data: parametros,
        url: 'http/purchasing.controller.php',
        type: 'POST',
        beforeSend: function () {
            //mostrar cargando
        },
        success: function (data) {
            if (JSON.parse(data) == 'ok') {
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Compra editada con exitoso',
                    showConfirmButton: false,
                    timer: 1500
                })
                listarCompra()
            }
        },
        error: function (error) {
            console.log("No se a podido editar la información " + error);
        }
    })
}


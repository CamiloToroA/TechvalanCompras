<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Default | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/support-chat.css" rel="stylesheet" type="text/css" />
    <link href="plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="plugins/charts/chartist/chartist.css" rel="stylesheet" type="text/css">
    <link href="assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">

</head>

<body class="default-sidebar">

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle"> <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                <i class="flaticon-menu-line-2"></i>
            </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none">
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <?php require 'layout/header.php'; ?>
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="sidebar-wrapper sidebar-theme">
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            <?php require 'layout/nav.php'; ?>
        </div>
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3><i class="bi bi-people"></i> Gestión de Clientes</h3>
                    </div>
                </div>
                <!-- Contenido aleatorio por modulos -->
                <div class="card">
                    <div class="container-fluid">
                        <div class=" d-flex justify-content-end p-4">
                            <button class="btn btn-primary " data-toggle="modal" data-target="#registrarCliente">Nuevo
                                Cliente</button>
                        </div>
                        <div class="row" id="cancel-row">
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <div class="table-responsive mb-4">
                                            <table id="tablaClientes"
                                                class="table table-sm table-striped table-hover table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Documento</th>
                                                        <th>Nombre</th>
                                                        <th>Apellidos</th>
                                                        <th>Correo Electrónico</th>
                                                        <th>Teléfono</th>
                                                        <th>Estado</th>
                                                        <th>Contraseña</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="mt-2">
                    <a href="reportes/reporte.clientes.php" target="_blank" class="btn btn-info" role="button">Ver
                        Reporte de Clientes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=" bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <!-- <script src="assets/js/libs/jquery-3.1.1.min.js"></script> -->
    <script src="assets/js/app.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="assets/js/support-chat.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->


    <!-- CONEXIÓN CON JS -->
    <script src="app/clients.app.js"></script>
    <script src="app/validate.js"></script>

    <!-- ALERTAS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JQUERY-->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        listarClientes();
        App.init();
    })
    </script>

    <!-- <script>
        $(document).ready(function() {
            $('#tablaClientes').DataTable();
        });
    </script> -->

    <!-- <script src="assets/js/custom.js"></script> -->
    <script src="plugins/charts/chartist/chartist.js"></script>
    <!-- <script src="plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script> -->
    <!-- <script src="plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script> -->
    <script src="plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="plugins/calendar/pignose/pignose.calendar.js"></script>
    <!-- <script src="plugins/progressbar/progressbar.min.js"></script> -->
    <!-- <script src="assets/js/default-dashboard/default-custom.js"></script> -->
    <script src="assets/js/support-chat.js"></script>



</body>

</html>

<!-- REGISTRAR -->

<form class="modal fade" id="registrarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="exampleModalLabel">Registrar un Cliente</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nombre">Documento</label>
                    <input type="text" name="documento" onkeyup="asignacionClave()" class="form-control"
                        id="documentoCliente">
                    <label for="" id="lbdocumento"></label>
                </div>
                <div class="form-group">
                    <label for="cantidad">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombreCliente">
                </div>
                <div class="form-group">
                    <label for="cantidad">Apellidos</label>
                    <input name="apellidos" type="text" class="form-control" id="apellidosCliente">
                </div>
                <div class="form-group">
                    <label for="cantidad">Correo Electrónico</label>
                    <input name="correo" type="email" class="form-control" id="correoCliente">
                </div>
                <div class="form-group">
                    <label for="cantidad">Contraseña</label>
                    <input name="contraseña" type="email" disabled class="form-control" id="contraseñaCliente">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cantidad">Teléfono</label>
                            <input name="telefono" type="number" class="form-control" id="telefonoCliente">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="cantidad">Estado</label>
                                <select name="apellidos" type="text" class="form-control" id="estadoCliente">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                   
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" onclick="registrarClientes()" data-dismiss="modal"
                                    class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- ACTUALIZAR -->

<div class="modal fade" id="actualizarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Cliente</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="documento" class="form-control" id="idClienteActualizar">
                <div class="form-group">
                    <label for="nombre">Documento</label>
                    <input type="text" name="documento" class="form-control" id="documentoClienteActualizar">
                </div>
                <div class="form-group">
                    <label for="cantidad">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombreClienteActualizar">
                </div>
                <div class="form-group">
                    <label for="cantidad">Apellidos</label>
                    <input name="apellidos" type="text" class="form-control" id="apellidosClienteActualizar">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cantidad">Correo Electrónico</label>
                            <input name="correo" type="email" class="form-control" id="correoClienteActualizar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Contraseña</label>
                        <input name="contraseña" type="email" class="form-control" id="contraseñaClienteActualizar">
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cantidad">Teléfono</label>
                            <input name="telefono" type="number" class="form-control" id="telefonoClienteActualizar">
                            <div class="form-group">
                                <label for="cantidad">Estado</label>
                                <select name="apellidos" type="text" class="form-control" id="estadoClienteActualizar">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" onclick="actualizarCliente()" data-dismiss="modal"
                                    class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tecnovalan | Gestión proveedores</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
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
                        <h3><i class="bi bi-truck"></i> Gestión de Proveedores</h3>
                    </div>
                </div>
                <!-- Contenido aleatorio por modulos -->
                <div class="card">
                    <div class=" d-flex justify-content-end p-4 pr-5">
                        <button class="btn btn-primary " data-toggle="modal" data-target="#registrarProvider">Nuevo Proveedor</button>
                    </div>
                    <div class="container-fluid">
                        <div class="row" id="cancel-row">
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <div class="table-responsive mb-4">
                                            <table id="tablaProviders"
                                                class="table table-sm table-striped table-hover table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Correo Electronico</th>
                                                        <th>Contacto</th>
                                                        <th>Estado</th>
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
                    <a href="reportes/reporte.proveedores.php" target="_blank" class="btn btn-info" role="button">Ver Reporte de Proveedores</a>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="assets/js/support-chat.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->


    <!-- CONEXIÓN CON JS -->
    <script src="app/providers.app.js"></script>

    <!-- ALERTAS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JQUERY-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        listarProviders();
        App.init();
    })
    </script>

</body>

</html>

<div class="modal fade" id="registrarProvider" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Registrar Proveedor</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nameProvider">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Email</label>
                        <input name="contacto" type="text" class="form-control" id="emailProvider">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="cantidad">Contacto</label>
                            <input name="contacto" type="number" class="form-control" id="numberProvider">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Estado</label>
                                <select name="estado" class="form-control" id="stateProvider">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="registrarProviders()" data-dismiss="modal"
                    class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="actualizacionProveedor" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
            </div>
            <div>
            <input name="idUpdate" type="hidden" class="form-control" id="idUpdateProvider">
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nameUpdateProvider">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Email</label>
                        <input name="contacto" type="text" class="form-control" id="emailUpdateProvider">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="cantidad">Contacto</label>
                            <input name="contacto" type="number" class="form-control" id="numberUpdateProvider">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Estado</label>
                                <select name="estado" class="form-control" id="stateUpdateProvider">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="actualizarProveedor()" data-dismiss="modal"class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
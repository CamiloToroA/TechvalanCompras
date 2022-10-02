<?php

require ('http/db/conexion.php');

$query = "SELECT * FROM purchasing_management AS p INNER JOIN providers_management AS pr
            ON p.id_provider = pr.id_provider
            ";
$resultado = mysqli_query($conexion, $query);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tecnovalan | Gestión compras</title>
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
                        <h3><i class="bi bi-bag"></i> Gestión de Compras</h3>
                    </div>
                </div>
                <div class="card">

                </div>
                <!-- Contenido aleatorio por modulos -->
                <div class="card">
                    <div class="container-fluid">
                        <div class="row" id="cancel-row">
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <form class="col-6">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Registrar Compra
                                                    </h5>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nombre">Numero de factura</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Ingrese numero de factura" class="form-control"
                                                        id="descripcionCompra">
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Producto</label>
                                                            <select name="producto" class="form-control"
                                                                id="productoCompra">
                                                                <option value="">Seleccione un producto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="cantidad">Cantidad</label>
                                                        <input name="cantidad" type="number" class="form-control"
                                                            id="cantidadCompra">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="cantidad">Valor total del producto</label>
                                                        <input name="valor" type="number"
                                                            placeholder="Ingrese el valor total" class="form-control"
                                                            id="valorCompra">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Proveedor</label>
                                                        <select name="proveedor" class="form-control"
                                                            id="proveedorCompra">
                                                            <option value="0">Seleccione</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Limpiar</button>
                                                        <button type="button" onclick="registrarCompra()"
                                                            data-dismiss="modal"
                                                            class="btn btn-primary">Registrar</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="card col-6">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td colspan="2">Larry the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Limpiar</button>
                                                        <button type="button" onclick="registrarCompra()"
                                                            data-dismiss="modal"
                                                            class="btn btn-primary">Guardar Compra</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-6">
                                        <div class="row  d-flex justify-content-end">
                                            <div class="p-3 pr-4">
                                                <button class="btn btn-primary " data-toggle="modal"
                                                    data-target="#registrarCompra">Nueva
                                                    Compras</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive mb-4">
                                            <table id="tablaCompras"
                                                class="table table-sm table-striped table-hover table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Descripcion</th>
                                                        <th>Cantidad</th>
                                                        <th>Valor Total</th>
                                                        <th>Proveedor</th>
                                                        <th>Producto</th>
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
    <script src="app/compra.app.js"></script>

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
        listarCompra();
        App.init();
    })
    </script>

</body>

</html>
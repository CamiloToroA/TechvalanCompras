<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Tecno valan - Catálogo</title>
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
  <?php if ($rol == 1) {
    require 'layout/header.php'; ?>
    <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="cs-overlay"></div>
      <div class="sidebar-wrapper sidebar-theme">
        <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
        <?php require 'layout/nav.php'; ?>
      </div>
    <?php } ?>
    
    <?php if ($rol == 0) {

      require 'layout/header.php'; ?>
      <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="sidebar-wrapper sidebar-theme">
          <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
          <?php require 'layout/navuser.php'; ?>
        </div>
      <?php } ?>


    <div id="content" class="main-content">
      <div class="container">
        <div class="page-header">
          <div class="page-title">
            <h1>Catálogo</h1>
          </div>
        </div>
      </div>
      <div id="product-catalog-container" class="container">
        <div class="row">
          <!-- INICIO MOTORES -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Motores</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"></p>
                    <a href="catalogo_apollo_valves.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="apollo-valves" src="assets/img/img_marcas/Apollo_valves.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <!-- INICIO MARCA ABB -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Reductores</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"> </p>
                    <a href="catalogo_abb.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/Abb.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- INICIO MARCA ASHCROFT -->
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Variadores</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"> </p>
                    <a href="catalogo_ashcroft.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/ashcroft.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- INICIO MARCA LOGY-CAL -->
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Insumos Eléctricos</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"> </p>
                    <a href="catalogo_logycal.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/Logy_cal.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- INICIO MARCA BRECOFLEX -->
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Correas</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"> </p>
                    <a href="catalogo_brecoflex.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/brecoflex.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- INICIO MARCA WITTENSTEIN -->
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Poleas</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"> </p>
                    <a href="catalogo_wittenstein.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/Wittenstein.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- INICIO MARCA DANFOSS -->
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Piñones</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"> </p>
                    <a href="catalogo_danfoss.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/Danfoss.png" class="img-fluid"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- INICIO MARCA WATT´S -->
          <!-- --------------------------------------------------------------------------------------------------------------------- -->
          <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-content widget-content-area product-cat1">
                <div class="row mb-4">
                  <div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 order-md-2 col-sm-6 order-sm-1 order-2">
                    <span class="badge badge-success mb-2">Cadenas</span>
                    <h3 class="mb-4">Descripción</h3>
                    <p class="mb-5"></p>
                    <a href="catalogo_watts.php">
                      <button class="btn btn-success">Ver productos</button>
                    </a>
                  </div>
                  <div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 order-md-1 col-sm-6 text-center order-sm-2 order-1 mb-sm-0 mb-4">
                    <!-- <img alt="image-product" src="assets/img/img_marcas/watts.png" class="img-fluid"> -->
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
  <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script>
  <script src="assets/js/custom.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="plugins/charts/chartist/chartist.js"></script>
  <script src="plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script>
  <script src="plugins/calendar/pignose/moment.latest.min.js"></script>
  <script src="plugins/calendar/pignose/pignose.calendar.js"></script>
  <script src="plugins/progressbar/progressbar.min.js"></script>
  <script src="assets/js/default-dashboard/default-custom.js"></script>
  <script src="assets/js/support-chat.js"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>
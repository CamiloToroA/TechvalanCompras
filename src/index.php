<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Tecno valan - Dashboard</title>
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
            <h3>Dashboard</h3>
          </div>
        </div>
        <!-- Contenido aleatorio por modulos -->
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eius officia
            pariatur quae enim sequi neque, nihil porro, voluptatem maxime, quasi perferendis. Fugiat, enim libero! Enim
            minus assumenda voluptate, quidem ut architecto dignissimos. Odit, possimus quaerat. Soluta, impedit
            voluptatem delectus, reprehenderit officiis cupiditate aliquid assumenda quisquam id accusantium magni?
            Nostrum porro molestias quaerat suscipit debitis quod perferendis at quos, vitae placeat error alias animi
            minima obcaecati dolores nulla architecto saepe inventore. Dicta voluptas omnis autem unde cum tenetur
            corporis totam porro cumque dolorum quam esse a non praesentium voluptatibus ea nobis voluptatem facilis
            earum quidem, odit, sed harum explicabo? Doloribus.</div>
          <div class="card-footer">Adios</div>
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
<?php
require('http/db/conexion.php');
?>


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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Clientes</h5>
                <p class="card-text">
                  <canvas id="myChart" width="400" height="400"></canvas>
                  <script>
                    const ctx = document.getElementById('myChart').getContext('2d');
                    const myChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                        labels: [
                          <?php
                          $sql = "SELECT * FROM client_management";
                          $resultado = mysqli_query($conexion, $sql);

                          while ($registros = mysqli_fetch_array($resultado)) {
                          ?> '<?php echo $registros['name_client'] ?>',
                          <?php
                          }
                          ?>
                        ],
                        datasets: [{
                          label: 'Clientes',
                          data: [
                            <?php

                            $consulta = "SELECT * FROM users_management";
                            $result = mysqli_query($conexion, $consulta);

                            while ($regis = mysqli_fetch_array($result)) {
                            ?> '<?php echo $regis['id_user'] ?>',
                            <?php
                            }
                            ?>
                          ],
                          backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                          ],
                          borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                          ],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Proveedores</h5>
                <p class="card-text">
                  <canvas id="myChart2" width="400" height="400"></canvas>
                  <script>
                    const ctx2 = document.getElementById('myChart2').getContext('2d');
                    const myChart2 = new Chart(ctx2, {
                      type: 'bar',
                      data: {
                        labels: [
                          <?php
                          $sql = "SELECT * FROM providers_management";
                          $resultado = mysqli_query($conexion, $sql);

                          while ($registros = mysqli_fetch_array($resultado)) {
                          ?> '<?php echo $registros['id_provider'] ?>',
                          <?php
                          }
                          ?>
                        ],
                        datasets: [{
                          label: 'Proveedores',
                          data: [
                            <?php

                            $consulta = "SELECT * FROM providers_management";
                            $result = mysqli_query($conexion, $consulta);

                            while ($regis = mysqli_fetch_array($result)) {
                            ?> '<?php echo $regis['email_provider'] ?>',
                            <?php
                            }
                            ?>
                          ],
                          backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                          ],
                          borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                          ],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Usuarios</h5>
                <p class="card-text">
                  <canvas id="myChart3" width="400" height="400"></canvas>
                  <script>
                    const ctx3 = document.getElementById('myChart3').getContext('2d');
                    const myChart3 = new Chart(ctx3, {
                      type: 'doughnut',
                      data: {
                        labels: [
                          <?php
                          $sql = "SELECT * FROM users_management";
                          $resultado = mysqli_query($conexion, $sql);

                          while ($registros = mysqli_fetch_array($resultado)) {
                          ?> '<?php echo $registros['name_user'] ?>',
                          <?php
                          }
                          ?>
                        ],
                        datasets: [{
                          label: '# of Votes',
                          data: [
                            <?php

                            $consulta = "SELECT * FROM users_management";
                            $result = mysqli_query($conexion, $consulta);

                            while ($regis = mysqli_fetch_array($result)) {
                            ?> '<?php echo $regis['phone_user'] ?>',
                            <?php
                            }
                            ?>
                          ],
                          backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                          ],
                          borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                          ],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
                </p>
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
  <!-- <script src="plugins/charts/chartist/chartist.js"></script> -->
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
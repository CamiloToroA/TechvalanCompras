<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['correo'])) {
  header('Location: ../login.php');
}
?>

<!-- SWEET ALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  function cerrarSesion() {
    let timerInterval
    Swal.fire({
      title: 'Cerrando Sesión',
      html: 'La sesión se cerrará en <b></b> milisegundos.',
      timer: 1000,
      icon: 'success',
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        location.href = "http/logout.controller.php";
      }
    })
  }
</script>


<header class="header navbar fixed-top navbar-expand-sm">
  <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
  <ul class="navbar-nav flex-row">
  </ul>


  <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
    <li class="nav-item dropdown message-dropdown ml-lg-4">
      <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flaticon-mail-10"></span><span class="badge badge-primary">13</span>
      </a>
      <div class="dropdown-menu  position-absolute" aria-labelledby="messageDropdown">
        <a class="dropdown-item title" href="javascript:void(0);">
          <i class="flaticon-chat-line mr-3"></i><span>You have 13 new messages</span>
        </a>
        <a class="dropdown-item" href="javascript:void(0);">
          <div class="media">
            <div class="usr-img online mr-3">
              <img class="usr-img rounded-circle" src="assets/img/90x90.jpg" alt="Generic placeholder image">
            </div>
            <div class="media-body">
              <div class="mt-0">
                <p class="text mb-0">Browse latest projects...</p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="meta-user-name mb-0">Kara Young</p>
                <p class="meta-time mb-0  align-self-center">1 min ago</p>
              </div>
            </div>
          </div>

          <div class="media">
            <div class="usr-img mr-3">
              <img class="usr-img rounded-circle" src="assets/img/90x90.jpg" alt="Generic placeholder image">
            </div>
            <div class="media-body">
              <div class="mt-0">
                <p class="text mb-0">Design, Development and...</p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="meta-user-name mb-0">Amy Diaz</p>
                <p class="meta-time mb-0  align-self-center">5 mins ago</p>
              </div>
            </div>
          </div>

          <div class="media">
            <div class="usr-img online mr-3">
              <img class="usr-img rounded-circle" src="assets/img/90x90.jpg" alt="Generic placeholder image">
            </div>
            <div class="media-body">
              <div class="mt-0">
                <p class="text mb-0">We can ensure...</p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="meta-user-name mb-0">Shaun Park</p>
                <p class="meta-time mb-0  align-self-center">1 day ago</p>
              </div>
            </div>
          </div>
        </a>

        <a class="footer dropdown-item" href="javascript:void(0);">
          <div class="btn btn-info mb-3 mr-2 btn-rounded"><i class="flaticon-arrow-right mr-3"></i> View more</div>
        </a>
      </div>
    </li>
  </ul>
  <ul class="navbar-nav flex-row ml-lg-auto">
    <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
      <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flaticon-user-12"></span>
      </a>
      <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
        <a class="dropdown-item" href="user_profile.html">
          <i class="mr-1 flaticon-user-6"></i> <span><?php echo $_SESSION['correo']; ?></span>
        </a>
        <div class="dropdown-divider"></div>
        <button onclick="cerrarSesion()" class="dropdown-item" href="#">
          <i class="mr-1 flaticon-power-span"></i><span>Cerrar Sesión</span>
        </button>
      </div>
    </li>
  </ul>
</header>
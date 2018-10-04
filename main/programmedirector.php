<!DOCTYPE html>
<?php
   include('session.php');
?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SPICES merit element
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <div class="simple-text logo-normal">
          SPICES Merit Element
        </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>MAIN</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./club.php">
              <i class="material-icons">content_paste</i>
              <p>Club</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./activity.php">
              <i class="material-icons">library_books</i>
              <p>Activity</p>
            </a>
          </li>
       <!--tutup jap-->
            <!--<li class="nav-item ">
            <a class="nav-link" href="./programmedirector.php">
              <i class="material-icons">person</i>
              <p>Programme Director</p>
            </a>
          </li>-->
          </li>
          <li class="nav-item active-pro ">
                <a class="nav-link" href="logout.php">
                    <i class="material-icons">power_settings_new</i>
                    <p>Logout</p>
                </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="./user.html">Programme Director</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/nazrin.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">PRESIDENT</h6>
                  <h4 class="card-title">Nazrin Haironine</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like KL loves KL I love Rick Owens’ bed design but the back is sakit lah
                  </p>
                  <a href="https://www.facebook.com/nazrin.haironine" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
</body>

</html>

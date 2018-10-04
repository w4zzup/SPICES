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
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
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
          <li class="nav-item active ">
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
            <a class="navbar-brand" href=".tables.html">Club</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!--<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Club List</h4>
                  <p class="card-category"> Here is the club list for UniKL MIIT</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Founder
                        </th>
                        <th>
                          President
                        </th>
                        <th>
                          Fund
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            PERKIM
                          </td>
                          <td>
                            Izzat
                          </td>
                          <td>
                            Nazrin
                          </td>
                          <td class="text-primary">
                            RM10 000
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            BCEM
                          </td>
                          <td>
                            Nazrin
                          </td>
                          <td>
                            Haironine
                          </td>
                          <td class="text-primary">
                            RM100 000
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Rekreasi
                          </td>
                          <td>
                            Haironine
                          </td>
                          <td>
                            Nazrin
                          </td>
                          <td class="text-primary">
                            RM10
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Kosiswa
                          </td>
                          <td>
                            Izzati
                          </td>
                          <td>
                            Muhd
                          </td>
                          <td class="text-primary">
                            RM1000000
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Lepak
                          </td>
                          <td>
                            Siti
                          </td>
                          <td>
                            Zabedah
                          </td>
                          <td class="text-primary">
                            RM60000
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
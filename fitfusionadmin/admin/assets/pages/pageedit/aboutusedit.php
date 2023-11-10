<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
  if(!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin']!=true)
  {
    header("location:../../intershiprepo/projectfiles/login.php");
  }
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../dist/img/logo-removebg-preview.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Fit Fusion</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/admin-pfp.jpeg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Light Developer</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../../index.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard </p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
          <a href="../../../gallery.php" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Pages
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../pageedit/homeedit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
                </li>
              
                <li class="nav-item">
                  <a href="../pageedit/sportsedit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sports</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../pageedit/profileedit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="../pageedit/aboutusedit.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About us</p>
                  </a>
                </li>
                <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                NUTRITION
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pageedit/lossedit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LOOSE WEIGHT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pageedit/maintainedit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MAINTAIN WEIGHT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pageedit/gainedit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>GAIN WEIGHT</p>
                </a>
              </li>
             
            </ul>
          </li> 
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About us and Contact us </h3>
                </div>
                <?php
                include("../../../dbcontroller.php");
                $db = new dbcontroller;
                $aboutusquery = "SELECT * FROM `aboutus` WHERE `sr_no`='1'";
                $aboutusqueryresult = mysqli_query($db->conn, $aboutusquery);
                if ($aboutusqueryresult) {
                  $aboutus_data = mysqli_fetch_assoc($aboutusqueryresult);
                }
                ?>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Change About us  Paragraph </label>
                      <br>
                      <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="welcome-para" placeholder="New slogan "> -->
                      <textarea style="min-height:100px;max-height : 100px; max-width:400px; min-width: 400px;"
                        id="exampleInputEmail1" name="welcome-para" rows="5"
                        cols="100"><?php echo $aboutus_data['contactus_para']; ?></textarea>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Add sport type</label>
                      <input type="text" class="form-control" name="sport-type" placeholder="sport type "required>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputFile">Branch Address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="contactus-address"
                        placeholder="Address" value="<?php echo $aboutus_data['address']; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Website mail</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="contactus-mail"
                        placeholder="Mail" value="<?php echo $aboutus_data['mail']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                      <input type="number" class="form-control" name="contactus-contact" placeholder="Phone number"
                        value="<?php echo $aboutus_data['phone_number']; ?>" required>
                    </div>
                  </div>
                  <div class="card-footer">

                    <input class="btn btn-primary" type="submit" name="submit">
                  </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                  $para = $_POST['welcome-para'];
                  $address = $_POST['contactus-address'];
                  $mail = $_POST['contactus-mail'];
                  $phone_number = $_POST['contactus-contact'];
                  $updatequery="UPDATE `aboutus` SET `contactus_para`='$para',`address`='$address',`mail`='$mail',`phone_number`='$phone_number' WHERE `sr_no`=1";
                  $updatequeryresult=mysqli_query($db->conn,$updatequery);
                  if($updatequeryresult)
                  {
                    if(mysqli_affected_rows($db->conn)>0){
                      echo "<style>
                            .custom-alert {
                                    text-align: center;
                                    font-size: 14px;
                                    background-color: #DBE3E6;
                              padding: 10px; /* Add some padding to the alert */
                            }

                                    .custom-alert h1 {
                                    font-family: 'Pacifico', cursive;
                                    font-size: 6em;
                                    color: #252E40;
                                    line-height: 2.0em;
                                    }

                                    .custom-alert button {
                                    background-color: #F16669;
                                    border: none;
                                    padding: 15px 20px;
                                    color: white;
                                    font-size: 2em;
                                    margin-top: 40px;
                                            transition: 1s;
                                    cursor: pointer;
                                    border-radius: 4px;
                                    }

                                    .custom-alert button:hover {
                                    background-color: darken(#F16669, 30);
                                    }
                                </style>";


                          // Display a success message using SweetAlert
                          echo "<script>
                              // Function to display a success message
                                        function showSuccessMessage() {
                                            Swal.fire({
                                                title: 'Success!',
                                                text: 'Details for About us page has successfully been changed.',
                                                icon: 'success',
                                                confirmButtonText: 'OK',
                                                allowOutsideClick: false,
                                                allowEscapeKey: false,
                                                allowEnterKey: false
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Redirect to the desired page
                                                    window.location.href = 'aboutusedit.php'; // Change 'new_page.php' to the actual URL
                                                }
                                            })
                                            }
                                showSuccessMessage();</script>";
                    }
                  }
                }
                ?>


              </div>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">ABOUT US </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">

            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php
include("dbcontroller.php");
global $db;
$GLOBALS['db'] = new dbcontroller;
$error = false;
$n = true;
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Gallery</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="assets/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

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

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="assets/dist/img/logo-removebg-preview.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin Fit Fusion</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="assets/dist/img/admin-pfp.jpeg" class="img-circle elevation-2" alt="User Image">
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
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
          <a href="gallery.php" class="nav-link active">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="assets/pages/pageedit/homeedit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Home</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/pages/pageedit/sportsedit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sports</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/pages/pageedit/profileedit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profile</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/pages/pageedit/membershipedit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Membership</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/pages/pageedit/aboutusedit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>About us</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/pages/pageedit/nutritionedit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Nutrition</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Gallery</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Background images</h4>
                </div>
                <div class="card-body">
                  <div>
                    <div class='filter-container p-0 row' style="height:300px !important;">
                      <style>
                        .image-container {
                          justify-content: center;
                          align-items: center;
                          margin: 0 auto;
                        }

                        .image-text {
                          position: absolute;
                          top: 50%;
                          left: 50%;
                          transform: translate(-50%, -50%);
                          background-color: rgba(0, 0, 0, 0.7);
                          color: white;
                          padding: 10px;
                          font-size: 14px;
                          opacity: 0;
                          transition: opacity 0.3s ease;
                        }

                        .image-container:hover .image-text {
                          opacity: 1;
                        }
                      </style>
                      <?php
                      $query = "SELECT * FROM `background_images`";
                      $query_result = mysqli_query($GLOBALS['db']->conn, $query);
                      if ($query_result) {
                        while ($bg_data = mysqli_fetch_assoc($query_result)) {
                          echo "
                        <div class='filtr-item col-sm-2' data-category='1' data-sort='white sample'>
                          <form action='$_SERVER[PHP_SELF]' method='post'>
                            <button type='submit' name='$bg_data[page_name]'>
                              <div class='image-container'>
                                <img src='../../intershiprepo/assets/$bg_data[bg_name]'
                                  class='img-fluid mb-2' alt='$bg_data[page_name]' style='height:250px; width:250px; background-size:relative;'  />
                                <p class='image-text'>Change</p>
                              </div>
                              
                            </button>
                            <h4>$bg_data[page_name]<br> Background image </h4>
                          </form>
                        </div>
                     
                      ";
                        }
                      }
                      $query2 = "SELECT * FROM `background_images`";
                      $query_result2 = mysqli_query($GLOBALS['db']->conn, $query2);
                      if ($query_result2) {
                        $found = false;
                        while (($bg_data = mysqli_fetch_assoc($query_result2)) && $found == false) {
                          $p_name = $bg_data['page_name'];
                          if (isset($_POST[$p_name])) {
                            echo "<div class='message-popup' id='messagePopup'  style='opacity:1;pointer-events: auto;''>
                            <div class='message-content'>
                            <form action='$_SERVER[PHP_SELF]' method='post' enctype='multipart/form-data'>
                            <h3>Uplaod new Background image for $p_name page:</h3><br>
                            <input type='file' name='bg_pic' class='input-field' id='img' accept='image/**' onchange='checkFileSize()'>
                            <br><br>
                                <input type='submit' value='Cancel' name='cancel$p_name'  style = 'text-decoration:none; color:white;' >
                                <input type='submit' value='Upload' name='confirm$p_name'  style = 'text-decoration:none; color:white; background-color:red;' >
                                
                                </form>
                                </div>
                            </div>";
                            $found = true;
                          }
                        }
                      }

                      $query3 = "SELECT * FROM `background_images`";
                      $query_result3 = mysqli_query($GLOBALS['db']->conn, $query3);
                      if ($query_result3) {

                        while ($bg_datay = mysqli_fetch_assoc($query_result3)) {
                          if (isset($_POST['confirm' . $bg_datay['page_name']])) {
                            $targetDirectory = "../../intershiprepo/assets/";
                            $targetFile = $targetDirectory . basename($_FILES["bg_pic"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                            if ($error === false && isset($_FILES['bg_pic']['tmp_name']) && is_uploaded_file($_FILES['bg_pic']['tmp_name'])) {
                              $check = getimagesize($_FILES["bg_pic"]["tmp_name"]);
                              if ($check === false && $error === false) {
                                $bg_msg = "File is not an image.";
                                $n = false;
                                $error = true;
                              }

                              // Check file size
                              if ($_FILES["bg_pic"]["size"] > 5000000 && $error === false) {
                                $bg_msg = "Sorry, your file is too large.";
                                $n = false;
                                $error = true;
                              }

                              // Allow certain file formats
                              if (
                                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" && $error === false
                              ) {
                                $bg_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $n = false;
                                $error = true;
                              }

                            } else if ($error === false) {
                              $bg_msg = "Please Upload Profile Photo for your Account";
                              $n = false;
                              $error = true;
                            }
                          }
                        }
                      }
                      $query4 = "SELECT * FROM `background_images`";
                      $query_result4 = mysqli_query($GLOBALS['db']->conn, $query4);
                      if ($query_result4) {
                        // $i=mysqli_num_rows($query_result4);
                        while ($bg_datax = mysqli_fetch_assoc($query_result4)) {
                          // if($bg_datax=mysqli_fetch_assoc($query_result4)){
                          if (isset($_POST['confirm' . $bg_datax['page_name']])) {
                            $path = "../../intershiprepo/assets/";
                            $filename = $path . basename($bg_datax['bg_name']); // Replace with the actual path to your image file
                            if (file_exists($filename)) {
                              echo $filename;
                              if (unlink($filename)) {
                                $targetDir = "../../intershiprepo/assets/"; // Change this to the desired upload directory
                                $bg_pic = $_FILES["bg_pic"]["name"]; // Change this to your custom name (without file extension)
                                $targetFile = $targetDir . $bg_pic; // Remove . "." . $fileExtension;
                                if (move_uploaded_file($_FILES["bg_pic"]["tmp_name"], $targetFile)) {
                                  $bg_picquery = "UPDATE `background_images` set `bg_name`='$bg_pic' WHERE `page_name`='$bg_datax[page_name]'";
                                  $bg_picqueryresult = mysqli_query($GLOBALS['db']->conn, $bg_picquery);
                                  if (mysqli_affected_rows($GLOBALS['db']->conn) == 1) {
                                    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
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
                                    echo "<script>
                                // Function to display a success message
                                          function showSuccessMessage() {
                                              Swal.fire({
                                                  title: 'Success!',
                                                  text: 'New Background image has successfully been set for the $bg_datax[page_name] page.',
                                                  icon: 'success',
                                                  confirmButtonText: 'OK',
                                                  allowOutsideClick: false,
                                                  allowEscapeKey: false,
                                                  allowEnterKey: false
                                              }).then((result) => {
                                                  if (result.isConfirmed) {
                                                      // Redirect to the desired page
                                                      window.location.href = 'gallery.php'; // Change 'new_page.php' to the actual URL
                                                  }
                                              })
                                              }
                                  showSuccessMessage();</script>";

                                  }
                                }
                              }
                            } 
                            else {
                              $targetDir = "../../intershiprepo/assets/"; // Change this to the desired upload directory
                              $bg_pic = $_FILES["bg_pic"]["name"]; // Change this to your custom name (without file extension)
                              $targetFile = $targetDir . $bg_pic; // Remove . "." . $fileExtension;
                              if (move_uploaded_file($_FILES["bg_pic"]["tmp_name"], $targetFile)) {
                                echo "heloooooooooooooooooooooooooooooooooooovvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv";

                                $bg_picquery = "UPDATE `background_images` set `bg_name`='$bg_pic' WHERE `page_name`='$bg_datax[page_name]'";
                                $bg_picqueryresult = mysqli_query($GLOBALS['db']->conn, $bg_picquery);
                                if (mysqli_affected_rows($GLOBALS['db']->conn) == 1) {
                                  echo "heloooooooooooooooooooooooooooooooooooozzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";

                                  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
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
                                  echo "<script>
                                // Function to display a success message
                                          function showSuccessMessage() {
                                              Swal.fire({
                                                  title: 'Success!',
                                                  text: 'New Background image has successfully been set for the $bg_datax[page_name] page.',
                                                  icon: 'success',
                                                  confirmButtonText: 'OK',
                                                  allowOutsideClick: false,
                                                  allowEscapeKey: false,
                                                  allowEnterKey: false
                                              }).then((result) => {
                                                  if (result.isConfirmed) {
                                                      // Redirect to the desired page
                                                      window.location.href = 'gallery.php'; // Change 'new_page.php' to the actual URL
                                                  }
                                              })
                                              }
                                  showSuccessMessage();</script>";

                                }
                              }
                            }
                          }
                        }
                      }

                      ?>
                    

              </div>
                    </div>
          </div>
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
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>
  <!-- Filterizr-->
  <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({ gutterPixels: 3 });
      $('.btn[data-filter]').on('click', function () {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
</body>
<script>
  function checkFileSize() {
    var fileInput = document.getElementById('img');
    var maxSize = 10 * 1024 * 1024; // 2 MB in bytes

    if (fileInput.files.length > 0) {
      var fileSize = fileInput.files[0].size;

      if (fileSize > maxSize) {
        alert('File size exceeds the limit of 10 MB.');
        fileInput.value = ''; // Clear the selected file
      }
    }
  }
</script>

</html>
<style>
  .error {
    position: absolute;
    top: -110%;
    left: 31%;
    padding: 1% 20%;
    border-radius: 3px;
    background-color: #FDCAC4;
    color: #ED6160;
    display: none;
  }

  .error::before {
    content: "";
    width: 0;
    height: 0;
    border-left: 9px solid transparent;
    border-right: 9px solid transparent;

    border-top: 9px solid #FDCAC4;
    position: absolute;
    bottom: -21%;
    left: 10%;
  }

  .error:nth-child(2) {
    top: 70px;
    background-color: #D9F0FD;
  }

  .error:nth-child(2)::before {
    border-top: 9px solid #D9F0FD;
  }

  .error:nth-child(3) {
    top: 140px;
    padding: 1% 18%;
    background-color: #6DFFA7;
  }

  .error:nth-child(3)::before {
    border-top: 9px solid #6DFFA7;
  }

  .error:nth-child(4) {
    top: 210px;
    background-color: #ffd866;
  }

  .error:nth-child(4)::before {
    border-top: 9px solid #ffd866;
  }

  .message-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 999;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
  }

  .message-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  .message-content h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .message-content p {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .message-content input {
    padding: 10px 20px;
    border: none;
    background-color: #242222;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    align-items: right;
  }
</style>
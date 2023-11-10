<?php
include("../../../dbcontroller.php");
global $db;
$GLOBALS['db'] = new dbcontroller;
global $toedit;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

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
              <a href="#" class="nav-link">
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
                  <a href="../pageedit/sportsedit.php" class="nav-link active">
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
                  <a href="../pageedit/aboutusedit.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About us</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Nutrition
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../pageedit/gainedit.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Weight gain diet</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../pageedit/lossedit.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Weight loss diet</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../pageedit/maintainedit.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Weight maintain diet</p>
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

            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Currently availabe sports</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <!-- <table class="table table-hover text-nowrap">

                <thead>
                  <tr>
                    <th>SPORT NAME</th>
                    <th>SPORT TYPE</th>
                    <th>SPORT IMAGE </th>
                    <th>SPORT DISCRIPTION</th>
                    <th>Benifit 1</th>
                    <th>Benifit 2</th>
                    <th>Benifit 3</th>

                  </tr>
                </thead>
                <tbody>
                  <?php

                  $query = "SELECT * FROM `sports_details`";
                  $result = mysqli_query($GLOBALS['db']->conn, $query);
                  if ($result) {
                    while (($values = mysqli_fetch_assoc($result)) > 0) {
                      echo "
                        
                        <tr>
                      <td>", $values['sport_name'], "</td>
                     
                      <td>", $values['sport_image'], "</td>
                      <td>", $values['sport_discription'], "  </td>
                      <td>", $values['benifit_1'], "</td>
                      <td>", $values['benifit_2'], "</td>
                      <td>", $values['benifit_3'], "</td>

                    </tr>";
                    }
                  } else {
                    echo ("cannot fetch data");
                  }
                  ?>
                </tbody>
              </table> -->
              <table class="table table-hover" style="table-layout: auto; width: 100%">

                <thead>
                  <tr>
                    <th>SPORT NAME</th>
                    <th>SPORT IMAGE</th>
                    <th>SPORT DISCRIPTION</th>
                    <th>Benifit 1</th>
                    <th>Benifit 2</th>
                    <th>Benifit 3</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $query = "SELECT * FROM `sports_details`";
                  $result = mysqli_query($GLOBALS['db']->conn, $query);
                  if ($result) {
                    while ($values = mysqli_fetch_assoc($result)) {
                      $imgpath = '../../../../../intershiprepo/assets/' . $values['sport_image'];
                      echo "
        <tr>
          <td>$values[sport_name]</td>
          <td><img src ='$imgpath' height='50px' width ='50px'</td>
          <td>$values[sport_discription]</td>
          <td>$values[benifit_1]</td>
          <td> $values[benifit_2]</td>
          <td>$values[benifit_3]</td>
          <td><form action='$_SERVER[PHP_SELF]' method='post'><button type='submit' name='delete$values[sport_name]' style='background-color:red;color:white;border:red;border-radius:5px;'>Delete</button></form></td>
        </tr>";
                    }
                  } else {
                    echo ("Cannot fetch data");
                  }
                  ?>
                </tbody>

              </table>




            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->

        </div>

      </div>
      <!-- /.content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row" style="display:flex;">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ADD NEW SPORTS </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="membershipedit.php" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Add sport name </label>
                      <input type="text" class="form-control" name="sport-name" placeholder="sport name  " required>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Add sport type</label>
                      <input type="text" class="form-control" name="sport-type" placeholder="sport type "required>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputFile">Add sport image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="sport-image" class="custom-file-input" id="exampleInputFile"
                            required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">2 to 3 line discription </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sport-discription"
                        placeholder="discription " required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Add sport Benifit 1 </label>
                      <input type="text" class="form-control" name="sport-benifit-1" placeholder="sport benifit"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Add sport Benifit 2 </label>
                      <input type="text" class="form-control" name="sport-benifit-2" placeholder="sport benifit"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Add sport Benifit 3 </label>
                      <input type="text" class="form-control" name="sport-benifit-3" placeholder="sport benifit"
                        required>
                    </div>
                  </div>
                  <div class="card-footer">

                    <input class="btn btn-primary" type="submit" name="submit">
                  </div>
                </form>




              </div>
              <?php
              // Initialize database connection
// Assuming you have something like $GLOBALS['db'] = new Database(); to establish the connection
// Replace it with your actual database connection code
              
              if (isset($_POST['submit'])) {

                $sportname = $_POST['sport-name'];
                // $sporttype = $_POST['sport-type'];
                $sportdiscription = $_POST['sport-discription'];
                $sport_benifit_1 = $_POST['sport-benifit-1'];
                $sport_benifit_2 = $_POST['sport-benifit-2'];
                $sport_benifit_3 = $_POST['sport-benifit-3'];
                $orgfile = $_FILES["sport-image"]["name"];
                if ($_FILES["sport-image"]["name"] == null) {
                  echo "<div class='alert alert-danger' role='alert'>
          Please choose a file first
          </div>";
                } else {
                  // Handle file upload  
                  $targetDirectory = "../../../../../intershiprepo/assets/"; // Change this to your desired directory
                  $targetFile = $targetDirectory . basename($_FILES["sport-image"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                  // Check if image file is a actual image or fake image
                  if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["sport-image"]["tmp_name"]);
                    if ($check !== false) {
                      // echo "File is an image - " . $check["mime"] . ".";
                      $uploadOk = 1;
                    } else {
                      echo "<div class='alert alert-danger' role='alert'>
            File is not an image please check your file 
        </div>";
                      $uploadOk = 0;

                    }
                  }

                  // Check if file already exists
                  if (file_exists($targetFile)) {
                    echo "<div class='alert alert-danger' role='alert'>
      File already exists
  </div>";
                    echo "<script>setTimeout(function ()
      {
        window.location.href='membershipedit.php'
      },10000)</script>";
                    $uploadOk = 0;
                  }

                  // Check file size
                  //   if ($_FILES["sport-image"]["size"] > 500000) {
                  //     echo "<div class='alert alert-danger' role='alert'>
                  //     File is too large to upload..!
                  // </div>";
                  //       $uploadOk = 0;
                  //   }
              
                  // Allow certain file formats
                  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo "<div class='alert alert-danger' role='alert'>
         Only JPG, JPEG, PNG & GIF files are allowed.
  </div>";
                    $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                    echo "<div class='alert alert-danger' role='alert'>
      There was an error occured while uploading file 
</div>";

                  } else {
                    if (move_uploaded_file($_FILES["sport-image"]["tmp_name"], $targetFile)) {
                      // echo "The file ". htmlspecialchars(basename( $_FILES["sport-image"]["name"])). " has been uploaded.";
                    } else {
                      echo "<div class='alert alert-danger' role='alert'>
          There was an error occured while uploading file 
    </div>";

                      echo "<script>setTimeout(function ()
    {
      window.location.href='membershipedit.php'
    },10000)</script>";
                    }
                  }

                  // Insert data into the database
                  $insert_query = "INSERT INTO `sports_details` (`sport_name`, `sport_image`, `sport_discription`,`benifit-1`,`benifit-2`,`benifit-3`) VALUES ('$sportname', '$orgfile','$sportdiscription','$sport_benifit_1','$sport_benifit_2','$sport_benifit_3')";
                  $result = mysqli_query($GLOBALS['db']->conn, $insert_query);
                  if ($result) {
                    echo "<div class='alert alert-success' role='alert'>
                  Sport Added Successfully..!
              </div>";
                  } else if (!$result) {
                    echo "<div class='alert alert-danger' role='alert'>
                  An error occurred while adding the sport.
              </div>";

                  } else {
                    echo "<script>setTimeout(function ()
      {
        window.location.href='membershipedit.php'
      },10000)</script>";
                  }
                }
              }
              ?>
              <?php
              $query1 = "SELECT * FROM `sports_details`";
              $result1 = mysqli_query($GLOBALS['db']->conn, $query1);
              if ($result1) {
                while ($values = mysqli_fetch_assoc($result1)) {
                  $sprt=$values['sport_name'];
                  if (isset($_POST['delete'.$sprt])) {
                    $checktoppics = "SELECT * FROM `top_pics` WHERE `sport_name`='$sprt'";
                    $checktoppicsresult = mysqli_query($GLOBALS['db']->conn, $checktoppics);
                    if ($checktoppicsresult) {
                      if (mysqli_num_rows($checktoppicsresult) >0) {
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
                                    // Function to display an error message
                                    function showErrorMessage() {
                                        Swal.fire({
                                            title: 'Error!',
                                            text: 'This sport is a part of top pics to delete this sport please update top pics first.',
                                            icon: 'error',
                                            confirmButtonText: 'OK',
                                            allowOutsideClick: false,
                                            allowEscapeKey: false,
                                            allowEnterKey: false
                                        }).then((result) => {
                                            // You can add additional actions here if needed
                                        });
                                    }
                                    showErrorMessage();
                                    </script>";
                      } else {
                        $deletequery = "DELETE FROM `sports_details` WHERE `sport_name` = '$sprt'";
                        $deletequeryresult = mysqli_query($GLOBALS['db']->conn, $deletequery);
                        if ($deletequeryresult) {
                          echo"grennnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
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
                                                text: '$values[sport_name] is deleted successfully.',
                                                icon: 'success',
                                                confirmButtonText: 'OK',
                                                allowOutsideClick: false,
                                                allowEscapeKey: false,
                                                allowEnterKey: false
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Redirect to the desired page
                                                    window.location.href = 'sportsedit.php'; // Change 'new_page.php' to the actual URL
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


            <!-- /.card-body -->




            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <!-- <h3 class="card-title">ADD NEW SPORTS </h3> -->
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <form action="sportsedit.php" method="post" enctype="multipart/form-data">
                        <label>Modify Sport Details</label>
                        <select class="form-control" name="sport">
                          <?php
                          $query = "SELECT `sport_name` FROM `sports_details`";
                          $result = mysqli_query($GLOBALS['db']->conn, $query);
                          if ($result) {
                            while (($data = mysqli_fetch_assoc($result)) > 0) {
                              echo "
                            <option value = '$data[sport_name]'>$data[sport_name]</option>";
                            }

                          }
                          ?>
                        </select>
                        <input type="submit" class='btn btn-primary' style='bacground-color:white' name="sportconfirm"
                          value="Confirm">
                      </form>
                      <?php
                      if (isset($_POST['sportconfirm'])) {
                        $GLOBALS['toedit'] = $_POST['sport'];
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="sportsedit.php" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <?php
                    $query = "SELECT * FROM `sports_details`";
                    $result = mysqli_query($GLOBALS['db']->conn, $query);
                    if ($result) {
                      while (($data = mysqli_fetch_assoc($result)) > 0) {
                        if ($GLOBALS['toedit'] == $data['sport_name']) {


                          echo "
                           
                      <input type='text' class='form-control' name='real_sport-name' value = '$data[sport_name]' placeholder='sport name' required hidden>
                            <div class='form-group'>
                            
                      <label for='exampleInputEmail1'> Modify sport name </label>
                      <input type='text' class='form-control' name='sport-name' value = '$data[sport_name]' placeholder='sport name' required>
                    </div>
                   
                    <div class='form-group'>
                      <label for='exampleInputFile'>Modify sport image</label>
                      <div class='input-group'>
                        <div class='custom-file'>
                          <input type='file' name='sport-image' class='custom-file-input' id='exampleInputFile' >
                          <label class='custom-file-label' for='exampleInputFile'>Choose file</label>
                        </div>
                        <div class='input-group-append'>

                        </div>
                      </div>
                    </div>
                    <input type='text' name='sport-og-image' class='custom-file-input' id='exampleInputFile'value='$data[sport_image]' hidden >

                    <div class='form-group'>
                      <label for='exampleInputEmail1'>2 to 3 line discription </label>
                      <input type=text' class='form-control' id='exampleInputEmail1' name='sport-discription' value = '$data[sport_discription]'
                        placeholder='discription' required>
                    </div>
                    
                    <div class='form-group''>
                      <label for='exampleInputEmail1'>Modify sport Benifit 1 </label>
                      <input type='text' class='form-control' name='sport-benifit-1' value = '$data[benifit_1]' placeholder='sport benifit required>
                    </div>
                  
                    <div class='form-group''>
                    <label for='exampleInputEmail1'>Modify sport Benifit 2 </label>
                    <input type='text' class='form-control' name='sport-benifit-2' value = '$data[benifit_2]' placeholder='sport benifit required>
                  </div>
                  <div class='form-group''>
                  <label for='exampleInputEmail1'>Modify sport Benifit 2 </label>
                  <input type='text' class='form-control' name='sport-benifit-3' value = '$data[benifit_3]' placeholder='sport benifit required>
                </div>
                <div class='card-footer'>

                    <input class='btn btn-primary' type='submit' name='modifysubmit'>
                  </div>";
                        }
                      }
                    }
                    ?>

                  </div>
                  <?php
                  // Initialize database connection
// Assuming you have something like $GLOBALS['db'] = new Database(); to establish the connection
// Replace it with your actual database connection code
                  
                  if (isset($_POST['modifysubmit'])) {

                    $sportname = $_POST['sport-name'];
                    $realsportname = $_POST['real_sport-name'];
                    // $sporttype = $_POST['sport-type'];
                    $sportdiscription = $_POST['sport-discription'];
                    $sport_benifit_1 = $_POST['sport-benifit-1'];
                    $sport_benifit_2 = $_POST['sport-benifit-2'];
                    $sport_benifit_3 = $_POST['sport-benifit-3'];
                    $orgfile = $_FILES["sport-image"]["name"];
                    if ($_FILES["sport-image"]["name"] == null) {
                      $orgfile = $_POST['sport-og-image'];
                      // $getimg = "SELECT `sport_image` FROM `sports_details`";
                      // $isimg = mysqli_query($GLOBALS['db']->conn, $getimg);
                      // if ($isimg) {
                      //   while (($gotimg = mysqli_fetch_assoc($isimg)) > 0) {
                      //     $orgfile = $gotimg['sport_image'];
                  
                      //   }
                  
                    } else {
                      echo "<div class='alert alert-success' role='alert'>
        An error occured while uploading photo!
       
      </div>";
                    }

                    if ($_FILES["sport-image"]["name"] != null) {


                      // Handle file upload  
                      $targetDirectory = "../../../../../intershiprepo/assets/"; // Change this to your desired directory
                      $targetFile = $targetDirectory . basename($_FILES["sport-image"]["name"]);
                      $uploadOk = 1;
                      $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                      // Check if image file is a actual image or fake image
                      if (isset($_POST["modifysubmit"])) {
                        $check = getimagesize($_FILES["sport-image"]["tmp_name"]);
                        if ($check !== false) {
                          // echo "File is an image - " . $check["mime"] . ".";
                          $uploadOk = 1;
                        } else {
                          echo "<div class='alert alert-danger' role='alert'>
            File is not an image please check your file 
        </div>";
                          $uploadOk = 0;

                        }
                      }

                      // Check if file already exists
                      //   if (file_exists($targetFile)) {
                      //     echo "<div class='alert alert-danger' role='alert'>
                      //     File already exists
                      // </div>";
                      //   echo "<script>setTimeout(function ()
                      //     {
                      //       window.location.href='membershipedit.php'
                      //     },10000)</script>"; 
                      //       $uploadOk = 0;
                      //   }
                  
                      // Check file size
                      //   if ($_FILES["sport-image"]["size"] > 500000) {
                      //     echo "<div class='alert alert-danger' role='alert'>
                      //     File is too large to upload..!
                      // </div>";
                      //       $uploadOk = 0;
                      //   }
                  
                      // Allow certain file formats
                      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        echo "<div class='alert alert-danger' role='alert'>
         Only JPG, JPEG, PNG & GIF files are allowed.
  </div>";
                        $uploadOk = 0;
                      }

                      // Check if $uploadOk is set to 0 by an error
                      if ($uploadOk == 0) {
                        echo "<div class='alert alert-danger' role='alert'>
      There was an error occured while uploading file 
</div>";

                      } else {
                        if (move_uploaded_file($_FILES["sport-image"]["tmp_name"], $targetFile)) {
                          // echo "The file ". htmlspecialchars(basename( $_FILES["sport-image"]["name"])). " has been uploaded.";
                        } else {
                          echo "<div class='alert alert-danger' role='alert'>
          There was an error occured while uploading file 
    </div>";

                          echo "<script>setTimeout(function ()
    {
      window.location.href='membershipedit.php'
    },10000)</script>";
                        }
                      }
                    }

                    // Insert data into the database
                    $update_query = "UPDATE `sports_details` SET `sport_name`='$sportname',`sport_image`='$orgfile',`sport_discription`='$sportdiscription',`benifit_1`='$sport_benifit_1',`benifit_2`='$sport_benifit_2',`benifit_3`='$sport_benifit_3' WHERE `sport_name`='$realsportname'";
                    $updateresult = mysqli_query($GLOBALS['db']->conn, $update_query);
                    if ($updateresult) {
                      echo "<div class='alert alert-success' role='alert'>
                  Sport Added Successfully..!
              </div>";
                    } else if (!$updateresult) {
                      echo "<div class='alert alert-danger' role='alert'>
                  An error occurred while adding the sport.
              </div>";

                    } else {
                      echo "<script>setTimeout(function ()
      {
        window.location.href='membershipedit.php'
      },10000)</script>";
                    }
                  }

                  ?>


                </form>



              </div>
            </div>
            <!-- /.card -->
          </div>
      </section>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

  </div>

  <!-- Your HTML form goes here -->

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

</body>

</html>
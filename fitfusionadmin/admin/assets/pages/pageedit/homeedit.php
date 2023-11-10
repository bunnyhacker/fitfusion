<?php
include("../../../dbcontroller.php");
$con = new dbcontroller();
$fetchquery = "SELECT * FROM `homepage` where `theme_no`=1;";
$result = mysqli_query($con->conn, $fetchquery);
$data = mysqli_fetch_assoc($result);
?>
  <?php
  session_start();
  if(!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin']!=true)
  {
    header("location:../../intershiprepo/projectfiles/login.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                  <a href="../pageedit/homeedit.php" class="nav-link active">
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
                  <a href="../pageedit/aboutusedit.php" class="nav-link">
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
              <h1>General Form</h1>
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
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">EDIT HOME PAGE</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form style="width:max-content;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputFile">Change wesbsite logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="web-logo" class="custom-file-input" id="exampleInputFile"
                            accept="image/**">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Change Slogan </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="web-slogan"
                        placeholder="New slogan " value="<?php echo $data['slogan']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Change Welcome line </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="welcome-line"
                        placeholder="New welcome line " value="<?php echo $data['welcome_line']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Change Welcome Paragraph </label>
                      <br>
                      <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="welcome-para" placeholder="New slogan "> -->
                      <textarea style="min-height:100px;max-height : 100px; max-width:400px; min-width: 400px;"
                        id="exampleInputEmail1" name="welcome-para" rows="5"
                        cols="100"><?php echo $data['welcome_paragraph']; ?></textarea>
                    </div>
                    <strong>
                      <p>current top pics </p>
                    </strong>
                    <div class="top-pics" style="display:flex;">
                      <div class="form-group">
                        <div class="form-check">

                          <?php

                          $db = new dbcontroller();
                          $query = "SELECT * FROM `top_pics`";
                          $result = mysqli_query($db->conn, $query);
                          if ($result) {
                            while (($data = mysqli_fetch_assoc($result)) > 0) {
                              echo "
                       
                            <label class='form-check-label'>$data[sport_name]&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>";
                            }
                          } else {
                            echo "<h3>An Error occured</h3>";
                          }

                          ?>

                        </div>
                      </div>
                    </div>
                    <strong>
                      <p>Modify Top pics </p>
                    </strong>
                    <div class="top-pics" style="display:flex;">
                      <div class="form-group">
                        <div class="form-check">
                          <?php
                          $query = "SELECT * FROM `sports_details`";
                          $result = mysqli_query($db->conn, $query);
                          
                          
                          if ($result ) {
                            $i = 0;
                            
                            while (($data = mysqli_fetch_assoc($result)) > 0) {
                              $isprinted=false;
                              $query2 = "SELECT * FROM `top_pics`";
                              $result2 = mysqli_query($db->conn, $query2);
                              while (($data2 = mysqli_fetch_assoc($result2)) > 0) {
                                
                                if ($data['sport_name'] == $data2['sport_name']) {
                                  echo "
                                    <input class='three-top-pics' id='form-check-input' name='sport_name[]' value = '$data[sport_name]' type='checkbox' checked>
                                    <label class='form-check-label'>$data2[sport_name]&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>";
                                  $isprinted=true;
                                  $i++;
                                } else {
                                  continue;
                                  
                                }
                               

                              }
                              if ($i == 6) {
                                echo "<br>";
                              }
                              if($isprinted!=true){
                              echo "
                              <input class='three-top-pics' id='form-check-input' name='sport_name[]' value = '$data[sport_name]' type='checkbox' >
                              <label class='form-check-label'>$data[sport_name]&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>";
                              $i++;
                              
                            }
                            if ($i == 6) {
                              echo "<br>";
                            } 

                            }
                          } else {
                            echo "<h3>An Error occured</h3>";
                          }


                          ?>







                        </div>
                      </div>
                    </div>


                  </div>
              </div>











              <script>

                var limit = 3;
                $('input.three-top-pics').on('change', function () {
                  var checkedCount = $(this).closest('.top-pics').find(':checked').length;
                  if (checkedCount > limit) {
                    this.checked = false;
                  }
                });
              </script>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
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
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $slogan = $_POST['web-slogan'];
    $welcome_line = $_POST['welcome-line'];
    $welcome_paragraph = $_POST['welcome-para'];
    $top_pics = $_POST['sport_name'];
    $logo = $_FILES['web-logo']['name'];
    if($_FILES["web-logo"]["name"]==null)
    {
     
      $getlogo = "SELECT `logo` FROM `homepage`";
      $islogo = mysqli_query($con->conn,$getlogo);
      if($islogo)
      {
        while(($gotlogo = mysqli_fetch_assoc($islogo))>0)
        {
          $logo = $gotlogo['logo'];
          
        }

      }
      else{
        echo "<div class='alert alert-success' role='alert'>
        An error occured while uploading logo!
       
      </div>";
      }
    }
    $path = "../../../../../intershiprepo/assets/" . basename($logo);
    $test = move_uploaded_file($logo,$path);
    $tp_query = "TRUNCATE TABLE `top_pics`;";
    $tp_result = mysqli_query($con->conn,$tp_query);
    if($tp_result)
    { $i=0;
      while($i<(sizeof($top_pics)))
      {
        $insert = mysqli_query($con->conn,"INSERT INTO `top_pics`(`sport_name`) VALUES ('$top_pics[$i]');");
        $i++;
        if(!$insert)
        {
          echo "<div class='alert alert-success' role='alert'>
         An error occured while updating top pics 
         </div>";
         break;
        }
      }
    }
   
    $updatequery = "UPDATE `homepage` SET `logo`='$logo',`slogan`='$slogan',`welcome_line`='$welcome_line',`welcome_paragraph`='$welcome_paragraph' WHERE `theme_no`=1";
    $result = mysqli_query($con->conn, $updatequery);
    if ($result) {
      echo "<div class='alert alert-success' role='alert'>
      Fields Updated Successfully!
     
    </div>";
    } else {
      echo "<div class='alert alert-danger' role='alert'>
      There is an error ! try again later or contact the developer team.
    </div>";
    }
  }
}
?>
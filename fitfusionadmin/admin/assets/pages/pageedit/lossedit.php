
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
                  <a href="../pageedit/aboutusedit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About us</p>
                  </a>
                </li>
                <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                NUTRITION
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pageedit/lossedit.php" class="nav-link active">
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
              <h1>ADD WEIGHT LOSS DIET </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">WEIGHT LOSS DIET</li>
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
                  <h3 class="card-title">ADD BREAKFAST</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  action="lossedit.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">DISH NAME</label>
                      <input type="text" class="form-control" name="dish_name" placeholder="Dish name" required>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Add sport type</label>
                      <input type="text" class="form-control" name="sport-type" placeholder="sport type "required>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputFile">DISH IMAGE</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="dishimage" class="custom-file-input" id="exampleInputFile" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL CALORIES IN DISH </label>
                      <input type="text" class="form-control" name="dish_cal" placeholder="CALORIES" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL FAT IN DISH</label>
                      <input type="text" class="form-control" name="dish_fat" placeholder="FAT" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL PROTIEN IN DISH</label>
                      <input type="text" class="form-control" name="dish_prot" placeholder="PROTIEN" required>
                    </div>
                  </div>
                  <div class="card-footer">
                    <input class="btn btn-primary" type="submit" name="breakfast_submit">
                  </div>
                </form>
                <?php
                include("../../../dbcontroller.php");
                $db = new dbcontroller();
// Initialize database connection
// Assuming you have something like $db = new Database(); to establish the connection
// Replace it with your actual database connection code

if (isset($_POST['breakfast_submit'])) {
    $type = "Breakfast";
    $d_name = $_POST['dish_name'];
    $d_cal = $_POST['dish_cal'];
    $d_fat = $_POST['dish_fat'];
    $d_prtn = $_POST['dish_prot'];
    $d_img = $_FILES["dishimage"]["name"];
    echo "data got ";
    if($_FILES["dishimage"]["name"]==null)
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please choose a file first
        </div>";
    }
      else{
        echo "directory setting";
    // Handle file upload  
    $targetDirectory = "../../../../../intershiprepo/assets/loose/"; // Change this to your desired directory
    $targetFile = $targetDirectory . basename($_FILES["dishimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["breakfast_submit"])) {
        echo "img checking";
        $check = getimagesize($_FILES["dishimage"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
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
        echo "echeking existence";
      echo "<div class='alert alert-danger' role='alert'>
      File already exists
  </div>";
    echo "<script>setTimeout(function ()
      {
        window.location.href='lossedit.php'
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
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
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
        if (move_uploaded_file($_FILES["dishimage"]["tmp_name"], $targetFile)) {
            // echo "The file ". htmlspecialchars(basename( $_FILES["sport-image"]["name"])). " has been uploaded.";
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          There was an error occured while uploading file 
    </div>";

    echo "<script>setTimeout(function ()
    {
      window.location.href='lossedit.php'
    },10000)</script>";
        }
    }

    // Insert data into the database
    $insert_query = "INSERT INTO `weight_loss`(`type`, `name`, `photo`, `calories`, `fat`, `protien`) VALUES ('$type','$d_name','$d_img','$d_cal','$d_fat','$d_prtn')";
    $result = mysqli_query($db->conn, $insert_query);
    if ($result) {
        echo "<div class='alert alert-success' role='alert'>
                  Dish Added Successfully..!
              </div>";
    } else if(!$result){
        echo "<div class='alert alert-danger' role='alert'>
                  An error occurred while adding the Dish.
              </div>";
             
    }
    else{
      echo "<script>setTimeout(function ()
      {
        window.location.href='lossedit.php'
      },10000)</script>";
    }
}
}
?>

            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ADD LUNCH</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  action="lossedit.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">DISH NAME</label>
                      <input type="text" class="form-control" name="dish_name" placeholder="Dish name" required>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Add sport type</label>
                      <input type="text" class="form-control" name="sport-type" placeholder="sport type "required>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputFile">DISH IMAGE</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="dishimage" class="custom-file-input" id="exampleInputFile" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL CALORIES IN DISH </label>
                      <input type="text" class="form-control" name="dish_cal" placeholder="CALORIES" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL FAT IN DISH</label>
                      <input type="text" class="form-control" name="dish_fat" placeholder="FAT" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL PROTIEN IN DISH</label>
                      <input type="text" class="form-control" name="dish_prot" placeholder="PROTIEN" required>
                    </div>
                  </div>
                  <div class="card-footer">
                    <input class="btn btn-primary" type="submit" name="lunch_submit">
                  </div>
                </form>
                <?php
                $dab = new dbcontroller();
// Initialize database connection
// Assuming you have something like $db = new Database(); to establish the connection
// Replace it with your actual database connection code

if (isset($_POST['lunch_submit'])) {
    $type = "Lunch";
    $d_name = $_POST['dish_name'];
    $d_cal = $_POST['dish_cal'];
    $d_fat = $_POST['dish_fat'];
    $d_prtn = $_POST['dish_prot'];
    $d_img = $_FILES["dishimage"]["name"];
    
    if($_FILES["dishimage"]["name"]==null)
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please choose a file first
        </div>";
    }
      else{
      
    // Handle file upload  
    $targetDirectory = "../../../../../intershiprepo/assets/loose/"; // Change this to your desired directory
    $targetFile = $targetDirectory . basename($_FILES["dishimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["lunch_submit"])) {
        
        $check = getimagesize($_FILES["dishimage"]["tmp_name"]);
        if($check !== false) {
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
        echo "echeking existence";
      echo "<div class='alert alert-danger' role='alert'>
      File already exists
  </div>";
    echo "<script>setTimeout(function ()
      {
        window.location.href='lossedit.php'
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
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
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
        if (move_uploaded_file($_FILES["dishimage"]["tmp_name"], $targetFile)) {
            // echo "The file ". htmlspecialchars(basename( $_FILES["sport-image"]["name"])). " has been uploaded.";
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          There was an error occured while uploading file 
    </div>";

    echo "<script>setTimeout(function ()
    {
      window.location.href='lossedit.php'
    },10000)</script>";
        }
    }

    // Insert data into the database
    $lunch_insert_query = "INSERT INTO `weight_loss`(`type`, `name`, `photo`, `calories`, `fat`, `protien`) VALUES ('$type','$d_name','$d_img','$d_cal','$d_fat','$d_prtn')";
    $lunch_result = mysqli_query($dab->conn, $lunch_insert_query);
    if ($lunch_result) {
        echo "<div class='alert alert-success' role='alert'>
                  Dish Added Successfully..!
              </div>";
    } else if(!$lunch_result){
        echo "<div class='alert alert-danger' role='alert'>
                  An error occurred while adding the Dish.
              </div>";
             
    }
    else{
      echo "<script>setTimeout(function ()
      {
        window.location.href='lossedit.php'
      },10000)</script>";
    }
}
}
?>
  
              </div>
          </div><!-- /.container-fluid -->
      </section>
      <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ADD DINNER</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  action="lossedit.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">DISH NAME</label>
                      <input type="text" class="form-control" name="dish_name" placeholder="Dish name" required>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Add sport type</label>
                      <input type="text" class="form-control" name="sport-type" placeholder="sport type "required>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputFile">DISH IMAGE</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="dishimage" class="custom-file-input" id="exampleInputFile" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL CALORIES IN DISH </label>
                      <input type="text" class="form-control" name="dish_cal" placeholder="CALORIES" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL FAT IN DISH</label>
                      <input type="text" class="form-control" name="dish_fat" placeholder="FAT" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">TOTAL PROTIEN IN DISH</label>
                      <input type="text" class="form-control" name="dish_prot" placeholder="PROTIEN" required>
                    </div>
                  </div>
                  <div class="card-footer">
                    <input class="btn btn-primary" type="submit" name="dinner_submit">
                  </div>
                </form>
                <?php
                $dab = new dbcontroller();
// Initialize database connection
// Assuming you have something like $db = new Database(); to establish the connection
// Replace it with your actual database connection code

if (isset($_POST['dinner_submit'])) {
    $type = "Dinner";
    $d_name = $_POST['dish_name'];
    $d_cal = $_POST['dish_cal'];
    $d_fat = $_POST['dish_fat'];
    $d_prtn = $_POST['dish_prot'];
    $d_img = $_FILES["dishimage"]["name"];
    
    if($_FILES["dishimage"]["name"]==null)
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please choose a file first
        </div>";
    }
      else{
      
    // Handle file upload  
    $targetDirectory = "../../../../../intershiprepo/assets/loose/"; // Change this to your desired directory
    $targetFile = $targetDirectory . basename($_FILES["dishimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["dinner_submit"])) {
        
        $check = getimagesize($_FILES["dishimage"]["tmp_name"]);
        if($check !== false) {
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
        echo "echeking existence";
      echo "<div class='alert alert-danger' role='alert'>
      File already exists
  </div>";
    echo "<script>setTimeout(function ()
      {
        window.location.href='lossedit.php'
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
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
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
        if (move_uploaded_file($_FILES["dishimage"]["tmp_name"], $targetFile)) {
            // echo "The file ". htmlspecialchars(basename( $_FILES["sport-image"]["name"])). " has been uploaded.";
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          There was an error occured while uploading file 
    </div>";

    echo "<script>setTimeout(function ()
    {
      window.location.href='lossedit.php'
    },10000)</script>";
        }
    }

    // Insert data into the database
    $dinner_insert_query = "INSERT INTO `weight_loss`(`type`, `name`, `photo`, `calories`, `fat`, `protien`) VALUES ('$type','$d_name','$d_img','$d_cal','$d_fat','$d_prtn')";
    $dinner_result = mysqli_query($dab->conn, $dinner_insert_query);
    if ($dinner_result) {
        echo "<div class='alert alert-success' role='alert'>
                  Dish Added Successfully..!
              </div>";
    } else if(!$dinner_result){
        echo "<div class='alert alert-danger' role='alert'>
                  An error occurred while adding the Dish.
              </div>";
             
    }
    else{
      echo "<script>setTimeout(function ()
      {
        window.location.href='lossedit.php'
      },10000)</script>";
    }
}
}

?>
    
              </div>
          <!-- /.row -->
        </div>
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
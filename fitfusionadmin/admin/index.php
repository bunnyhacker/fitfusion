<?php
session_start();
if (!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin'] != true) {
  header("location:../../intershiprepo/projectfiles/login.php");
}
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
include("dbcontroller.php");
//Content Wrapper. Contains page content -->
$db = new dbcontroller;
$membershipquery = "SELECT * FROM `membership_enrollers`";
$membershipqueryresult = mysqli_query($db->conn, $membershipquery);
if ($membershipqueryresult) {
  $total_membership = mysqli_num_rows($membershipqueryresult);
}
$basicmembershipquery = "SELECT * FROM `membership_enrollers` WHERE `ms_type`='basic'";
$basicmembershipqueryresult = mysqli_query($db->conn, $basicmembershipquery);
if ($basicmembershipqueryresult) {
  $total_basicmembership = mysqli_num_rows($basicmembershipqueryresult);
}
$premiummembershipquery = "SELECT * FROM `membership_enrollers` WHERE `ms_type`='premium'";
$premiummembershipqueryresult = mysqli_query($db->conn, $premiummembershipquery);
if ($premiummembershipqueryresult) {
  $total_premiummembership = mysqli_num_rows($premiummembershipqueryresult);
}
$platinummembershipquery = "SELECT * FROM `membership_enrollers` WHERE `ms_type`='platinum'";
$platinummembershipqueryresult = mysqli_query($db->conn, $platinummembershipquery);
if ($platinummembershipqueryresult) {
  $total_platinummembership = mysqli_num_rows($platinummembershipqueryresult);
}

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard v2</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?php echo $total_membership; ?>
              </h3>

              <p>Total Membership</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?php echo $total_basicmembership; ?><sup style="font-size: 20px"></sup>
              </h3>

              <p>Basic Membership</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>
                <?php echo $total_premiummembership; ?>
              </h3>

              <p>Premium Membership</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>
                <?php echo $total_platinummembership; ?>
              </h3>

              <p>Platinum Membership</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="card">
        <div class="card-header border-0">
          <h3 class="card-title">Users</h3>
          <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
              <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
              <i class="fas fa-bars"></i>
            </a>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-striped table-valign-middle">
            <thead>
              <tr>
                <th>Profile</th>
                <th>Username</th>
                <th>Name</th>
                <th>Gender</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $userquery="SELECT * FROM `users`";
              $userqueryresult=mysqli_query($db->conn,$userquery);
              if($userqueryresult)
              {
                while($data=mysqli_fetch_assoc($userqueryresult)){
              
              echo"<tr>
                <td>
                  <img src='../../intershiprepo/profiles/$data[profile]' alt='Profile' style='width: 50px;
                  height: 50px;
                  border-radius: 50%;
                  overflow: hidden;
                  display: flex;
                  justify-content: center;
                  align-items: center;'>
                </td>
                <td>$data[username]</td>
                <td>
                    $data[name]
                  
                </td>
                <td>
                  $data[gender]
                    <i class='fas fa-gender'></i>
                  </a>
                </td>
              </tr>";
            }
          }
          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <?php
  include("includes/footer.php");
  ?>
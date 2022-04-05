<?php
session_start();
$u_id = $_SESSION['id'];
// $name = $_SESSION['username'];
// $m_num = $_SESSION['m_num'];
// $email = $_SESSION['email'];

try {

  $conn= mysqli_connect("localhost","root","","login");
  $sql= "SELECT * FROM `users` WHERE `id`=$u_id";
  $result= mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0)
  {

    while($row = mysqli_fetch_array($result) ) 
    {
        $name=$row['username'];
        $_SESSION['username']=$name;
        $m_num=$row['m_num'];
        $email=$row['email'];
  }
}
  else{
      echo "Error";
  }
}
catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/admin-ui/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/admin-ui/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/admin-ui/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/admin-ui/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/admin-ui/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin/admin-ui/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/admin-ui/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/admin-ui/assets/css/style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body>

 

 <!-- ======= Sidebar ======= -->
 <?php //include "include/header1.php";?>

 
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block"> Account </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->



 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link " href="partnersdemo.php">
      <i class="bi bi-person"></i>
      <span>Service Provider</span>
    </a>
  </li><!-- End Profile Page Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="allservices.php">
      <i class="bi bi-grid"></i>
      <span>categories</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="city-options.php">
      <i class="bi bi-grid"></i>
      <span>City</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="contact.php">
      <i class="bi bi-grid"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link " href="about.php">
      <i class="bi bi-person"></i>
      <span>About us</span>
    </a>
  </li><!-- End Profile Page Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="trackstatus.php">
      <i class="bi bi-envelope"></i>
      <span>Track Status</span>
    </a>
  </li><!-- End Contact Page Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="login_page/logout.php">
      <i class="bi bi-box-arrow-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Contact Page Nav -->

</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="images/user1.old.png" alt="Profile" class="rounded-circle">
              <h2><?php echo $name;?></h2>
              <h3><?php ?></h3>
              <div class="social-links mt-2">
            

              </div>
              <a href="deleteuser.php?acdelete=<?php echo $u_id;?>"> <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete Account</button></a> 
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><?php //echo "details";?></p> -->

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $name;?></div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8"><?php // echo "company";?></div>
                  </div> -->

                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?php //echo "job";?></div>
                  </div> -->

                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">City</div>
                    <div class="col-lg-9 col-md-8"><?php //echo "city";?></div>
                  </div> -->

                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php //echo "address";?></div>
                  </div> -->

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo "+91 ".$m_num;?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $email;?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="update-user1.php" class="needs-validation" method="POST"  enctype="multipart/form-data" novalidate>
                  <input type="hidden"  name="u_id" value="<?php echo $u_id; ?>"> 
               

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="name" value="<?php echo $name;?>">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $m_num;?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $email;?>">
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="pass.php" method="post" >

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

               

           
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
<?php include "include/footer.php";?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin/admin-ui/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/admin-ui/assets/vendor/chart.js/chart.min.js"></script>
  <script src="admin/admin-ui/assets/vendor/echarts/echarts.min.js"></script>
  <script src="admin/admin-ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/admin-ui/assets/vendor/quill/quill.min.js"></script>
  <script src="admin/admin-ui/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/admin-ui/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/admin-ui/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/admin-ui/assets/js/main.js"></script>

</body>

</html>
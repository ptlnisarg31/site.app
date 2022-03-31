<?php 
session_start();
require_once 'db_connect.php';
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
  }

  if(isset($_GET['error']))
  {
      $error=$_GET['error'];
    }
if(isset($_POST['login'])) {

    $user = $_POST['username'];
    $password = $_POST['password'];


    try {
      $SQLQuery = "SELECT * FROM workers WHERE (username = :username) and (`delete`=0)";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':username' => $user));
$i=0;//counting results
      while($row = $statement->fetch()) {
        $w_id = $row['w_id'];
        echo $w_id;
        $hashed_password = $row['password'];
        $dbusername = $row['username'];
$i++;
        if(password_verify($password, $hashed_password)) {
          $_SESSION['w_id'] = $w_id;
          $_SESSION['username1'] = $user;
          //$_SESSION['password'] = $password;
         // echo $w_id;
         header('location: ../admin-ui/index.php');
        
        }
        else {
          $error = "Invalid  password";
        }
       
      }
      if($i==0)
      {$error= "Invalid User , This user doen't exist! check username and password";}
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Worker Admin Panel</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="pages-login.php" novalidate>
                  <input type="hidden" value="<?php echo $w_id?>" name='W_id'>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                    </div>
                 
                      
            <?php 
            
            if(isset($msg))
            {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
              <?php echo "Msg : ".$msg; ?>
              <a href="pages-login.php"><button type="button" name="closemsgbtn" value="1" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
     
     </div> <?php
            }

            ?>
                <?php 
            
            if(isset($error))
            {
            ?>
            <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
              <?php echo "Error : ".$error; ?>
              <a href="pages-login.php"><button type="button" name="closemsgbtn" value="1" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
     
     </div> <?php
            }

            ?>
           
            
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.php">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
               
                Designed by <a href="https://bootstrapmade.com/">by Team Minute Maintanance</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
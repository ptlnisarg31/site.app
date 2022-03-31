<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
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
                  
                  <span class="d-none d-lg-block">Enter more details about yours..</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Advanced Details</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="insart.php" method="POST"  novalidate>
                    

                    <div class="col-12">
                      <label class="form-label">Gender</label>
                      
                        <select class="form-select" name="gender" id="gender"aria-label="Default select example">
                         
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                      
                    </div>

                 
                   
               
                   
                    <div class="col-12">
                      <label class="form-label">Your Birth Date</label>
                      <div class="col-sm-10">
                        <input type="date" name="bod"class="form-control">
                      </div>
                      
                    </div>

                    <div class="col-12">
                      <label class="form-label">City</label>
                      
                        <select class="form-select" name="city" aria-label="Default select example">
                         
                          <option value="Bhavnagar">Bhavnagar</option>
                          <option value="Ahmedabad">Ahmedabad</option>
                          <option value="Surat">Surat</option>
                          <option value="RajKot">RajKot</option>
                        </select>
                      
                    </div>


                     
                    <div class="col-12">
                      <label class="form-label">Profile Img Upload</label>
                      <div class="col-sm-10">
                      <input name="img" type="file" class="form-control" required="required"/>
                        <div class="invalid-feedback">Please, enter a valid Image!</div>
                       </div>
                      
                     
                       <div class="col-12">
                        <label class="form-label">More Details</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="more_details" rows=""style="height: 100px; width: 100%;"></textarea>
                          <div class="invalid-feedback">Please, enter a valid details!</div>
                         </div>
                        </div>

                  </br>
    
                  <div class="col-12">
                      <label class="form-label">Select Profession/Services Category</label>
                      
                        <select class="form-select" name="category" id="category" aria-label="Default select example">
                         
                        <option selected>Open this select menu</option>
                              <option value="Internet Service Provider">Internet Service Provider</option>
                              <option value="Car Services">Car Services</option>
                              <option value="Electrican">Electrican</option>
                              <option value="Computer/IT technician">Computer/IT technician</option>
                              <option value="Mechanic">Mechanic</option>
                              <option value="Wall Painting">Wall Painting</option>
                              <option value="Machine Services">Machine Services</option>
                              <option value="Security Services">Security Services</option>
                              <option value="Carpenting/furniture">Carpenting/furniture</option>
                              <option value="Plumber">Plumber</option>
                              <option value="AC Services">AC Services</option>
                              <option value="Gardening Helper">Gardening Helper</option>
                              <option value="Cleaning Services">Cleaning Services</option>
                              <option value="Kitchen Helper">Kitchen Helper</option>
                              <option value="Electronics(TV/Washing Machine) Repairer">Electronics(TV/Washing Machine) Repairer</option>
                              <option value="Home Salon">Home Salon</option>
                              <option value="Bathroom Cleaning">Bathroom Cleaning</option>
                              <option value="HouseHold Work Helper">HouseHold Work Helper</option>
                              <option value="Massage/Spa Services9">Massage/Spa Services</option>
                              <option value="20"></option>

                    </select>
</div></br>
                    <div class="col-12">
                      <lsabel for="price" class="form-label">Price Charge (Avg/day) </label>
                      <div class="input-group has-validation">
                     
                      <input type="number" name="charge" class="form-control" id="yourNumber" required>
                      <div class="invalid-feedback">Please, enter a valid Price!</div>
                      </div>
                    </div>
                    </div>
                  
                   
</br>
                 
                   
<!--

                    <div class="col-12">
                      <label for="yourNumber" class="form-label">Your Number</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">+91</span>
                      <input type="number" name="number" class="form-control" id="yourNumber" required>
                      <div class="invalid-feedback">Please, enter a valid Number!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                     
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>


-->
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                  </br>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Create Account</button>
                    </div></br>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

             

            </div>
            <div class="credits">
               
              Designed by <a href="#">Minute Mainatnance Team</a>
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
 <?php
 session_start();
 require_once 'db_connect.php';
$w_id=$_SESSION['w_id'];
// if(isset($_POST['submit'])) {
  
//   $gender=$_POST['gender'];
//   $BOD = $_POST['bod'];
//   $img = $_POST['img'];
//   $city = $_POST['city'];
//   $more_details= $_POST['more_details'];
//   $category1 = $_POST['category1'];
//   $category2 = $_POST['category2'];
// }
// try {
//   $SQLInsert = "INSERT INTO `workers_adv`(`gender`, `bod`, `ing`, `city`, `details`, `category1`, `category2`, `w_id`) VALUES ('$gender',$BOD,$img,'$city','$more_details','$category1','$category2',$w_id)";
  

//   $statement = $conn->prepare($SQLInsert);
//   $statement->execute();

//   if($statement->rowCount() == 1) {
// header('location: form-2.php');
  
//   }
// }
// catch (PDOException $e) {
//   echo "Error: " . $e->getMessage();
// }

?> 

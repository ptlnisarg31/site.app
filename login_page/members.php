<?php
require_once 'db_connect.php';


if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];
      $cty=$_POST['city'];
      $Mob = $_POST['Mobile_No'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $query= $conn ->prepare("SELECT * FROM users WHERE email = ?");
      $query->execute([$email]);
      $result =$query->rowCount();
      if($result>0){
         $error = "<spam class = 'text-dangar'>Email has already existed! Please choose another one.</spa></p>";
      
      }
  else{
    try {
      $SQLInsert = "INSERT INTO workers (name , password , email ,m_num ,city )
                   VALUES (:username, :password, :email , :m_num, :city )";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email, ':city' => $cty ,':m_num' => $Mob));
      
      

      if($statement->rowCount() == 1) {
        header('location: index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" class="sign-in-form" method="POST">
            
              <h2 class="title">Sign in</h2>
            
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="user-name" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="user-pass" />
              </div>
              <input type="submit" value="Login" class="btn solid" name="login-btn" />
              <p class="social-text">Or Sign in with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
          
          </form>
          <form action="msignup.php" class="sign-up-form" method="POST" >
            
              <h2 class="title">Sign up</h2>
            
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="user-name" placeholder="Username" />
              </div>
              <!--icon is yet to be putted -->
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="number" name="Mobile_No" placeholder="Mob. No" />
              </div>
              
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="user-email" placeholder="Email" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <select name="city" id="city">
                <option value="Bhavnagar">Bhavnagar</option>
                <option value="Surat">Surat</option>
                <option value="Rajkot">Rajkot</option>
                <option value="Ahmedabad">Ahmedabad</option>
                </select>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="user-pass" placeholder="Password" />
              </div>
              <input type="submit" name="signup-btn" class="btn" value="Signup">
              <p class="social-text">Or Sign up with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
				To create your account tap the sign-up button and fill details.
             
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already our member? Click Sign In and access your account !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>

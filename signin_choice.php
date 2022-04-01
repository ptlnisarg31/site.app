<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <style>
        img.left
        {
            height: 300px;
            
        }
        img.right
        {
            height: 300px;
             
        }
    .right {
  float: right;
  width: 300px;
 
  margin-top: 10px;
    margin-bottom: 1px;
   
    margin-right: 120px;
}
.left {
  float: left;
  
  width: 300px;
    margin-top: 10px;
    margin-bottom: 1px;
    margin-left: 150px;
   
 
}
        </style>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <?php
   include 'include/header.php';
   ?>
    <!-- Navbar Section Ends Here -->

<center>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
		<center>

            <h2 class="text-center">Select Sign in/Sign Up</h2>

            <a href="login_page/index.php">
            <div class="left">
                
                 <img src="images/user1.png"  alt="image" class="img-responsive img-curve" border="3">

               skmf
            </div>
            </a>

            <a href="admin/Admin-Login/pages-login.php">
            <div class="right">
                 <img src="images/profile.jpg" alt="image" class="img-responsive img-curve" border="3">

                
            </div>
            </a>

           

            

            <div class="clearfix"></div>
			</center>

        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <!-- social Section Starts Here -->
     <?php
   include 'include/footer.php';
   ?>
    <!-- footer Section Ends Here -->

</body>
</html>
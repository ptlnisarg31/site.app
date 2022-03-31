<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
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



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore All Services</h2>
           
            <a href="Categoriesview.php?value=Electrican" >
            <div class="box-3 float-container">
                 <img src="images/s1.jpeg"  alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Electricion</h3>
            </div>
            </a>

            <a href="Categoriesview.php?value=Car Services" >            <div class="box-3 float-container">
                 <img src="images/s7.jpeg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Car Mechanic</h3>
            </div>
            </a>

            <a href="Categoriesview.php?value=Plumber" >
                          <div class="box-3 float-container">
                 <img src="images/s4.jpeg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Plumbing</h3>
            </div>
            </a>

            <a href="Categoriesview.php?value=Assistancy" >            <div class="box-3 float-container">
                 <img src="images/s5.jpeg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Assistancy</h3>
            </div>
            </a>

         <!--   <a href="#">
            <div class="box-3 float-container">
                 <img src="images/s6.jpeg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>
			
		-->	
    

    <a href="Categoriesview.php?value=Repairer"  >
               <div class="box-3 float-container">
                 <img src="images/s8.png" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Repairing</h3>
            </div>
          			</a>
								            <div class="clearfix"></div>


                <a href="Categoriesview.php?value=Machine Services">
            <div class="box-3 float-container">
                 <img src="images/s10.png" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Machines Srvicing</h3>
            </div>
            </a>
            <a href="Categoriesview.php?value=Wall Painting" >
            <div class="box-3 float-container">
                 <img src="images/s9.jpg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Wall Painting</h3>
            </div>
            </a>

            <a href="Categoriesview.php?value=Carpenting/furniture" >
            <div class="box-3 float-container">
                 <img src="images/s11.jpg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Carpenting</h3>
            </div>
			            <div class="clearfix"></div>

            </a>
            <a href="Categoriesview.php?value=AC Services" >
            <div class="box-3 float-container">
                 <img src="images/s14.png" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Ac servicing</h3>
            </div>
            </a>
            <a href="Categoriesview.php?value=Cleaning Services" >
            <div class="box-3 float-container">
                 <img src="images/s12.jpg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Cleaning</h3>
            </div>
            </a>

            <a href="Categoriesview.php?value=Security Services" >
            <div class="box-3 float-container">
                 <img src="images/s13.png" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Security Services</h3>
            </div>
            </a>
			            <div class="clearfix"></div>


            <div class="clearfix"></div>
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
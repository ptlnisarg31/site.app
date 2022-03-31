<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose city - Minute maintanunce</title>


    <link rel="stylesheet" href="css/style.css">
    <style>
    
    </style>
</head>

<body>
    <!-- Navbar Section Starts Here -->
   <?php
   include 'include/header.php';
   ?>
   

    
	<?php
   include 'include/search.php';
   ?>
   
   
    <!-- service sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
            <h2 class="text-center">Choose Your City</h2>
<center>   <div class="">
            <div class=" float-container" width="10%" >
                       <a href="#city">
			<img src="images/city.jpg" alt="image" class="img-curve" width="60%" border="3"/>
            </a>

            </div>
<div class="clearfix"></div>
        </div>
		</center>
		<div id="city"></div>
		<br>
		
		        <div class="container">
                <h3 align="center" class="text-dark">Currently Available</h3>

            <div class="box-3 float-container">
                       
					   <img src="images/blank.jpg" alt="image" height="2px" width="1050px" class="img-responsive img-curve" >


            </div>
            <a href="city.php?city=Bhavnagar">
            <div class="box-3 float-container">
                       
					   <img src="images/bvn.gif" alt="image" class="img-responsive img-curve" >


            </div>
            </a>
		<div class="clearfix"></div>
        </div>	 
			 
	 <div class="container">

	          

             <a href="city.php?city=Ahmedabad">
            <div class="box-3 float-container">
                          <img src="images/abd.gif" alt="image" class="img-responsive img-curve" >


            </div>
            </a>
            <a href="city.php?city=Surat">
            <div class="box-3 float-container">
                          <img src="images/surat.gif" alt="image" class="img-responsive img-curve" >


            </div>
            </a>
            <a href="city.php?city=Mumbai">

            <div class="box-3 float-container">
                          <img src="images/mumbai.gif" alt="image" class="img-responsive img-curve" >


            </div>
</a>            

         

            <div class="clearfix"></div>
        </div>
    </section>
   
    <!-- Categories Section Ends Here -->


    <!-- fOOD Menu Section Ends Here -->
    
	<!-- footer Section Starts Here -->

    <!-- social Section Starts Here -->
    <?php
   include 'include/footer.php';
   ?>
    <!-- social Section Ends Here -->

    
    <!-- footer Section Ends Here -->

</body>
</html>

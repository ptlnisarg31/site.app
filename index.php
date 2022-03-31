<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Minute maintanunce</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    
    </style>
</head>

<body>

    <!-- Navbar Section Starts Here -->
   <?php
   include 'include/header.php';
   ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
	
    <section class="food-bg">
        <div class="container">
<br><br><br>
        <!--    <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        -->
        </div>
		 <?php
   include 'include/search.php';
   ?>
   
   
    <!-- service sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
   	 <?php
        include 'include/services-mini.php';

   ?>
   
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    


    <?php
   include 'include/minicategories.php';

   ?>

    
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

<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Minute maintanunce</title>

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
	
   
   
    <!-- service sEARCH Section Ends Here -->

    
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
	<?php
   include 'include/categories.php';
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

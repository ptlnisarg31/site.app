<!DOCTYPE html>

<?php
  include 'login_page/session.php';
if($_GET['city'])
{
    $city=$_GET['city'];
    $_SESSION['selected_city']=$city;
    
}
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $city; ?> Services Providers</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
<?php
   include 'include/header.php';

?>   
<?php
//echo $_SESSION['selected_city'];
?>
   <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container" >
            
            <h3 style="color:gray;">Your selected City is :<a href="" class="text-white:hover"> <?php echo $city;?></a></h3>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <?php
   include 'include/categories.php';
   ?>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
   <?php
   include 'include/footer.php';
   ?>
    <!-- footer Section Ends Here -->

</body>
</html>
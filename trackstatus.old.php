<!DOCTYPE html>
<?php

session_start();

$id=0;

//echo $id;
// $conn= mysqli_connect("localhost","root","","login");
// $sql= "select * from workers WHERE w_id = $id";

// $result= mysqli_query($conn,$sql);


// session_start();
// if(isset($_SESSION['id']))
// {
//     if (mysqli_num_rows($result) > 0) 
//     {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracking page </title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
     <?php
   include 'include/header.php';
//    $charge=$_GET['charge'];
   ?>
	<!-- Navbar Section Ends Here -->

     
     
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center ">Fill this form to get your Quote & proceed further.</h2>
                <?php
            // while($row = mysqli_fetch_array($result))
            
            // {
            ?> 

            <form action="trackstatus1.php" method="get"class="order">
                <fieldset>
                    
                    

                   
                    

                </fieldset>
                
                <fieldset>
                    
                    <div class="order-label">odar id</div>
                    <input type="text" name="odarid" placeholder="E.g. Nisarg Patel" class="input-responsive" required>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                    
                    

                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
     <?php
    // }
// }
// }
   ?>
    <!-- footer Section Ends Here -->

</body>
</html>
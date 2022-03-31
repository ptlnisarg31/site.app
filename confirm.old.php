<!DOCTYPE html>
<?php
session_start();
require_once 'login_page/db_connect.php';
require_once 'include/odarid.php';
$U_id = $_SESSION['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
     <?php
   include 'include/header.php';
   ?>
	<!-- Navbar Section Ends Here -->

<?php
$qty=$_POST['qty'];
$name=$_POST['full-name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$id=$_GET['W_id'];
$o_id=$O_id;
//echo $id;
$connn= mysqli_connect("localhost","root","","login");
$sql= "select * from workers WHERE w_id = $id";
$result= mysqli_query($connn,$sql);
?>
    <!-- fOOD sEARCH Section Starts Here -->
<?php
    if (mysqli_num_rows($result) > 0)
    { ?>
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center ">Confirm and edit if you want to and check all details.</h2>
            <?php
             while($row = mysqli_fetch_array($result))
             {
            ?>

            <form action="inbook.php?W_id=<?php echo $id; ?>" method="POST" class="order">
                <fieldset>
                    <legend>Selected Service</legend>

                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $row["name"]; ?></h3>
                        <p class="food-price">120 &#x20B9;</p> <!-- create dynamic -->

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="<?php echo $qty;?>" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Booking Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="<?php echo $name; ?>" class="input-responsive" value="<?php echo $name; ?>" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="<?php echo $contact; ?>" class="input-responsive" value="<?php echo $contact; ?>" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="<?php echo $email; ?>" class="input-responsive" value="<?php echo $email; ?>" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="<?php echo $address; ?>" class="input-responsive" value="<?php echo $address; ?>" required><?php echo $address; ?></textarea>

                    <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
     <?php
    }
             }
            
   ?>
    <!-- footer Section Ends Here -->

</body>
</html>
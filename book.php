<!DOCTYPE html>
<?php
$id=0;
$id=$_GET['W_id'];
//echo $id;
$conn= mysqli_connect("localhost","root","","login");
$sql= "select * from workers WHERE w_id = $id";

$result= mysqli_query($conn,$sql);


session_start();
if(isset($_SESSION['id']))
{
    if (mysqli_num_rows($result) > 0) 
    {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page </title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
     <?php
   include 'include/header.php';
   $charge=$_GET['charge'];
   ?>
	<!-- Navbar Section Ends Here -->

     
     
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center ">Fill this form to get your Quote & proceed further.</h2>
                <?php
            while($row = mysqli_fetch_array($result))
            
            {
            ?> 

            <form action="confirm.php?W_id=<?php echo $id; ?>" method="post"class="order">
                <fieldset>
                    
                    <legend>Selected Service</legend>

                    <div class="food-menu-img">
                    <img src="admin/Admin-Login/<?php echo $row["img"];?>" alt="image" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $row["name"]; ?></h3>
                        <p class="food-price"><?php echo $row["charge"]; ?> &#x20B9;</p>

                        <!-- <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required> -->
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Booking Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Nisarg Patel" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@nisargpatel.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    <input type="hidden" value="<?php echo $charge?>" name='charge'>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                    

                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
     <?php
            }
     }
        }
        else
        {
            header('location:login_page/index.php');
        }
   include 'include/footer.php';
   ?>
    <!-- footer Section Ends Here -->

</body>
</html>
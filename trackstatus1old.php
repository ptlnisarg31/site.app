<head>
<link rel="stylesheet" href="css/style.css">
</head>

<?php
session_start();
echo $u_id=$_SESSION['id'];

$u_id=$_SESSION['id'];


 include 'include/header.php';
$conn= mysqli_connect("localhost","root","","login");
$o_id=$_GET['odarid'];


$query="SELECT * FROM `order` WHERE `u_id`=$u_id";
$nisarg=mysqli_query($conn,$query);
if (mysqli_num_rows($nisarg) > 0)
{
    while($row = mysqli_fetch_array($nisarg))
    {
        echo "</br>".$row['o_id'];
    }
}










$sql1="SELECT * FROM `order` WHERE `o_id`=$o_id";
$result2=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result2) > 0)
{

$sql1="SELECT * FROM `accept` WHERE `o_id`=$o_id";
$result1=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result1) > 0)
{
    while($row = mysqli_fetch_array($result1))
    {
        $w_id=$row['w_id'];
       
        $sql="SELECT * FROM `workers` WHERE `w_id`=$w_id";
        $result=mysqli_query($conn,$sql);

           if (mysqli_num_rows($result) > 0)
        { ?>
            <section class="food-search">
                <div class="container">
                    
                    <h2 class="text-center ">worker's details.</h2>
                    <?php
                    while($row = mysqli_fetch_array($result))
                  {
                    ?>
            
                        <fieldset>
                            <legend>workers Details</legend>
                            <div class="order-label"> workers Name</div>
                            <input type="text" name="full-name" placeholder="<?php echo $row['name']; ?>" class="input-responsive" value="<?php echo $row['name']; ?>" readonly>

                            <div class="order-label">Phone Number</div>
                            <input type="text" name="contact" placeholder="<?php echo $row['m_num']; ?>" class="input-responsive" value="<?php echo $row['m_num']; ?>" readonly>

                            <div class="order-label">Email</div>
                            <input type="text" name="email" placeholder="<?php echo $row['email']; ?>" class="input-responsive" value="<?php echo $row['email']; ?>" readonly>
                            
                           
                        </fieldset>

                    </form>
                   <?php
                 } 
                }
                 else
                 { 
                    ?>
                                <section class="categories">
                    <div class="container" >
                    
                    
                    
                <h4 class="text-center"> This  order on pending</h4>
                </br>
                <h3 class="text-center">Please Check later </h3>
                    </div>
                    </section>
                        <?php 
            
}

                 ?>
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
                        ?>
                                    <section class="categories">
                        <div class="container" >
                        
                        
                        
                    <h4 class="text-center"> There is an order on This order ID</h4>
                    </br>
                    <h3 class="text-center">Please Check Your Order ID </h3>
                        </div>
                        </section>
                            <?php 
                
    }

    
   ?>

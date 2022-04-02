<html>
<head>
<meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Minute maintanunce</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
session_start();
//echo $u_id=$_SESSION['id'];

$u_id=$_SESSION['id'];
                                                                if(isset($_SESSION['id']))
                                                                {
                                                                }
                                                                else
                                                                {
                                                                    header("location:index.php");
                                                                }

 include 'include/header.php';
$conn= mysqli_connect("localhost","root","","login");

?>
<section class="food-menu">
             
<div class="container">
    <h2 class="text-center">Track All Work Status</h2>
<?php
$query="SELECT * FROM `order` WHERE `u_id`=$u_id";
$orders=mysqli_query($conn,$query);
if (mysqli_num_rows($orders) > 0)
{

    while($row = mysqli_fetch_array($orders))
    {
      //  echo "</br>".$row['o_id'];
       // echo "</br>".$row['w_id'];
        $w_id=$row['w_id'];
        $o_id=$row['o_id'];


        $sql= "select * from workers WHERE w_id='$w_id'";
        $result= mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) 
        {   
                while($row=mysqli_fetch_array($result))
                {
            // $i=0;
                    ?>
              
              
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                
                                <img src="admin/Admin-Login/<?php echo $row["img"];?>" alt="image" class="img-responsive img-curve">
                            </div>
    
                            <div class="food-menu-desc">
                                <h4><?php echo $row["name"]; ?></h4>
                                <p class="food-price"><?php echo $row["charge"]; ?> &#x20B9;</p>

                                <p class="food-detail">
                                <small><?php echo "Email : ".$row["email"]; ?></small>
    
                                        </p>
                                        <p class="food-detail">
                                <small><?php echo "Phone Number : ".$row['m_num']; ?></small>
    
                                        </p>
                           <p class="food-detail">
                           <small> <?php echo "Order id: : <b>".$o_id."</b>"; ?></small>
    
                                        </p>
            </br> 
                  <?php 
                            
                            if(isset($_GET['id']))
                              {
                                  if($_GET['id']==$o_id)
                                  {
                                  ?>
                                <input type="submit" value="<?php echo $_GET['msg'];?>" class="btn btn-primary"disabled></input>
                                <?php
                              }
                              else
                              {
                               ?>                   
                               <form action="trackstatus2.php" method="post">
                                             
                                                   <input type="hidden" name="order" value="<?php echo $o_id;?>"/>
                                                   <input type="submit" value="Show Status" class="btn btn-primary"/>
                                                            
                                                 
                               </form>       
                               <?php
                              }
                            }
                              else
                              {
                                 
                                  ?>
                             
            <form action="trackstatus2.php" method="post">
                          
                                <input type="hidden" name="order" value="<?php echo $o_id;?>"/>
                                <input type="submit" value="Show Status" class="btn btn-primary"/>
                                         
                              
            </form>            
                   
                <?php
                    
                    }
                                    
                                    ?>
                            </div>
                        </div>
          
                                                                                               
          <?php
            }
        }
    }
}
          ?>
                        
    
                        <div class="clearfix"></div>
    
    
    
    
                 
                </section>


</body>
</html
<?php
   include 'login_page/session.php';


        $conn= mysqli_connect("localhost","root","","login");

        $sql= "select * from workers";
        $result= mysqli_query($conn,$sql);
     
        
        if (mysqli_num_rows($result) > 0) 
        {
                    ?>
                <section class="food-menu">
             
                    <div class="container">
                        <h2 class="text-center">Service Providers </h2>
                        <?php
                while($row = mysqli_fetch_array($result)) 
            {
                $id=$row['w_id'];
                

                ?>

            <form action="book.php" method="GET">
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                
                            <img src="admin/Admin-Login/<?php echo $row["img"];?>" alt="image" class="img-responsive img-curve">
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $row["name"]; ?></h4>
                                <p class="food-price"><?php echo $row["charge"]; ?> &#x20B9;</p>
                                <p class="food-detail">
                                <?php echo $row["details"]; ?></small>

                                        </p>
                                <br>
                                <input type="hidden" value="<?php echo $id?>" name='W_id'>
                                <input type="hidden" value="<?php echo $row["charge"];?>" name='charge'>
                                <input type="submit" value="Book Now" class="btn btn-primary"></input>
                            </div>
                        </div>
            </form>
                        																       
                        <?php
                     
                     
            }
        }

               
              
             
                    ?>
                        

                        <div class="clearfix"></div>




                    </div>

                    <p class="text-center">
                        <a href="city-options.php">See more</a>
                    </p>
                </section>
                
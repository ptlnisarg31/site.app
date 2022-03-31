    <!-- Navbar Section Starts Here -->

<section class="navbar">
        <div class="container" >
            <div class="logo">
                <a href="index.php" title="Logo">
                    <img src="images/logo1.gif" style="vertical-align: middle;padding:10px;"  alt="Services logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul style="vertical-align: middle;padding:10px;">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
					 
					  <?php
					if(!isset($_SESSION['username'])) {
						?>
						<li>
					 <a href="signin_choice.php"> 
						<?php
						echo "Login";
						?></a> 
                    </li>
						<?php
					}
					?>
                    <li>
					
                        <a href="partnersdemo.php">Service Providers</a>
						</li>
						<li>
                        <a href="allservices.php">Categories</a>
                    </li>
                    <li>
                        <a href="city-options.php">City</a>
                    </li>
					                        <li class="active"><a href="contact.php">Contact</a></li>
                        <li class="active"><a href="about.php">About us</a></li>

                   
					<li>
                      <a href="login_page/user.php">  
					  <?php
					if(isset($_SESSION['username'])) {
					$usn=$_SESSION['username'];
					?><img style="vertical-align: middle;" src="images/user.png" height="30px">
					<?php
					echo $usn;
					}
					?></a>
                    </li>
					
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->




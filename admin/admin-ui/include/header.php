<?php
  session_start();
  if(isset($_SESSION['w_id']))
  {
    $w_id = $_SESSION['w_id'];
  }else
  {
    header("location:../Admin-Login/pages-login.php");

  }
  

?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Minute Maintanance</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-left">

       
      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <?php 
        
         $conn= mysqli_connect("localhost","root","","login");
 
         $sql= "select * from workers where w_id=$w_id";
         $result= mysqli_query($conn,$sql);
         if (mysqli_num_rows($result) > 0) 
         {
          while($row = mysqli_fetch_array($result)) 
          {
              $img=$row['img'];
              $name=$row['name'];
              $category=$row['category'];
              $details=$row['details'];
              $city=$row['city'];
              $phone=$row['m_num'];
              $email=$row['email'];
              $company=$row['company'];
              $job=$row['job'];
              $address=$row['address'];
          }
          mysqli_close($conn);
        }
        else{ mysqli_close($conn);}
          ?>  
          <img src="../../admin/Admin-Login/<?php echo $img;?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $name;?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $name;?></h6>
              <span><?php echo $category;?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-contact.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

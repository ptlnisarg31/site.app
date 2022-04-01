
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard -  Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

<?php include "include/header.php";?>
 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.php">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

</ul>

</aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <?php

                $conn= mysqli_connect("localhost","root","","login");
                $sql="SELECT * FROM `order` WHERE (w_id=$w_id)and(hide=0)";
                $result= mysqli_query($conn,$sql);
                $onum=mysqli_num_rows($result);


            ?>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                <!--  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start"> 
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul> -->
                </div>

                <div class="card-body">
                  <h5 class="card-title">Pending Order Request</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $onum;?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
<?php
$sql="SELECT * FROM `order` WHERE w_id=$w_id";
                $result= mysqli_query($conn,$sql);
                $ototal=mysqli_num_rows($result);
                ?>
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <!-- <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul> -->
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Order you get</h5><span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $ototal;?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <?php
                $sql="SELECT * FROM `work_done` WHERE w_id=$w_id";
                $result= mysqli_query($conn,$sql);
                $dorder=mysqli_num_rows($result);
                ?>
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <!-- <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul> -->
                </div>

                <div class="card-body">
                  <h5 class="card-title">Order Done by You </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $dorder; ?></h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
   <!-- News & Updates Traffic -->
  
    <?php
    //echo $w_id;
    // $conn= mysqli_connect("localhost","root","","login");
     $sql="SELECT * FROM `order` WHERE (w_id=$w_id)and(hide=0)";
     $result= mysqli_query($conn,$sql);
     //echo $w_id1;
    ?>


    
            <div class="card">
    
            <div class="card-body pb-0">
      <h5 class="card-title">Pending Request &amp; Updates <span>| Current</span></h5>

      <?php 
      $count=1;
     if(mysqli_num_rows($result) > 0) 
        {
          
          while($row = mysqli_fetch_array($result))
          {
            $o_id=$row['o_id'];
            $u_id=$row['u_id'];
            
            
           //s echo "w_id $w_id o_id $o_id u_id $u_id";
            ?>

            <div class="news">
            <div class="post-item clearfix">
              <img src="assets/img/messages-<?php echo $count;?>.png" alt="">
              <h4><a href="#"><?php echo $row['username'];?> Have some Work For you..</a></h4>
              
                <p><?php echo "Address : ".$row['address'];?></p>
               
              <div class="align-items-center">
              <form method="post" action='accept.php'>
                <input type="hidden"  name="u_id" value="<?php echo $u_id;  ?>">
                <input type="hidden"  name="o_id" value="<?php echo $o_id;  ?>">
                &nbsp;&nbsp;
                <button type="submit"  name="Submit" value="Accept" class="btn btn-success btn-sm">Accept</button>
                
                <button type="submit" name="Submit" value="Reject"class="btn btn-danger btn-sm">Reject</button>
                </form>
              </div>
             
            </div>
          </br>
        
    
          </div><!-- End sidebar recent posts-->
    

      <?php
        $count=$count+1;//for images of profile pic rotation count is used
       
          } 
        }
        else
        {     
          if(isset($_POST['closebtn']))
          {

          }
          else
          {
          ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i class="bi bi-check-circle me-1"></i>
                      There is no any Pending request or Update 
                      <form action="index.php" method="POST">
                      <button type="button" name="closebtn" value="1" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </form>
                    </div>
          
                  
              <?php 
        }
      }  
        if(isset($_GET['msg']))
        {
          if(isset($_POST['closebtn']))
          {
            header("location: index.php");
          }
          else
          {

          
                    
?>
      
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            <?php 
            
            echo "Message : ".$_GET['msg'];

            ?>
            <form action="index.php" method="POST">
            <a href="index.php"><button type="button" name="closemsgbtn" value="1" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
        </form>
          </div>

        
    <?php  
        }
      }
      $sql1="SELECT * FROM `accept` WHERE (`w_id`=$w_id)and(`stet`='Accept')and(done=0)";
      $result1= mysqli_query($conn,$sql1);
     
?>
           </div>
             </div>
      </div><!-- End News & Updates -->
              <!-- Recent Sales -->
              <div class="col-12">
              <div class="card recent-sales overflow-auto">

               

                <div class="card-body">
                  <h5 class="card-title">Work Tracker <span>| Recent</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <?php
                    if(mysqli_num_rows($result1) > 0) 
      {
        
        while($row1 = mysqli_fetch_array($result1))
          {
            $ao_id=$row1['o_id'];
            $sql2="SELECT * FROM `order` WHERE o_id=$ao_id ";
            $result2= mysqli_query($conn,$sql2);
            

            ?>
                    <?php
                    if(mysqli_num_rows($result2) > 0) 
            {
              
              while($row2 = mysqli_fetch_array($result2))
                {
                  $o_id2=$row1['o_id'];
                  ?>
                      <tr>
                        <th scope="row"><a href="userdetails.php?o_id=<?php echo $o_id2?>"><?php echo $row1['o_id'];?></a></th>
                        <td><a href="userdetails.php?o_id=<?php echo $o_id2?>" class="text-primary"><?php echo $row2['username']; ?></td>
                        <td><a href="userdetails.php?o_id=<?php echo $o_id2?>" class="text-primary"><?php echo $row2['address']; ?></a></td>
                        <td><?php //echo $row2['charge']; ?></td>
                        <td><a href="workdone.php?o_id=<?php echo $o_id2; ?>"><span class="badge bg-success">work done</span></a></td>
                      </tr>
                      <?php 
                      }
                      }
                          
      }
    }
                      ?>
                      
                    
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

        
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
<?php
    $sql1="SELECT * FROM `accept` WHERE (`w_id`=$w_id)and(`stet`='Accept')and(done=1)";
      $result1= mysqli_query($conn,$sql1);
     
?>
    <section class="section dashboard">
    <div class="col-12">
              <div class="card recent-sales overflow-auto">

               

                <div class="card-body">
                  <h5 class="card-title">Work Tracker <span>| Recent</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Product</th>
                        
                        
                      </tr>
                    </thead>
     <?php
        if(mysqli_num_rows($result1) > 0) 
      {
        
        while($row1 = mysqli_fetch_array($result1))
          {
            $ao_id=$row1['o_id'];
            $sql2="SELECT * FROM `order` WHERE o_id=$ao_id";
            $result2= mysqli_query($conn,$sql2);
            

            ?>
                    <?php
                    if(mysqli_num_rows($result2) > 0) 
            {
              
              while($row2 = mysqli_fetch_array($result2))
                {
                  $o_id2=$row1['o_id'];
                  ?>
                      <tr>
                        <th scope="row"><?php echo $row1['o_id'];?></th>
                        <td><?php echo $row2['username']; ?></td>
                        <td><?php echo $row2['address']; ?></a></td>
                        <td><?php //echo $row2['charge']; ?></td>
                        <!-- <td><a href="workdone.php?o_id=<?php // echo $o_id2; ?>"><span class="badge bg-success">work done</span></a></td> -->
                      </tr>
                      <?php 
                      }
                      }
                          
      }
    }
                      ?>
                      
                    
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

        
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

 
<?php include "include/footer.php";?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
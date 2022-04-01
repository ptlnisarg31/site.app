 <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">

 
  <link href="assets/css/style.css" rel="stylesheet">


</head> 

<body>
<?php include "include/header.php";?>

 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li


  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.php">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li>

</ul>

</aside>

<?php




$_GET['o_id'];

$o_id=$_GET['o_id'];
$conn= mysqli_connect("localhost","root","","login");
$sql="SELECT * from `Accept` where (`o_id`=$o_id) and ('done'=0)";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result))
  {
    $u_id = $row['u_id'];
    $w_id = $row['w_id'];
    echo $u_id;
    echo $w_id;

    $sql1="UPDATE `accept` set `done`=1 WHERE `o_id`=$o_id";
    $result=mysqli_query($conn,$sql1);

    $sql2="INSERT INTO `work_done` (`o_id`, `w_id`, `u_id`, `date`) VALUES ($o_id,$w_id, $u_id,now())";
    $result=mysqli_query($conn,$sql2);
    ?>
<section class="categories">
    <div class="container" >
    
    <h4 class="text-center"> This order is Done</h4>
    </br>
    <a href="index.php"><h3 class="text-center">Click hera to see moro order</h3></a>
    </div>
        </section>
<?php
  }
}  
else
{
 ?>
  <section class="categories">
    <div class="container" >
    
    
    
    <h4 class="text-center"> This order is Done already</h4>
    </br>
    <h3 class="text-center">GO for others</h3> </h3>
        </div>
        </section>
 <?php

} 


?>



 


  
   

 

  
    



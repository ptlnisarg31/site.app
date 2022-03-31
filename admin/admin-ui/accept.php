<?php
session_start();
$w_id = $_SESSION['w_id'];
echo "Worker ID : $w_id</br>";
$conn= mysqli_connect("localhost","root","","login");
$o_id=$_POST['o_id'];
$u_id=$_POST['u_id'];
$status=$_POST['Submit'];
$i=0;

  $sql="SELECT * from `Accept` where `o_id`=$o_id";
  $result= mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0) 
  {
    while($row = mysqli_fetch_array($result))
    {
      $i++;
      $dbstatus=$row['stet'];
    }
  }
  if($i==0)
  {
    if($status=="Accept")
    {
        $msg="Accept : id $o_id ";
    }
    else if ($status=="Reject")
    {
      $msg="Reject : id $o_id";
    }


  
    $sql="INSERT INTO `Accept` (`o_id`, `u_id`, `w_id`, `stet`) VALUES ($o_id ,$u_id, $w_id,'$status')";
    $result=mysqli_query($conn,$sql);

    $a=1;
    $sql="";
    $result="";
    $sql="UPDATE `order` set `hide`=$a WHERE `o_id`=$o_id";
    $result=mysqli_query($conn,$sql);
    //  $conn->prepare($sql)->execute();
  
  }
 
  if($i>0)
  {
    $msg=$msg."Request is already ".$dbstatus."ed";
    $a=1;
    $sql="";
    $result="";
    $sql="UPDATE `order` set `hide`=$a WHERE `o_id`=$o_id";
    $result=mysqli_query($conn,$sql);
  }

 

   header("location: index.php?msg=$msg");

    

?>



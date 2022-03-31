<?php
session_start();
if(isset($_SESSION['w_id']))
{
  $w_id = $_SESSION['w_id'];


  if(isset($_GET['acdelete']))
  {
    if($_GET['acdelete']==$w_id)
    {
      if(isset($conn))
      {
        mysqli_close($conn);
      }
    
     $conn= mysqli_connect("localhost","root","","login");
          $SQLUpdate="UPDATE `workers` set `delete`=1 WHERE `w_id`=$w_id";
          $result=mysqli_query($conn,$SQLUpdate);
        
        //  if(!$result || mysqli_num_rows($result) == 0){
          if($result==true)
          {
             //   $rows = mysqli_num_rows($result);
        
            mysqli_close($conn);
          // $stmt=$conn->prepare($SQLUpdate);
        //   $stmt->execute();
        //   $conn->connection = null;
           session_destroy();
              header("location:../Admin-Login/pages-login.php?msg=successfully deleted your account");
          
      
    //$conn->connection = null;
        
    }
    }
    else {
      echo "Sorry, there was an error deleting your account $name";
    
    }
  
  }


}
else
{
  header("location:../Admin-Login/pages-login.php");

}


?>
  
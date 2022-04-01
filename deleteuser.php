<?php
session_start();
if(isset($_SESSION['id']))
{
  $u_id = $_SESSION['id'];
  $name = $_SESSION['username'];
echo $u_id;

  if(isset($_GET['acdelete']))
  {
    if($_GET['acdelete']==$u_id)
    {
      if(isset($conn))
      {
        mysqli_close($conn);
      }
    
     $conn= mysqli_connect("localhost","root","","login");
          $SQLUpdate="UPDATE `users` set `delete`=1 WHERE `id`=$u_id";
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
           echo "<script>alert('successfully deleted your account')</script>";
           echo "<script>location.href='login_page/index.php'</script>";
         
           
            // header("location: login_page/index.php?msg=successfully deleted your account");
          
      
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
  header("location: login_page/index.ph ");

}


?>
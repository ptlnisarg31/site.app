
<?php
if(isset($_POST['order']))
{
$conn= mysqli_connect("localhost","root","","login");
$o_id=$_POST['order'];

    $sql="SELECT * FROM `accept` WHERE `o_id`=$o_id";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0)
    {
    
        while($row=mysqli_fetch_array($result))
        {
         
            $w_id=$row['w_id'];
            $o_id=$row['o_id'];
            $status=$row['stet'];
            $done=$row['done'];
          
           if($done==1)
           {
              $msg="Work is Done";
           }
           elseif($done==0)
           {
            $msg="Your work is ".$status."ed";
           }
        }
       
    }
    else
    {
        $msg="Your work is currently on pending list !!";
    }
   // echo $msg;
    header("location:trackstatus.php?msg=$msg&id=$o_id");

}
else{
header('location:trackstatus.php');

}
?>

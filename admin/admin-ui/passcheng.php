<?php
session_start();
$pass=$_POST['password'];
$newpass=$_POST['newpassword'];
$repass=$_POST['renewpassword'];
require_once '../Admin-Login/db_connect.php';
$username = $_SESSION['username1'];
echo $username;
if($newpass==$repass)
{
try {
    $SQLQuery = "SELECT * FROM workers WHERE (username = :username) and (`delete`=0)";
    $statement = $conn->prepare($SQLQuery);
    $statement->execute(array(':username' => $username));
    while($row = $statement->fetch()) {
        $w_id = $row['w_id'];
        echo $w_id;
        $hashed_password = $row['password'];
        $dbusername = $row['username'];

        if(password_verify($pass, $hashed_password)) {
            $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);
            $conn= mysqli_connect("localhost","root","","login");
            $sql = "UPDATE `workers` SET `password`='$hashed_password' WHERE w_id=$w_id";
            $result= mysqli_query($conn,$sql);
            echo $newpass;
          
          }
          else {
            $error = "Invalid  password";
          }

    }  
  }
  catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
else
{
    echo "pls enter sema New Password and Re-enter New Password";
}
?>
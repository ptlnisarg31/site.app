<?php
session_start();
$pass=$_POST['password'];
$newpass=$_POST['newpassword'];
$repass=$_POST['renewpassword'];
require_once 'login_page/db_connect.php';
$username = $_SESSION['username'];
echo $username;
if($newpass==$repass)
{
try {
    $SQLQuery = "SELECT * FROM users WHERE (username = :username) and (`delete`=0) ";
    $statement = $conn->prepare($SQLQuery);
    $statement->execute(array(':username' => $username));
    while($row = $statement->fetch()) {
        $u_id = $row['id'];
        echo $u_id;
        $hashed_password = $row['password'];
        $dbusername = $row['username'];

        if(password_verify($pass, $hashed_password)) {
            $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);
            $conn= mysqli_connect("localhost","root","","login");
            $sql = "UPDATE `users` SET `password`='$hashed_password' WHERE id=$u_id";
            $result= mysqli_query($conn,$sql);
            echo $newpass;
          
          }
          else {
           echo  $error = "Invalid  password";
          }

    }  
  }
  catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
else
{

    echo "pls enter same New Password and Re-enter New Password";
}
?>
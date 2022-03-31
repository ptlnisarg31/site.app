<!DOCTYPE html>
<?php
require_once 'include/odarid.php';
require_once 'login_page/db_connect.php';


session_start();
$U_id = $_SESSION['id'];
$qty=$_POST['qty'];
$name=$_POST['full-name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$id=$_GET['W_id'];
$o_id=$O_id;

try{
$sql="INSERT INTO `order` (`username`, `email`, `o_id`, `phone_num`, `u_id`, `w_id`, `address`, `date`) VALUES ('$name', ' $email', $o_id, $contact, $U_id, $id, ' $address', now())";
$d=1;
$conn->prepare($sql)->execute();}
         
catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}


echo "your oder id is $o_id";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
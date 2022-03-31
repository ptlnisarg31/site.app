<?php
session_start();
$w_id = $_SESSION['id'];
echo $w_id;
require_once '../Admin-Login/db_connect.php';
$o_id = $_POST['o_id'];
$u_id = $_POST['u_id'];
$value = $_POST['Accept'];
$value1 = $_POST['Reject'];

if ($value == 'Accept')
{
    try{
        $sql="INSERT INTO `Accept` (  `o_id`, `u_id`, `w_id`, `stet`) VALUES (  $o_id , $u_id, $w_id, ' $value')";
        $d=1;
        $conn->prepare($sql)->execute();}
                 
        catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        
 
}
else if ($value1 == 'Reject')
{
    try{
        $sql="INSERT INTO `Accept` (  `o_id`, `u_id`, `w_id`, `stet`) VALUES (  $o_id , $u_id, $w_id, ' $value1')";
        $d=1;
        $conn->prepare($sql)->execute();}
                 
        catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
}

?>
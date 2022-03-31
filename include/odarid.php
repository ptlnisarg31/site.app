<?php
 

 $conn= mysqli_connect("localhost","root","","login");
$sql="SELECT * FROM `order`";
$result=mysqli_query($conn,$sql);

function random_strings($length_of_string)
{
 
    // String of all alphanumeric character
    $str_result = '0123456789';
 
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result),0, $length_of_string);
}
 

$O_id = random_strings(5);
 

 

 
?>
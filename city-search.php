<?php
include 'login_page/session.php';
$city=$_POST['search'];
if($city==="Surat" or $city==="surat")
{
	$_SESSION['selected_city'] = "Surat";
	header("location: city.php?city=Surat");
}
else if($city==="Bhavnagar" or $city==="bhavnagar")
{
	$_SESSION['selected_city'] = "Bhavnagar";
	header("location: city.php?city=Bhavnagar");
}
else if($city==="Ahmedabad" or $city==="ahmedabad")
{
	$_SESSION['selected_city'] = "Ahmedabad";
	header("location: city.php?city=Ahmedabad");
}
else if($city==="Mumbai" or $city==="mumbai")
{
	$_SESSION['selected_city'] = "Mumbai";
	header('location: city.php?city=Mumbai');
}
else
{
	header("location: city-options.php");
}
?>
<?php
session_start();
$u_id=$_SESSION['id'];
// echo $u_id;

require_once 'login_page/db_connect.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// echo $name;
// echo $phone;
// echo $email;
try {
                    $SQLUpdate = "UPDATE users set `username`='$name', `m_num`='$phone',`email`='$email' WHERE id=$u_id";

//$u_id = $_POST['id'];

// echo $name;
// echo $phone;
// echo $email;
            try {
                    $SQLUpdate = "UPDATE users set `username`='$name',`m_num`='$phone',`email`='$email' WHERE id=$u_id";

                    

                    $statement = $conn->prepare($SQLUpdate);
                    $statement->execute();
                    $conn->connection = null;
                    if($statement->rowCount() == 1) 
                    {
                        $_SESSION['username']=$name;
                        header("location:user1.php?msg=successfully_edited");
                    
                    }
                    else
                    {
                        echo "Error";
                    }
                }
            }
                catch (PDOException $e) 
                {
                    echo "Error: " . $e->getMessage();
                }

                ?>
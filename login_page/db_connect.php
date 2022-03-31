<?php


$dsn = 'mysql:host=localhost; dbname=login';

try {

  $conn = new PDO($dsn,'root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>

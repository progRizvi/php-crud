<?php

$host = "localhost";
$user = "rizvi";
$pass = "Rizvi@2976";
$db = "php-crud";
$conn = new mysqli($host, $user, $pass, $db);

if(!$conn){
  die(mysqli_error($conn));
}
?>
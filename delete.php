<?php

include_once("connect.php");

if(isset($_GET["deleteId"])){
  $id  = $_GET["deleteId"];
  $sql = "delete from `crud` where id=$id";

  $result = mysqli_query($conn, $sql);

  if($result){
    header('location: index.php');
  }
  else{
    
  }
}
?>
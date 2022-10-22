<?php
include("header.php");
include("connect.php");

$id;
if(isset($_GET["updateId"])){
  $id = $_GET["updateId"];
  $sql = "SELECT * FROM `crud` WHERE Id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
}

if(isset($_POST["submit"])){
  $name = $_POST['name'] ;
  $email = $_POST['email'] ;
  $mobile = $_POST['mobile'] ;
  $pass = $_POST['password'] ;

  $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$pass' where Id=$id";
  $result = mysqli_query($conn, $sql);

  if($result) header("location: index.php");

}
?>
<div class="container mt-5">
  <h2 class="mb-3">Update User</h2>
  <hr>
  <form method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $row["name"]?>">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $row["email"]?>">
    </div>
    <div class="mb-3">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" name="mobile" autocomplete="off" value="<?php echo $row["mobile"]?>">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" name="password" autocomplete="off" value="<?php echo $row["password"]?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </form>
</div>
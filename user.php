<div class="container mt-5">
  <a href="./index.php" class="btn btn-info mb-4">Back</a>
  <form method="Post" action="">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" autocomplete="off">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="mb-3">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" name="mobile" autocomplete="off">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

<?php include_once("./header.php"); 
require_once("./connect.php");



if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $pass = $_POST["password"];


  
  $sql = "INSERT INTO `crud`(name,email,mobile,password) values('$name', '$email', '$mobile','$pass')";

  $result = mysqli_query($conn, $sql);
  var_dump($result);
  if($result){
    header("location: index.php");

  }else{
    die(mysqli_error($conn));
  }
}
?>
<?php include_once("./footer.php"); ?>
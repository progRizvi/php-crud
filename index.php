<?php include_once("./header.php");
include_once("./connect.php");

$sql = 'SELECT * FROM crud';
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5">
  <a href="./user.php" class="btn btn-outline-primary mb-3">Add User</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Password</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>".
        "<td>{$row["name"]}</td>".
        "<td>{$row["email"]}</td>".
        "<td>{$row["mobile"]}</td>".
        "<td>{$row["password"]}</td>".
        "<td>".
          "<button class='btn'><a href='update.php?updateId={$row['Id']}' class='btn btn-warning'>Update</a></button>".
          "<button class='btn' name='deleteId'><a class='btn btn-danger' href='delete.php?deleteId={$row["Id"]}'>Delete</a></button>".
        "</td>".
      "</tr>";
      }
      ?>

    </tbody>
  </table>
</div>

<?php include_once("./footer.php") ?>
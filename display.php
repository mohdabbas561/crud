<?php

include 'connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operations</title>
  </head>
  <body>
    <div class="container">
    <button type="button" class="btn btn-primary my-5"><a href="user.php" class="text-light">
      Add User</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
   <?php

$sql = "select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $number=$row['number'];
    echo '

    <tr>
      <td>'.$name.'</th>
      <td>'.$email.'</td>
      <td>'.$number.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button> 
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
    </tr>
    
    ';
  }
}


   ?>
  </tbody>
</table>
    </div>
  </body>
</html>
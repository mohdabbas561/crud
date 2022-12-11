<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    $sql="insert into `crud` (name,email,number) values ('$name' , '$email' , '$number')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}




?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Enter Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Enter Number</label>
    <input type="number" class="form-control" name="number">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>
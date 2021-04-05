

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>

<link rel="stylesheet" href="css/bootstrap5.css">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/custom.css"> -->
<link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <div class="bgimg">
       

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2>Car Rental</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addreturn.php">Return</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adduser.php">User</a>
        </li>
        
      </ul>
    </div>
    <a type="button" class="btn btn-outline-info" href="index.php">Logout</a>

  </div> -->
</nav>
</header> 
<br>
        <div class="container">

<?php 
include "includes/dbconfig.php";


if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM user where username='$username' and pass='$password'";
    // $result=mysqli_query($sql,$dbconn);
    $result = $dbconn->query($sql);

    if(mysqli_num_rows($result)==0)
    echo "login failed";
    else
    header("Location:home.php");
}


?>

<div class="row">
<div class="col-4">
<div class="container container-stl"> 


<form action="" method="POST">
  <fieldset>
    <h2>Login Form</h2>
    <label for="username" class="form-label">User Name:</label><br>
    <input type="text" name="username" class="form-control">
    <br>
    <label for="password" class="form-label">Password:</label><br>
    <input type="password" name="password" class="form-control">
    <br><br>
    <input type="submit" name="login" value="Login" class="btn btn-primary"><br><br>
  </fieldset>
</form>

</div>
</div>
</div>

<?php include 'includes/footer.php';?>
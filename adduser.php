<?php include 'includes/header.php';?>
<h1>Manage Users </h1>
<br>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['submit'])) {
		
		$fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        
		

		$sql = "INSERT INTO `user`(`fullname`, `email`, `phno`,`username`,`pass`) VALUES ('$fullname','$email','$phno','$username','$pass')";


		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}
    else{
			echo "Error insertttt:". $sql . "<br>". $dbconn->error;
		}
  
		//$dbconn->close();
    mysqli_close($dbconn);

	}
 // $dbconn->close();


?>


<div class="row">
<div class="col-4">
<div class="container container-stl"> 


<form action="" method="POST">
  <fieldset>
    <legend>Add a New User</legend>
    <label class="form-label">Full Name:</label><br>
    <input type="text" name="fullname" class="form-control">
    <br>
    <label class="form-label">Email:</label><br>
    <input type="text" name="email" class="form-control">
    <br>
    <label class="form-label">Phone No:</label><br>
    <input type="text" name="phno" class="form-control">
    <br>
    <label class="form-label">User Name:</label><br>
    <input type="text" name="username" class="form-control">
    <br>
    <label class="form-label">Password:</label><br>
    <input type="password" name="pass" class="form-control">
    <br>
    
    
    <br><br>
    <input type="submit" name="submit" value="Add" class="btn btn-primary"><br><br>
  </fieldset>
</form>

</div>
</div>

<div class="col-8">
<div class="container container-stl">

<?php include 'viewuserdata.php';?>

</div>
</div>
</div>

<?php include 'includes/footer.php';?>

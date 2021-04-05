<?php include 'includes/header.php';?>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['update'])) {
		$userid=$_POST['userid'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
		

		$sql = "UPDATE `user` SET `fullname`='$fullname',`email`='$email',`phno`='$phno',`username`='$username',`pass`='$pass' WHERE `userid`='$userid'";

		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $dbconn->error;
		}
	}


if (isset($_GET['userid'])) {
	$userid = $_GET['userid'];

	$sql = "SELECT * FROM `user` WHERE `userid`='$userid'";

	$result = $dbconn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
			$fullname = $row['fullname'];
            $email = $row['email'];
            $phno = $row['phno'];
            $username = $row['username'];
            $pass = $row['pass'];
            $userid = $row['userid'];
		}

	?>




<div class="row">
<div class="col-4">
<div class="container container-stl">
		
		<form action="" method="post">
		  <fieldset>
		    <legend>Update the user </legend>
		    
		    <input type="hidden" name="userid" class="form-control" value="<?php echo $userid; ?>">
		    <br>
		    
            <label class="form-label">Full Name:</label><br>
            <input type="text" name="fullname" class="form-control" value="<?php echo $fullname; ?>">
            <br>
            <label class="form-label">Email:</label><br>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
            <br>
            <label class="form-label">Phone No:</label><br>
            <input type="text" name="phno" class="form-control" value="<?php echo $phno; ?>">
            <br>
            <label class="form-label">User Name:</label><br>
            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
            <br>
            <label class="form-label">Password:</label><br>
            <input type="password" name="pass" class="form-control" value="<?php echo $pass; ?>">
            
            
            
		    <br>
		    
		    
		    <input type="submit" value="Update" name="update" class="btn btn-info"><br><br>
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



		

		<!-- </body>
		</html> -->




	<?php
	} else{
		header('Location: index.php');
	}

}
?>



<?php include 'includes/footer.php';?>

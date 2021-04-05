<?php include 'includes/header.php';?>
<h1>Manage Cars </h1>
<br>


<?php 
include "includes/dbconfig.php";

	if (isset($_POST['submit'])) {
		$carnumber = $_POST['carnumber'];
		$carmodel = $_POST['carmodel'];
		$available = $_POST['available'];
		

		$sql = "INSERT INTO `car`(`carnumber`, `carmodel`, `available`) VALUES ('$carnumber','$carmodel','$available')";


		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}
    else{
		//	echo "Error insertttt:". $sql . "<br>". $dbconn->error;
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
    <legend>Add a New Car</legend>
    <label for="carnumber" class="form-label">Car Number:</label><br>
    <input type="text" name="carnumber" class="form-control">
    <br>
    <label for="carmodel" class="form-label">Car Model:</label><br>
    <input type="text" name="carmodel" class="form-control">
    <br>
    
    <label for="available" class="form-label">Availability:</label><br>
    <input type="radio" class="form-check-input mt-0" name="available" value="yes">Yes
    <input type="radio" class="form-check-input mt-0" name="available" value="no">No
    <br><br>
    <input type="submit" name="submit" value="Add" class="btn btn-primary"><br><br>
  </fieldset>
</form>

</div>
</div>

<div class="col-8">
<div class="container container-stl">

<?php include 'viewdata.php';?>

</div>
</div>
</div>

<?php include 'includes/footer.php';?>

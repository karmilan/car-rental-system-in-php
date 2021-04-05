<?php include 'includes/header.php';?>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['update'])) {
		$carid = $_POST['carid'];
        $carnumber = $_POST['carnumber'];
		$carmodel = $_POST['carmodel'];
		$available = $_POST['available'];
		

		$sql = "UPDATE `car` SET `carnumber`='$carnumber',`carmodel`='$carmodel',`available`='$available' WHERE `carid`='$carid'";

		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $dbconn->error;
		}
	}


if (isset($_GET['carid'])) {
	$carid = $_GET['carid'];

	$sql = "SELECT * FROM `car` WHERE `carid`='$carid'";

	$result = $dbconn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
			$carnumber = $row['carnumber'];
            $carmodel = $row['carmodel'];
            $available = $row['available'];
            $carid = $row['carid'];
		}

	?>




<div class="row">
<div class="col-4">
<div class="container container-stl">
		
		<form action="" method="post">
		  <fieldset>
		    <legend>Update the Car </legend>
		    <label class="form-label">Car Number:<br></label>
		    <input type="text" name="carnumber" class="form-control" value="<?php echo $carnumber; ?>">
		    <input type="hidden" name="carid" class="form-control" value="<?php echo $carid; ?>">
		    <br>
		    <label class="form-label">Car Model:<br></label>
		    <input type="text" name="carmodel" class="form-control" value="<?php echo $carmodel; ?>">
		    <br>
		    
		    
		    <label class="form-label">Availability:<br></label>
		    <input type="radio" name="available" class="form-check-input mt-0" value="yes" <?php if($available == 'yes'){ echo "checked";} ?> >Yes
		    <input type="radio" name="available" class="form-check-input mt-0" value="no" <?php if($available == 'no'){ echo "checked";} ?>>No
		    <br><br>
		    <input type="submit" value="Update" name="update" class="btn btn-info"><br><br>
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



		

		<!-- </body>
		</html> -->




	<?php
	} else{
		header('Location: index.php');
	}

}
?>



<?php include 'includes/footer.php';?>

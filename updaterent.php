<?php include 'includes/header.php';?>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['update'])) {
		$rentid = $_POST['rentid'];
        $custname = $_POST['custname'];
		$custnic = $_POST['custnic'];
		$custpno = $_POST['custpno'];
        $car_number = $_POST['car_number'];
        $days = $_POST['days'];
		$amount=$_POST['days']*10;
		

		$sql = "UPDATE `rent` SET `custname`='$custname',`custnic`='$custnic',`custpno`='$custpno',`car_number`='$car_number',`days`='$days',`amount`='$amount' WHERE `rentid`='$rentid'";

		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $dbconn->error;
		}
	}


if (isset($_GET['rentid'])) {
	$rentid = $_GET['rentid'];

	$sql = "SELECT * FROM `rent` WHERE `rentid`='$rentid'";

	$result = $dbconn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
			$custname = $row['custname'];
            $custnic = $row['custnic'];
            $custpno = $row['custpno'];
            $car_number = $row['car_number'];
            $days = $row['days'];
            $rentid = $row['rentid'];
		}

	?>




<div class="row">
<div class="col-4">
<div class="container container-stl">
		
		<form action="" method="post">
		  <fieldset>
		    <legend>Update the Rent Details </legend>
		    <label class="form-label">Customer Name:<br></label>
		    <input type="text" name="custname" class="form-control" value="<?php echo $custname; ?>">

		    <input type="hidden" name="rentid" class="form-control" value="<?php echo $rentid; ?>">
		    <br>
		    <label class="form-label">NIC/License No:<br></label>
		    <input type="text" name="custnic" class="form-control" value="<?php echo $custnic; ?>">
		    <br>
		    <label class="form-label">Phone No:<br></label>
		    <input type="text" name="custpno" class="form-control" value="<?php echo $custpno; ?>">

            <label class="form-label">Car No:<br></label>
		    <input type="text" name="car_number" class="form-control" value="<?php echo $car_number; ?>">

            <label class="form-label">Days:<br></label>
		    <input type="text" name="days" class="form-control" value="<?php echo $days; ?>">
	
		    <br><br>
		    <input type="submit" value="Update" name="update" class="btn btn-info">
			<a type="button" class="btn btn-secondary" href="viewrentdata.php">Vew All Rental Details >></a>
			<br><br>
		  </fieldset>
		</form>

</div>
</div>

<div class="col-8">
<div class="container container-stl">
<?php include 'availablecar.php';?>

</div>
</div>

</div>

		

		<!-- </body>
		</html> -->




	<?php
	} else{
		header('Location: viewdata.php');
	}

}
?>
<?php include 'includes/footer.php';?>

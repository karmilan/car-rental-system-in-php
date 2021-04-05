<?php include 'includes/header.php';?>
<h1>Manage Rents </h1>
<br>
<?php 
include "includes/dbconfig.php";

	if (isset($_POST['submit'])) {
		$custname = $_POST['custname'];
		$custnic = $_POST['custnic'];
		$custpno = $_POST['custpno'];
    $car_number = $_POST['car_number'];
    $days = $_POST['days'];
    $amount=$_POST['days']*1000;
   // $payment=$_POST[$days*1000];
      //  $rentid = $_POST['rentid'];
		
    // $sql = "INSERT INTO `rent`(`custname`, `custnic`, `custpno`,`car_number`,`days`) VALUES ('$custname','$custnic','$custpno', '$car_number','$day', SELECT `carnumber` FROM `car`))"; 

		$sql = "INSERT INTO `rent`(`custname`, `custnic`, `custpno`,`car_number`,`days`,`amount`) VALUES ('$custname','$custnic','$custpno','$car_number','$days','$amount')";


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
    <legend>Add a New Rental</legend>
    <label  class="form-label">Customer Name:</label><br>
    <input type="text" name="custname" class="form-control">
    <br>
    <label  class="form-label">NIC/License No:</label><br>
    <input type="text" name="custnic" class="form-control">
    <br>
    <label class="form-label">Phone No:</label>
    <input type="text" name="custpno" class="form-control">
    <br>
    <label class="form-label">Car Number:</label>
    <input type="text" name="car_number" class="form-control">    
    <br>
    <label class="form-label">Days:</label>
    <input type="text" name="days" class="form-control">
    <br>

    <!-- <label class="form-label">Amount:</label>
    <input type="text" name="amount" class="form-control" value="">
    <br> -->


    <input type="submit" name="submit" value="Add" class="btn btn-primary">
    <a type="button" class="btn btn-secondary" href="viewrentdata.php">Vew All Rental Details >></a>

    <br><br>
  </fieldset>
</form>

</div>
</div>
<div class="col">
<div class="container container-stl"> 

<?php include 'availablecar.php';?>
</div>
</div>
</div>
<br><br>



<?php include 'includes/footer.php';?>
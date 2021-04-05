<?php include 'includes/header.php';?>
<h1>hello rent </h1>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['submit'])) {
		$custname = $_POST['custname'];
		$custnic = $_POST['custnic'];
		$custpno = $_POST['custpno'];
        $car_number = $_POST['car_number'];
        $days = $_POST['days'];
      //  $rentid = $_POST['rentid'];
		

		$sql = "INSERT INTO `rent`(`custname`, `custnic`, `custpno`,`car_number`,`days`) VALUES ('$custname','$custnic','$custpno','$car_number','$days')";


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
    <label  class="form-label">Customer Name:</label><br>
    <input type="text" name="custname" class="form-control">
    <br>
    <label  class="form-label">NIC/License No:</label><br>
    <input type="text" name="custnic" class="form-control">
    <br>
    <label class="form-label">Phone No:</label><br>
    <input type="text" name="custpno" class="form-control">
    <br>
    <label class="form-label">Car Number:</label><br>
    <select name="" id="">
    $sql="SELECT carid,carnumber FROM car"; 

    echo '<select name=car value='Car Number'>';
    foreach ($dbconn->query($sql) as $row){ 

    echo '<option value=$row[carid]>$row[carnumber]

    </option>';}
    echo '</select>';
    <!-- </select> -->
        <!-- <input type="text" name="car_number" class="form-control"> -->
    <br>
    
    <label class="form-label">Days:</label><br>
    <input type="text" name="days" class="form-control">
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
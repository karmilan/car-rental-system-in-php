<?php include 'includes/header.php';?>
<h1>Manage Returned Cars </h1>
<br>
<?php 
include "includes/dbconfig.php";

	if (isset($_POST['submit'])) {
		$rent_id = $_POST['rent_id'];
        
		
		
		

		$sql = "INSERT INTO `carreturn`(`rent_id`) VALUES ('$rent_id')";


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
    <legend>Add Returned Cars</legend>
    <label  class="form-label">Rent ID:</label><br>
    <input type="text" name="rent_id" class="form-control">
    <br>

    

    
    <br><br>
    <input type="submit" name="submit" value="Add" class="btn btn-primary">
	<a type="button" class="btn btn-secondary" href="viewrentdata.php">Vew All Rental Details >></a>
  </fieldset>
</form>

</div>
</div>

<div class="col-8">
<div class="container container-stl">

<?php include 'viewreturndata.php';?>

</div>
</div>
</div>

<?php include 'includes/footer.php';?>
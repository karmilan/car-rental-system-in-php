
<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM car";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Cars for Rental</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Car Number</th>
		<th>Car Model</th>
		<th>Availability</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['carnumber']; ?></td>
					<td><?php echo $row['carmodel']; ?></td>
					<td><?php echo $row['available']; ?></td>
					
					<td><a class="btn btn-info"  href="update.php?carid=<?php echo $row['carid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?carid=<?php echo $row['carid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>

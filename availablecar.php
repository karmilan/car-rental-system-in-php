
<?php 
include "includes/dbconfig.php";

// $sql = "SELECT * FROM car";
$sql = "SELECT * FROM car where available ='yes'";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Cars for Rental</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Car Number</th>
		<th>Car Model</th>
		
		
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
						</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>

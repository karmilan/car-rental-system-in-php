
<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM carreturn";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Returned Cars Details</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Rent ID</th>
		
		<th>Returned Time</th>
        
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['rent_id']; ?></td>
					
					<td><?php echo $row['returnedtime']; ?></td>
                    
					<td>
					<a class="btn btn-danger" href="deletereturn.php?returnid=<?php echo $row['returnid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>

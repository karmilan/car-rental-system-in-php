<?php include 'includes/header.php';?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM rent";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Rent Details</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Rental ID</th>
		<th>Customer Name</th>
		<th>NIC/License No</th>
		<th>Phone No</th>
        <th>Car No</th>
        <th>Rental Days</th>
        <th>Registration Time</th>
		<th>Amount(LKR)</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['rentid']; ?></td>
					<td><?php echo $row['custname']; ?></td>
					<td><?php echo $row['custnic']; ?></td>
					<td><?php echo $row['custpno']; ?></td>
                    <td><?php echo $row['car_number']; ?></td>
                    <td><?php echo $row['days']; ?></td>
                    <td><?php echo $row['regtime']; ?></td>
					<td><?php echo $row['amount']; ?></td>
					
					<td><a class="btn btn-info"  href="updaterent.php?rentid=<?php echo $row['rentid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deleterent.php?rentid=<?php echo $row['rentid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
	<?php include 'includes/footer.php';?>

</body>
</html>

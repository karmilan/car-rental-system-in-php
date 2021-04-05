
<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM user";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Users</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Full Name</th>
		<th>Email</th>
		<th>Phone No</th>
        <th>User Name</th>
        
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['fullname']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phno']; ?></td>
                    <td><?php echo $row['username']; ?></td>
					
					<td><a class="btn btn-info"  href="updateuser.php?userid=<?php echo $row['userid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deleteuser.php?userid=<?php echo $row['userid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>

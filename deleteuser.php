<?php 
include "includes/dbconfig.php";

if (isset($_GET['userid'])) {
	$userid = $_GET['userid'];

	$sql = "DELETE FROM `user` WHERE `userid`='$userid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>
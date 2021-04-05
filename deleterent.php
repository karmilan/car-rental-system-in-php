<?php 
include "includes/dbconfig.php";

if (isset($_GET['rentid'])) {
	$rentid = $_GET['rentid'];

	$sql = "DELETE FROM `rent` WHERE `rentid`='$rentid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>
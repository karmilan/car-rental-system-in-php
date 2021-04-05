<?php 
include "includes/dbconfig.php";

if (isset($_GET['returnid'])) {
	$returnid = $_GET['returnid'];

	$sql = "DELETE FROM `carreturn` WHERE `returnid`='$returnid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>
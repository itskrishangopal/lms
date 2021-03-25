<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);



	$susn = $_GET['rn'];

	$sql = "DELETE FROM studentdetails WHERE susn='$susn'";
	$res = mysqli_query($conn,$sql);

	if($res) {
		echo "Record deleted successfully";
	}
	else {
		echo "Error while deleting";
	}
?>
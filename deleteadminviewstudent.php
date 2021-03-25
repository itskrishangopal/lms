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
		$query = "DROP TABLE $susn";
		mysqli_query($conn,$query);
		header("location: adminviewstudent.php");
	}
	else {
		echo "Error while deleting";
	}
?>
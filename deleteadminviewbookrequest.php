<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);



	$rbid = $_GET['rn'];

	$sql = "DELETE FROM bookrequest WHERE rbid='$rbid'";
	$res = mysqli_query($conn,$sql);

	if($res) {
		header("location: adminviewbookrequest.php");
	}
	else {
		echo "Error while deleting";
	}
?>
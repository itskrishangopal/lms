<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$bid = $_GET['rn'];
	
session_start();

$sql1 ="INSERT INTO viewissuedbooks (issueto,bid,bname,bauthor,yop) SELECT issueto,bid,bname,bauthor,yop FROM bookissue WHERE bid='$bid'";
mysqli_query($conn,$sql1);

$sql = "SELECT issueto FROM viewissuedbooks WHERE bid='$bid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($res);

$sql2 = "UPDATE $row[0] SET approve = 'Issued' WHERE bid='$bid'";
mysqli_query($conn,$sql2);

$sql3 = "DELETE FROM bookissue WHERE bid='$bid'";
mysqli_query($conn,$sql3);

header("location: adminissuebook.php");

?>
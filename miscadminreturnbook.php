<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$bid = $_GET['rn'];
	
session_start();

$sql4 = "INSERT INTO bookdetails (bid,bname,bauthor,yop) SELECT bid,bname,bauthor,yop FROM viewissuedbooks WHERE bid='$bid'";
mysqli_query($conn,$sql4);
	



$sql = "SELECT issueto FROM viewissuedbooks WHERE bid='$bid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($res);

$sql6 = "DELETE FROM $row[0] WHERE bid='$bid'";
mysqli_query($conn,$sql6);

$query2 = "DELETE FROM bookreturn WHERE bid='$bid'";
mysqli_query($conn,$query2);

$sql5 = "DELETE FROM viewissuedbooks WHERE bid='$bid'";
mysqli_query($conn,$sql5);

header("location: adminreturnbook.php");

?>
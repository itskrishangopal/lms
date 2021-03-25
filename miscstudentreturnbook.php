<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$bid = $_GET['rn'];
	
session_start();

$sql = "SELECT approve FROM ".$_SESSION['susn']." WHERE bid='$bid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($res);

if($row[0] == 'Not Yet Issued') {
	$sql1 = "INSERT INTO bookdetails (bid,bname,bauthor,yop) SELECT bid,bname,bauthor,yop FROM ".$_SESSION['susn']." WHERE bid='$bid'";
	mysqli_query($conn,$sql1);

	$sql2 = "DELETE FROM ".$_SESSION['susn']." WHERE bid='$bid'";
	mysqli_query($conn,$sql2);

	$sql3 = "DELETE FROM bookissue WHERE bid='$bid'";
	mysqli_query($conn,$sql3);

	echo '<script>alert("Book returned successfully.")</script>';
}

else if($row[0] == 'Issued'){
	//$sql4 = "INSERT INTO bookdetails (bid,bname,bauthor,yop) SELECT bid,bname,bauthor,yop FROM ".$_SESSION['susn']." WHERE bid='$bid'";
	//mysqli_query($conn,$sql4);

	$sqln = "INSERT INTO bookreturn (returnby,bid,bname,bauthor,yop) SELECT issueto,bid,bname,bauthor,yop FROM viewissuedbooks WHERE bid='$bid'";
	mysqli_query($conn,$sqln);

	$sql4 = "UPDATE ".$_SESSION['susn']." SET approve = 'Not Yet Returned' WHERE bid='$bid'";
	mysqli_query($conn,$sql4);

	//$sql5 = "DELETE FROM viewissuedbooks WHERE bid='$bid'";
	//mysqli_query($conn,$sql5);

	//$sql6 = "DELETE FROM ".$_SESSION['susn']." WHERE bid='$bid'";
	//mysqli_query($conn,$sql6);

	echo '<script>alert("Book return request sent successfully. Please return the book to Library ASAP.")</script>';

	
}

else {
	echo '<script>alert("Book return request already sent. Please return the book to Library ASAP.")</script>';
}

	//header("location: studentreturnbook.php");
?>
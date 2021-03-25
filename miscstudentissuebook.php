<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$bid = $_GET['rn'];
	
session_start();

$sql1 = "SELECT bid FROM ".$_SESSION['susn']."";
$result = mysqli_query($conn,$sql1);



/*$sq1 = "SELECT bname FROM ".$_SESSION['susn'];
$r = mysqli_query($conn,$sq1);
$row = mysqli_fetch_row($r);

$sq2 = "SELECT bname FROM bookdetails WHERE bid='$bid'";
$re = mysqli_query($conn,$sq2);

if(mysqli_num_rows($re) > 0) {
	while ($rowx = mysqli_fetch_assoc($re)) {
		$l = $rowx['bname'];
		if($l == $row[0]) {
			echo '<script>alert("Success!!")</script>';
		}
	}
}
*/




$sq2 = "SELECT bname FROM bookdetails WHERE bid='$bid'";
$re = mysqli_query($conn,$sq2);
$row = mysqli_fetch_row($re);

$sq1 = "SELECT bname FROM ".$_SESSION['susn'];
$r = mysqli_query($conn,$sq1);



if(mysqli_num_rows($r) > 0) {
	while ($rowx = mysqli_fetch_assoc($r)) {
		$l = $rowx['bname'];
		if($l == $row[0]) {
			echo '<script>alert("This book has already been issued to you.")</script>';
			exit();
		}
	}
}

/*$i = 0;
while($i!=5) {
	if($row[1] == $row2[0]) {
		echo '<script>alert("Success!!")</script>';
	//	exit();
	}

	$i = $i + 1;

}*/



if ($result->num_rows < 5) {
	
	$sql2 = "INSERT INTO bookissue (bid,bname,bauthor,yop) SELECT bid,bname,bauthor,yop FROM bookdetails WHERE bid='$bid'";
	mysqli_query($conn,$sql2);

	$sql3 = "UPDATE bookissue SET issueto = '".$_SESSION['susn']."' WHERE bid='$bid'";
	mysqli_query($conn,$sql3);

	$sql4 = "INSERT INTO ".$_SESSION['susn']." (bid,bname,bauthor,yop) SELECT bid,bname,bauthor,yop FROM bookdetails WHERE bid='$bid'";
	mysqli_query($conn,$sql4);

	$sql5 = "UPDATE ".$_SESSION['susn']." SET approve = 'Not Yet Issued' WHERE bid='$bid'";
	mysqli_query($conn,$sql5);

	$sql6 = "DELETE FROM bookdetails WHERE bid='$bid'";
	mysqli_query($conn,$sql6);

	echo '<script>alert("Book issued successfully. Please collect the book from Library")</script>';

	//header("location: studentissuebook.php");
}
else {
	echo '<script>alert("You have already issued 5 books. Return any book to issue a new book.")</script>';
}
?>
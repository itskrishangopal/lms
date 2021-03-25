<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);



if(isset($_POST['susn'])) {
	$susn = $_POST['susn'];
    $spassword = $_POST['spassword'];

	$sql = "SELECT * FROM studentdetails WHERE susn='$susn' AND spassword='$spassword'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			session_start();
			$_SESSION["susn"] = $row['susn'];
			$_SESSION["spassword"] = $row['spassword'];
			header("location: studenthome.php");
		}
	}
	else {
		echo '<script>alert("Incorrect USN or Password")</script>';
	}
}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Student Login</title>
  </head>
  <body>
  	
    <center>
    <img src="msec.png" alt="" width="100" height="90">
    <h1>Library Management System</h1>
    </center>
    <br>



    <h2 style="text-align: center; padding-top: 20px; font-family: sans-serif;"><strong>Student Login</strong></h2>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4">
    			
    		</div>
    		<div class="col-md-4" style="padding-top: 20px;">
            	<form method="POST" action="#">
  	        		<div class="mb-3">
            			<label for="susn" class="form-label">USN</label>
            			<input type="text" class="form-control" name="susn" required>
  	        		</div>
  	        		<div class="mb-3">
	            		<label for="spassword" class="form-label">Password</label>
    	        		<input type="password" class="form-control" name="spassword" minlength="5" required>
  	    	    	</div>
  	    	    	<br>
  	    	    	<div>
  	        			<center><button type="submit" class="btn btn-primary">Login</button></center>
  	        		</div>
	        	</form>
	        </div>
		</div>
	</div>
	<br>

	<!--<a class="nav-link" aria-current="page" href="studentlogin.php" style="padding-left: 633px; font-size: 20px; color: red;">Student Login</a>-->
	<center><a href="adminlogin.php">
		<button type="button" class="btn btn-outline-danger">Admin Login</button>
	</a></center>

	<div style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: black; color: white; text-align: center;">
        <h6>Design & Developed by: Krishan & Priyam</h6>
        <h4>For M S Engineering College....All Rights Reserved</h4>
  	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
































<!--
<!DOCTYPE html>
<html>
	<head>
		<title>Student Login</title>
	</head>
	<body>
		<h1>Student Login</h1>
		<form method="POST" action="#">
			<label for="susn">Enter USN: </label>
			<input type="text" name="susn">
			<br><br>

			<label for="spassword">Enter Password: </label>
			<input type="password" name="spassword">
			<br><br>

			<input type="submit" value="Login">
			<br><br>

			<a href="./adminlogin.php">Admin Login</a>
		</form>
	</body>
</html>
-->
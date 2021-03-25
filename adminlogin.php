<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

if(isset($_POST['ausername'])) {
	$ausername = $_POST['ausername'];
	$apassword = $_POST['apassword'];

	$sql = "SELECT * FROM admindetails WHERE ausername='$ausername' AND apassword='$apassword'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			session_start();
			$_SESSION["ausername"] = $row['ausername'];
			$_SESSION["apassword"] = $row['apassword'];
			header("location: adminhome.php");
		}
	}
	else {
		echo '<script>alert("Incorrect Username or Password")</script>';
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

    <title>Admin Login</title>
  </head>
  <body>

  	<!--<center>
  	<img src="msec.png" alt="" width="150" height="120" class="d-inline-block align-top" style="padding-bottom: 4px;"><h1 style="padding-top: 10px;">Libraray Management System
  	</h1></center>-->

  	<center>
    <img src="msec.png" alt="" width="100" height="90">
    <h1 style="color: red;">Library Management System</h1>
    </center>
    <br>



    <h2 style="text-align: center; padding-top: 20px; font-family: sans-serif;"><strong>Admin Login</strong></h2>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4">
    			
    		</div>
    		<div class="col-md-4" style="padding-top: 20px;">
            	<form method="POST" action="#">
  	        		<div class="mb-3">
            			<label for="ausername" class="form-label">Username</label>
            			<input type="text" class="form-control" name="ausername" required>
  	        		</div>
  	        		<div class="mb-3">
	            		<label for="apassword" class="form-label">Password</label>
    	        		<input type="password" class="form-control" name="apassword" minlength="5" required>
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
	<center><a href="studentlogin.php">
		<button type="button" class="btn btn-outline-danger">Student Login</button>
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
		<title>Admin Login</title>
	</head>
	<body>
		<h1>Admin Login</h1>
		<form method="POST" action="#">
			<label for="ausername">Enter Username: </label>
			<input type="text" name="ausername">
			<br><br>

			<label for="apassword">Enter Password: </label>
			<input type="password" name="apassword">
			<br><br>

			<input type="submit" value="Login">
			<br><br>

			<a href="./studentlogin.php">Student Login</a>
		</form>
	</body>
</html>
-->
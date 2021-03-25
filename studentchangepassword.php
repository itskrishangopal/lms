<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

session_start();
if(isset($_POST['oldp'])) {
	$oldp = $_POST['oldp'];
	$newp = $_POST['newp'];
	$rnewp = $_POST['rnewp'];

	$query = "SELECT spassword FROM studentdetails WHERE susn='".$_SESSION['susn']."' AND spassword='$oldp'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0) {
		//echo "Username already exist";
    if ($newp == $rnewp) {
      $sql = "UPDATE studentdetails SET spassword='$newp' WHERE susn='".$_SESSION['susn']."'";
      mysqli_query($conn, $sql);
      echo '<script>alert("Password changed successfully!")</script>';
      # code...
    }
    else {
      echo '<script>alert("New Passwords do not match")</script>';
    }
	}
	else {
      echo '<script>alert("Old Password is incorrect")</script>';
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

    <title>Change Password</title>
  </head>
  <body>
    <!--<h1 style="text-align: center; padding-top: 20px; font-family: sans-serif;"><strong>Admin Home</strong></h1>-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!--<a class="navbar-brand nav-link active" href="adminhome.php">Home</a>-->
    <a class="navbar-brand" href="studenthome.php" style="color: black;">
      <img src="msec.png" alt="" width="50" height="44" class="d-inline-block align-top" style="padding-bottom: 4px;">
      Library Management System
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="studenthome.php" style="padding-left: 70px;color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="studentissuebook.php" style="padding-left: 10px; color: black;">Issue a Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="studentreturnbook.php" style="padding-left: 10px; color: black;">Status of Issued Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="studentrequestbook.php" style="padding-left: 10px; color: black;">Request a Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="studentchangepassword.php" style="padding-left: 10px; color: black;">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="studentlogout.php" style="padding-left: 10px; color: black;">Log Out</a>
        </li>
    </div>
  </div>
</nav>



    <h1 style="text-align: center; padding-top: 40px; font-family: sans-serif;"><strong>Change Password</strong></h1>


    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4" style="padding-top: 50px;">
              <form method="POST" action="#">
                <div class="mb-3">
                  <label for="oldp" class="form-label">Old Password</label>
                  <input type="password" class="form-control" name="oldp" required>
                </div>
                <div class="mb-3">
                  <label for="newp" class="form-label">New Password</label>
                  <input type="password" class="form-control" name="newp" required>
                </div>
                <div class="mb-3">
                  <label for="rnewp" class="form-label">Re-enter New Password</label>
                  <input type="password" class="form-control" name="rnewp" minlength="5" required>
                </div>
                
                  <center><button type="submit" class="btn btn-success">Change Password</button></center>
                
            </form>
          </div>
    </div>
  </div>
	<br>

  <center>
	<a href="studenthome.php">
		<button type="button" class="btn btn-danger">Home</button>
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
	<title>Add Admin</title>
</head>
<body>
	<h1>Add New Admin</h1>

	<form method="POST" action="#">
		<label for="aname">Name: </label>
		<input type="text" name="aname" required>
		<br><br>

		<label for="ausername">Username: </label>
		<input type="text" name="ausername" required>
		<br><br>

		<label for="apassword">Password: </label>
		<input type="password" name="apassword" required>
		<br><br>

		<input type="submit" value="Submit">
		<br><br>

	</form>

	<a href="./adminhome.php">
		<button>Back</button>
	</a>
</body>
</html>
-->
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

if(isset($_POST['rbname'])) {
	$rbname = $_POST['rbname'];
	$rbauthor = $_POST['rbauthor'];
	$ryop = $_POST['ryop'];

	$sql = "INSERT INTO bookrequest (rbname,rbauthor,ryop) VALUES ('$rbname','$rbauthor','$ryop')";
		if($conn->query($sql) == true); {
      
			//echo "Book request sent successfully!";
			echo '<script>alert("Book request sent successfully!")</script>';
		}

/*	$query = "SELECT * FROM bookdetails WHERE bid='$bid'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0) {
		echo "Book ID already exist";
	}
	else {
		$sql = "INSERT INTO bookdetails (bid,bname,bauthor,yop) VALUES ('$bid','$bname','$bauthor','$yop')";
		if($conn->query($sql) == true); {
			echo "Book added successfully!";
		}
	}*/
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

    <title>Request New Book</title>
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

    <center><h1 style="padding-top: 40px; font-family: sans-serif;"><strong>Request a Book</strong></h1></center>


    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4" style="padding-top: 50px;">
              <form method="POST" action="#">
                <div class="mb-3">
                  <label for="rbname" class="form-label">Book Name</label>
                  <input type="text" class="form-control" name="rbname" required>
                </div>
                <div class="mb-3">
                  <label for="rbauthor" class="form-label">Author Name</label>
                  <input type="text" class="form-control" name="rbauthor" required>
                </div>
                <div class="mb-3">
                  <label for="ryop" class="form-label">Year of Publish</label>
                  <input type="text" class="form-control" name="ryop" minlength="4" maxlength="4" required>
                </div>
                <div>
                  <center><button type="submit" class="btn btn-success">Request Book</button></center>
                </div>
            </form>
          </div>
    </div>
  </div>
	<br>

	<center><a href="studenthome.php">
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
	<title>Request Book</title>
</head>
<body>
	<h1>Request New Book</h1>

	<form method="POST" action="#">

		<label for="rbname">Book Name: </label>
		<input type="text" name="rbname" required>
		<br><br>

		<label for="rbauthor">Author Name: </label>
		<input type="text" name="rbauthor" required>
		<br><br>

		<label for="ryop">Year of Publish: </label>
		<input type="text" name="ryop" required>
		<br><br>

		<input type="submit" value="Submit">
		<br><br>

	</form>

	<a href="./studenthome.php">
		<button>Back</button>
	</a>
</body>
</html>
-->
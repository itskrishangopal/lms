<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

if(isset($_POST['bname'])) {
	//$bid = $_POST['bid'];
	$bname = $_POST['bname'];
	$bauthor = $_POST['bauthor'];
	$yop = $_POST['yop'];
	$qty = $_POST['qty'];



	/*if(mysqli_num_rows($result) > 0) {
		//echo "Book ID already exist";
		echo '<script>alert("Book ID already exist")</script>';
	}*/
	//else {
    //echo "$qty";
    while($qty != 1) {
    //echo "$qty";
		$sql = "INSERT INTO bookdetails (bname,bauthor,yop) VALUES ('$bname','$bauthor','$yop')";
    mysqli_query($conn, $sql);
    $qty = $qty - 1;
    }
		if($conn->query($sql) == true); {
			//echo "$qty";
			echo '<script>alert("Book added successfully")</script>';
		}
	//}
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

    <title>Add New Book</title>
  </head>
  <body>
    <!--<h1 style="text-align: center; padding-top: 20px; font-family: sans-serif;"><strong>Admin Home</strong></h1>-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!--<a class="navbar-brand nav-link active" href="adminhome.php">Home</a>-->
    <a class="navbar-brand" href="adminhome.php" style="color: black;">
      <img src="msec.png" alt="" width="50" height="44" class="d-inline-block align-top" style="padding-bottom: 4px;">
      Library Management System
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="adminhome.php" style="padding-left: 220px;color: black;">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-brand active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 10px; color: black;">
            Add New
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="adminaddbook.php">Add New Book</a></li>
            <li><a class="dropdown-item" href="adminaddstudent.php">Add New Student</a></li>
            <li><a class="dropdown-item" href="adminaddadmin.php">Add New Admin</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-brand active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 10px; color: black;">
            Issue/Return
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="adminissuebook.php">Issue Books</a></li>
            <li><a class="dropdown-item" href="adminreturnbook.php">Return Books</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-brand active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 10px; color: black;">
            View
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="adminviewbook.php">View Available Books</a></li>
            <li><a class="dropdown-item" href="adminviewissuedbook.php">View Issued Books</a></li>
            <li><a class="dropdown-item" href="adminviewstudent.php">View Students</a></li>
            <li><a class="dropdown-item" href="adminviewbookrequest.php">View Book Requests</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="adminchangepassword.php" style="padding-left: 10px; color: black;">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="adminlogout.php" style="padding-left: 10px; color: black;">Log Out</a>
        </li>
    </div>
  </div>
</nav>



    <h1 style="text-align: center; padding-top: 40px; font-family: sans-serif;"><strong>Add New Book</strong></h1>


    <form method="POST" action="#">
    	<div class="container">
    		<div class="row">
<!--    			<div class="col" style="padding-left: 400px; padding-top: 50px;">-->
              <div class="mb-3 col-1">
                
              </div>
  	        	<div class="mb-3 col-4" style="padding-top: 40px;">
                <label for="bname" class="form-label">Book Name</label>
                <input type="text" class="form-control" name="bname" required>
              </div>
              <div class="mb-3 col-2">
                
              </div>
  	       		<div class="mb-3 col-4" style="padding-top: 40px;">
                <label for="bauthor" class="form-label">Author Name</label>
                <input type="text" class="form-control" name="bauthor" required>
              </div>
			</div>

			<div class="row">
<!--    		<div class="col" style="padding-left: 400px; padding-top: 50px;">-->
  	       	<div class="mb-3 col-1">
                
              </div>
            <div class="mb-3 col-4" style="padding-top: 15px;">
               <label for="yop" class="form-label">Year of Publish</label>
               <input type="number" class="form-control" name="yop" min="1901" max="2020" required>
             </div>
             <div class="mb-3 col-2">
                
              </div>
  	      		<div class="mb-3 col-4" style="padding-top: 15px;">
               <label for="qty" class="form-label">Quantity</label>
               <input type="number" class="form-control" name="qty" min="1" max="500" required>
             </div>
			</div>


		</div>
    <center>
		<div style="padding-top: 20px;">
  	     <button type="submit" class="btn btn-success">Add Book</button>
  	</div></center>
	</form>
	<br>

  <center>
	<a href="adminhome.php">
		<button type="button" class="btn btn-danger">Home</button>
	</a></center>

  <div style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: black; color: white; text-align: center;">
        <h6>Design & Developed by: Krishan & Priyam</h6>
        <h4>For M S Engineering College....All Rights Reserved</h4>
    </div>
    <br>



    

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
	<title>Add Book</title>
</head>
<body>
	<h1>Add New Book</h1>

	<form method="POST" action="#">
		<label for="bid">Book ID: </label>
		<input type="text" name="bid" required>
		<br><br>

		<label for="bname">Book Name: </label>
		<input type="text" name="bname" required>
		<br><br>

		<label for="bauthor">Author Name: </label>
		<input type="text" name="bauthor" required>
		<br><br>

		<label for="yop">Year of Publish: </label>
		<input type="text" name="yop" required>
		<br><br>

		<label for="qty">Quantity: </label>
		<input type="text" name="qty" required>
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
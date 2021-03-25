<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

if(isset($_POST['susn'])) {
	$sname = $_POST['sname'];
	$susn = $_POST['susn'];
	$sbranch = $_POST['sbranch'];
	$ssemester = $_POST['ssemester'];
	$semail = $_POST['semail'];
	$smobile = $_POST['smobile'];
	$spassword = $_POST['spassword'];

	$query = "SELECT * FROM studentdetails WHERE susn='$susn'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0) {
		//echo "Book ID already exist";
		echo '<script>alert("Student already registered")</script>';
	}
	else {
	$sql = "INSERT INTO studentdetails (sname,susn,sbranch,ssemester,semail,smobile,spassword) VALUES ('$sname','$susn','$sbranch','$ssemester','$semail','$smobile','$spassword')";
 
	if($conn->query($sql) == true); {
		echo '<script>alert("Student added successfully")</script>';
	}

	$sql2 = "CREATE TABLE $susn (bid INT(11) PRIMARY KEY, bname VARCHAR(50), bauthor VARCHAR(50), yop VARCHAR(5), approve VARCHAR(50))";
	mysqli_query($conn, $sql2);
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

    <title>Add New Student</title>
  </head>
  <body>
    <!--<h1 style="text-align: center; padding-top: 20px; font-family: sans-serif;"><strong>Admin Home</strong></h1>-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
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
<br>
<br>
<br>



    <h1 style="text-align: center; padding-top: 40px; font-family: sans-serif;"><strong>Add New Student</strong></h1>


    <form method="POST" action="#">
    	<div class="container">
    		<div class="row">
<!--    			<div class="col" style="padding-left: 400px; padding-top: 50px;">-->
  	        	<div class="mb-3 col-1">
                
              </div>
              <div class="mb-3 col-4" style="padding-top: 40px;">
                <label for="sname" class="form-label">Name</label>
                <input type="text" class="form-control" name="sname" required>
              </div>
              <div class="mb-3 col-2">
                
              </div>
  	       		<div class="mb-3 col-4" style="padding-top: 40px;">
                <label for="susn" class="form-label">USN</label>
                <input type="text" class="form-control" name="susn" minlength="10" maxlength="10">
              </div>
			</div>

			<div class="row">
<!--    		<div class="col" style="padding-left: 400px; padding-top: 50px;">-->
  	       	<div class="mb-3 col-1">
                
            </div>

            <div class="mb-3 col-4" style="padding-top: 15px;">

              <!--<label for="sbranch" class="form-label">Branch</label>
              <input type="text" class="form-control" name="sbranch" required>-->
              
              <label for="sbranch" class="form-label">Branch</label>
              <select name="sbranch" class="form-control">
                <option value="Computer Science">Computer Science</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Electrical">Electrical</option>
                <option value="Civil">Civil</option>
              </select>
              
            </div>

             <div class="mb-3 col-2">
                
              </div>
  	      		<div class="mb-3 col-4" style="padding-top: 15px;">
               <!--<label for="ssemester" class="form-label">Semester</label>
               <input type="text" class="form-control" name="ssemester" required>-->
               <label for="ssemester" class="form-label">Semester</label>
              <select name="ssemester" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
             </div>
			</div>

			<div class="row">
<!--    		<div class="col" style="padding-left: 400px; padding-top: 50px;">-->
  	       	<div class="mb-3 col-1">
                
              </div>
            <div class="mb-3 col-4" style="padding-top: 15px;">
               <label for="semail" class="form-label">Email</label>
               <input type="text" class="form-control" name="semail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Example: name@mail.com" required>
             </div>
             <div class="mb-3 col-2">
                
              </div>
  	      		<div class="mb-3 col-4" style="padding-top: 15px;">
               <label for="smobile" class="form-label">Mobile Number</label>
               <input type="number" class="form-control" name="smobile" min="6000000000" max="9999999999" required>
             </div>
			</div>

			<div class="row">
<!--    		<div class="col" style="padding-left: 400px; padding-top: 50px;">-->
  	       		<div class="mb-3 col-1">
                
              </div>
              <div class="mb-3 col-4" style="padding-top: 15px;">
               		<label for="spassword" class="form-label">Password</label>
               		<input type="password" class="form-control" name="spassword" required>
             	</div>  	      		
			</div>




		</div>
		<div style="padding-top: 20px;">
  	       	<center><button type="submit" class="btn btn-success">Add Student</button></center>
  	   	</div>
	</form>
	<br>

  <center>
	<a href="adminhome.php">
		<button type="button" class="btn btn-danger">Home</button></center>
	</a>

  <div style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: black; color: white; text-align: center;">
        <h6>Design & Developed by: Krishan & Priyam</h6>
        <h4>For M S Engineering College....All Rights Reserved</h4>
  </div>

  <br>
  <br>
  <br>
  <br>
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
	<title>Add Student</title>
</head>
<body>
	<h1>Add New Student</h1>

	<form method="POST" action="#">
		<label for="sname">Name: </label>
		<input type="text" name="sname" required>
		<br><br>

		<label for="susn">USN: </label>
		<input type="text" name="susn" required>
		<br><br>

		<label for="sbranch">Branch: </label>
		<input type="text" name="sbranch" required>
		<br><br>

		<label for="semail">Email ID: </label>
		<input type="text" name="semail" required>
		<br><br>

		<label for="ssemester">Semester: </label>
		<input type="text" name="ssemester" required>
		<br><br>

		<label for="spassword">Password: </label>
		<input type="password" name="spassword" required>
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
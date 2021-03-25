<?php
error_reporting(0);
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "web";
  
  $conn = new mysqli($hostname, $username, $password, $databaseName);

  $sql1 = "SELECT COUNT(susn) FROM studentdetails";
  $res1 = $conn->query($sql1);
  $row1 = mysqli_fetch_row($res1);
  $var1 = $row1[0];

  $sql2 = "SELECT COUNT(bid) FROM bookissue";
  $res2 = $conn->query($sql2);
  $row2 = mysqli_fetch_row($res2);
  $var2 = $row2[0];

  $sqln = "SELECT COUNT(bid) FROM bookreturn";
  $resn = $conn->query($sqln);
  $rown = mysqli_fetch_row($resn);
  $varn = $rown[0];

  $sql31 = "SELECT COUNT(bid) FROM bookdetails";
  $res31 = $conn->query($sql31);
  $row31 = mysqli_fetch_row($res31);
  $var31 = $row31[0];
  $sql32 = "SELECT COUNT(bid) FROM viewissuedbooks";
  $res32 = $conn->query($sql32);
  $row32 = mysqli_fetch_row($res32);
  $var32 = $row32[0];
  $var3 = $var31 + $var32;

  $sql4 = "SELECT COUNT(rbid) FROM bookrequest";
  $res4 = $conn->query($sql4);
  $row4 = mysqli_fetch_row($res4);
  $var4 = $row4[0];

  $sql5 = "SELECT COUNT(bid) FROM viewissuedbooks";
  $res5 = $conn->query($sql5);
  $row5 = mysqli_fetch_row($res5);
  $var5 = $row5[0];

?>














<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Admin Home</title>
  </head>
  <body>
    <!--<h1 style="text-align: center; padding-top: 20px; font-family: sans-serif;"><strong>Admin Home</strong></h1>-->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!--<a class="navbar-brand nav-link active" href="adminhome.php">Home</a>-->
    <a class="navbar-brand" href="adminhome.php" style="color: black;">
      <img src="msec.png" alt="" width="50" height="44" class="d-inline-block align-top" style="padding-bottom: 4px; color: red;">
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

    <div class="row">
        <div class="col-4">
            <center><a href="adminviewstudent.php"><img src="img1.jpeg" width="140" height="140" alt=""></a></center>
            <br>
            <?= "<center><h2>{$var1} Students Registered</h2></center>" ?>
        </div>
        <div class="col-4">
            <center><a href="adminissuebook.php"><img src="img2.jpeg" width="140" height="140" alt=""></a></center>
            <br>
            <?= "<center><h2>{$var2} Books to be Issued</h2></center>" ?>
        </div>
        <div class="col-4">
            <center><a href="adminreturnbook.php"><img src="987.jpeg" width="110" height="140" alt=""></a></center>
            <br>
            <?= "<center><h2>{$varn} Book Returns to be Accepted</h2></center>" ?>
        </div>
        
    </div>
    <br>
    <br>
    <br>

    <div class="row">
      <div class="col-4">
            <center><a href="adminviewissuedbook.php"><img src="img5.jpeg" width="140" height="140" alt=""></center></a>
            <br>
            <?= "<center><h2>{$var5} Books are Currently issued</h2></center>" ?>
        </div>
      
        
        <div class="col-4">
            <center><a href="adminviewbookrequest.php"><img src="img4.png" width="140" height="140" alt=""></center></a>
            <br>
            <?= "<center><h2>{$var4} New Book Requests</h2></center>" ?>
        </div>

        <div class="col-4">
            <center><img src="123.png" width="140" height="140" alt=""></center>
            <br>
            <?= "<center><h2>{$var3} Total Books</h2></center>" ?> 
        </div>
        
        
      </div>
        
<!--<div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="img1.jpeg" alt="" style="margin-right: 100px;"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></svg>

        <h2 style="padding-left: 100px;">70 Students Registered</h2>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
    </div>-->


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
	<title>Admin Home</title>
</head>
<body>
	<h1>Admin Home</h1>

	<a href="./adminaddstudent.php">
		<button>Add New Student</button>
	</a>
	<br><br>

	<a href="./adminaddbook.php">
		<button>Add New Book</button>
	</a>
	<br><br>

	<a href="./adminaddadmin.php">
		<button>Add New Admin</button>
	</a>
	<br><br>

	<a href="./adminviewstudent.php">
		<button>View Students</button>
	</a>
	<br><br>

	<a href="./adminviewbook.php">
		<button>View Books</button>
	</a>
	<br><br>

	<a href="./adminviewbookrequest.php">
		<button>View Book Requests</button>
	</a>
	<br><br>

	<a href="./adminlogout.php">
		<button>Log Out</button>
	</a>
</body>
</html>
-->
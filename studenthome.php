<?php
error_reporting(0);
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "web";
  
  $conn = new mysqli($hostname, $username, $password, $databaseName);

  session_start();

  $sql1 = "SELECT sname FROM studentdetails WHERE susn = '".$_SESSION['susn']."'";
  $res1 = $conn->query($sql1);
  $row1 = mysqli_fetch_row($res1);
  $var1 = $row1[0];

  $sql2 = "SELECT susn FROM studentdetails WHERE susn = '".$_SESSION['susn']."'";
  $res2 = $conn->query($sql2);
  $row2 = mysqli_fetch_row($res2);
  $var2 = $row2[0];

  $sql3 = "SELECT sbranch FROM studentdetails WHERE susn = '".$_SESSION['susn']."'";
  $res3 = $conn->query($sql3);
  $row3 = mysqli_fetch_row($res3);
  $var3 = $row3[0];

  $sql4 = "SELECT ssemester FROM studentdetails WHERE susn = '".$_SESSION['susn']."'";
  $res4 = $conn->query($sql4);
  $row4 = mysqli_fetch_row($res4);
  $var4 = $row4[0];

  $sql5 = "SELECT semail FROM studentdetails WHERE susn = '".$_SESSION['susn']."'";
  $res5 = $conn->query($sql5);
  $row5 = mysqli_fetch_row($res5);
  $var5 = $row5[0];

  $sql6 = "SELECT smobile FROM studentdetails WHERE susn = '".$_SESSION['susn']."'";
  $res6 = $conn->query($sql6);
  $row6 = mysqli_fetch_row($res6);
  $var6 = $row6[0];

  $sql7 = "SELECT COUNT(bid) FROM ".$_SESSION['susn'];
  $res7 = $conn->query($sql7);
  $row7 = mysqli_fetch_row($res7);
  $var7 = $row7[0];

  $sql31 = "SELECT COUNT(bid) FROM bookdetails";
  $res31 = $conn->query($sql31);
  $row31 = mysqli_fetch_row($res31);
  $var31 = $row31[0];
  $sql32 = "SELECT COUNT(bid) FROM viewissuedbooks";
  $res32 = $conn->query($sql32);
  $row32 = mysqli_fetch_row($res32);
  $var32 = $row32[0];
  $var8 = $var31 + $var32;

/*  $sql4 = "SELECT COUNT(rbid) FROM bookrequest";
  $res4 = $conn->query($sql4);
  $row4 = mysqli_fetch_row($res4);
  $var4 = $row4[0];

  $sql5 = "SELECT COUNT(bid) FROM viewissuedbooks";
  $res5 = $conn->query($sql5);
  $row5 = mysqli_fetch_row($res5);
  $var5 = $row5[0];*/

?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Student Home</title>
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
<br>
    <div style="background-color: skyblue;">
        <br>
    <div class="row">
        <div class="col-3" style="padding-left: 40px;">
            <?= "<h4>Name: {$var1}</h4>" ?>
            <!--<center><h2>70 Students Registered</h2></center>-->
          
        </div>
        <div class="col-5" style="padding-left: 40px;">
            <?= "<h4>USN: {$var2}</h4>" ?>
          
        </div>
        <div class="col-4" style="padding-left: 40px;">
            <?= "<h4>Branch: {$var3}</h4>" ?>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-3" style="padding-left: 40px;">
            <?= "<h4>Semester: {$var4}</h4>" ?>
            <!--<center><h2>70 Students Registered</h2></center>-->
          
        </div>
        <div class="col-5" style="padding-left: 40px;">
            <?= "<h4>Email: {$var5}</h4>" ?>
          
        </div>
        <div class="col-4" style="padding-left: 40px;">
            <?= "<h4>Mobile Number: {$var6}</h4>" ?>
        </div>
    </div>
    <br>
    </div>
<br>
<br>
<br>
    <div class="row">
      <div class="col-6">
            <center><a href="studentreturnbook.php"><img src="img4.png" width="140" height="140" alt=""></center></a>
            <br>
            <?= "<center><h2>{$var7} Books Issued to you</h2></center>" ?>
        </div>
        





        <div class="col-6" style="padding-right: 100px;">
            <center><img src="123.png" width="140" height="140" alt=""></center>
            <br>
            <!--<center><h2>12 books are currently issued</h2></center>-->
            <?= "<center><h2>{$var8} Total Books in the Library</h2></center>" ?> 
        </div>
    </div>
<br>
<br>
    <center><a href="./studentissuebook.php">
        <button type="button" class="btn btn-success">Issue a Book and Start Studying>></button>
    </a></center>

    <!--<div style="position: fixed; background-color: black; color: white; text-align: center;">
        <marquee>Design & Developed by Krishan & Priyam</marquee>
        <br>
        <h4>Copyright: MSEC      All Rights Reserved</h4>
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
	<title>Student Home</title>
</head>
<body>
	<h1>Student Home</h1>

	<a href="./studentrequestbook.php">
		<button>Request New Book</button>
	</a>
	<br><br>

	<a href="./studentissuebook.php">
		<button>Issue New Book</button>
	</a>
	<br><br>

	<a href="./studentreturnbook.php">
		<button>Return a Book</button>
	</a>
	<br><br>

	<a href="./studentprofile.php">
		<button>View Profile</button>
	</a>
	<br><br>

	<a href="./studentlogout.php">
		<button>Log Out</button>
	</a>
</body>
</html>
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>View Students</title>
  </head>
  <body>
  
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
    <h1 style="text-align: center; padding-top: 40px; font-family: sans-serif;"><strong>View Students</strong></h1>
    <br>  
  <div style="padding-left: 20px; padding-right: 20px;">
    <table class="table table-bordered border-dark">
      <tr class="table-primary">
        <th scope="col"><center>Name</center></th>
        <th scope="col"><center>USN</center></th>
        <th scope="col"><center>Branch</center></th>        
        <th scope="col"><center>Semester</center></th>
        <th scope="col"><center>Email ID</center></th>
        <th scope="col"><center>Mobile Number</center></th>
        <th scope="col"><center>Action</center></th>
      </tr>

<?php
  error_reporting(0);    
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "web";
  
  $conn = new mysqli($hostname, $username, $password, $databaseName);
  
  $sql = "SELECT sname,susn,sbranch,ssemester,semail,smobile FROM studentdetails";
  $result = $conn->query($sql);
   
   if($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
       echo "<tr><td><center>". $row["sname"] ."</center></td><td><center>". $row["susn"] ."</center></td><td><center>". $row["sbranch"] ."</center></td><td><center>". $row["ssemester"] ."</center></td><td><center>". $row["semail"] ."</center></td><td><center>". $row["smobile"] ."</center></td><td><center><a href='deleteadminviewstudent.php?rn=$row[susn]''><button>Delete</button></a></center></td></tr>";
      }
      echo "</table>";
    }
    else {
        echo "</table>";
      }
    
  $conn->close();
?>
  </div>
  <br>
  
  <center><a href="./adminhome.php">
    <button type="button" class="btn btn-danger">Home</button>
  </a></center>
  <br>

  <center><a href="exceladminviewstudent.php">
    <button type="button" class="btn btn-success">Export to Excel</button>
  </a></center>

  <div style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: black; color: white; text-align: center;">
        <h6>Design & Developed by: Krishan & Priyam</h6>
        <h4>For M S Engineering College....All Rights Reserved</h4>
  </div>
  <br>
  <br>
  <br>
  <br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
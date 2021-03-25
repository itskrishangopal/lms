<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Return a Book</title>
  </head>
  <body>
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
    


    <h1 style="text-align: center; padding-top: 40px; font-family: sans-serif;"><strong>Status of Issued Books</strong></h1>
    <br>  
  <div style="padding-left: 20px; padding-right: 20px;">
    <table class="table table-bordered border-dark">
      <tr class="table-primary">
        <th scope="col"><center>Book Name</center></th>
        <th scope="col"><center>Book Author</center></th>
        <th scope="col"><center>YOP</center></th>
        <th scope="col"><center>Status</center></th>
        <th scope="col"><center>Action</center></th>
      </tr>

<?php
  error_reporting(0);
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "web";
  
  $conn = new mysqli($hostname, $username, $password, $databaseName);
  
  session_start();
  $sql = "SELECT bid,bname,bauthor,yop,approve FROM ".$_SESSION['susn'];
  $result = $conn->query($sql);
   
   
     while($row = $result->fetch_assoc()) {
       echo "<tr><td><center>". $row["bname"] ."</center></td><td><center>". $row["bauthor"] ."</center></td><td><center>". $row["yop"] ."</center></td><td><center>". $row["approve"] ."</center></td><td><center><a href='miscstudentreturnbook.php?rn=$row[bid]''><button>Return</button></a></center></td></tr>";
      }
      echo "</table>";
      
    
    
    
  $conn->close();
?>
  
  </div>
  <br>
  <center>
  <a href="./studenthome.php">
    <button type="button" class="btn btn-danger">Home</button>
  </a></center>
  <div style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: black; color: white; text-align: center;">
        <h6>Design & Developed by: Krishan & Priyam</h6>
        <h4>For M S Engineering College....All Rights Reserved</h4>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

session_start();

session_unset();

session_destroy();

header("location: adminlogin.php");

?>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$sql = "SELECT * FROM studentdetails";
$res = mysqli_query($conn,$sql);
$html = '<table><tr><td>Name</td><td>USN</td><td>Branch</td><td>Email ID</td><td>Semester</td></tr>';

while($row = $res->fetch_assoc()) {
       $html.="<tr><td>". $row["sname"] ."</td><td>". $row["susn"] ."</td><td>". $row["sbranch"] ."</td><td>". $row["semail"] ."</td><td>". $row["ssemester"] ."</td></tr>";
      }
      $html.='</table>';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=StudentList.xls');
echo $html;
?>
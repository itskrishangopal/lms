<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$sql = "SELECT rbid,rbname,rbauthor,ryop,Time FROM bookrequest";
$res = mysqli_query($conn,$sql);
$html = '<table><tr><td>S. No.</td><td>Book Name</td><td>Author Name</td><td>Year of Publish</td><td>Timestamp</td></tr>';

while($row = $res->fetch_assoc()) {
       $html.="<tr><td>". $row["rbid"] ."</td><td>". $row["rbname"] ."</td><td>". $row["rbauthor"] ."</td><td>". $row["ryop"] ."</td><td>". $row["Time"] ."</td></tr>";
      }
      $html.='</table>';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=NewBookRequests.xls');
echo $html;
?>
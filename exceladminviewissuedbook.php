<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$sql = "SELECT issueto,bid,bname,bauthor,yop,Time,count(bname) as quantity FROM `viewissuedbooks` group by bname HAVING COUNT(bname)>=1";
$res = mysqli_query($conn,$sql);
$html = '<table><tr><td>Issued to</td><td>Book Name</td><td>Author Name</td><td>Year of Publish</td><td>Time</td></tr>';

while($row = $res->fetch_assoc()) {
       $html.="<tr><td>". $row["issueto"] ."</td><td>". $row["bname"] ."</td><td>". $row["bauthor"] ."</td><td>". $row["yop"] ."</td><td>". $row["Time"] ."</td></tr>";
      }
      $html.='</table>';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=IssuedBooks.xls');
echo $html;
?>
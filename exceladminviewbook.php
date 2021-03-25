<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web";

$conn = new mysqli($host, $user, $password, $db);

$sql = "SELECT bid,bname,bauthor,yop,count(bname) as quantity FROM `bookdetails` group by bname HAVING COUNT(bname)>=1";
$res = mysqli_query($conn,$sql);
$html = '<table><tr><td>Book Name</td><td>Author Name</td><td>Year of Publish</td><td>Quantity</td></tr>';

while($row = $res->fetch_assoc()) {
       $html.="<tr><td>". $row["bname"] ."</td><td>". $row["bauthor"] ."</td><td>". $row["yop"] ."</td><td>". $row["quantity"] ."</td></tr>";
      }
      $html.='</table>';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=AvailableBooks.xls');
echo $html;
?>
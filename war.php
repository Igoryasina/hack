
<?php
include 'index.php';
       
if (isset($_POST['clickId'])) {
   $insert = mysqli_connect('localhost', 'root', '', 'hackaton');
$clickID=$_POST['clickId'];
$team=$_POST['team'];

if($team=="blue")
$nextHod="red";
if($team=="red")
$nextHod="blue";
$insertsql = "UPDATE room_3x3 SET cell_".$clickID."='".$team."', hod='".$nextHod."'";
$insert->query($insertsql);

}?>
   

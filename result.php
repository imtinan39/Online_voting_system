<?php

if(empty($_SESSION)) // if the session not yet started 
   session_start();



?>

<!DOCTYPE html>
<html>

<title>online voting system </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class='body'>

<h3 class='header'>ONLINE VOTING SYSTEM</h3>
<?php


$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);


$sql10="SELECT MAX(vote_count) FROM candidate";
$query7=mysqli_query($conn,$sql10);
$array4=array();
while($row3=mysqli_fetch_assoc($query7))
{

$array4[]=$row3;




}
$result= $array4[0]['MAX(vote_count)'];
$sql11="SELECT candidate_name FROM candidate WHERE vote_count='$result'";
$query8=mysqli_query($conn,$sql11);
$array5=array();
while($row4=mysqli_fetch_assoc($query8))
{

$array5[]=$row4;




}
$result2= $array5[0][('candidate_name')];


echo "<h2>winner is $result2</h2>";


























?>
</body>
</html>
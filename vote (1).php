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

$sql2="SELECT candidate_name FROM  candidate";
$query2=mysqli_query($conn,$sql2);

$array=array();
while($row=mysqli_fetch_assoc($query2))
{

$array[]=$row;




}



echo "<form name='vote' method='POST' action='vote_given.php'>";
for($i=0;$i<sizeof($array);$i++)
{
      $value1=$array[$i]['candidate_name'];
        echo "<h1 >$value1</h1>";
         echo "\n";
      echo "<input type='radio' name='can_name' value='$value1'/>";
      echo "\n";






}
echo "<input type= 'submit' name='submit'/>";
echo "</form>";
































?>
</body>
</html>
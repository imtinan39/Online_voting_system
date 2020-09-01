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

$user=$_SESSION['email'];
$sql6="SELECT count FROM user WHERE email='$user'";

$query3=mysqli_query($conn,$sql6);

$array2=array();
while($row1=mysqli_fetch_assoc($query3))
{

$array2[]=$row1;




}
$count=$array2[0]['count'];
echo $count;
if($count==0)
{

 $can_name=$_POST['can_name'];

 $sql7="SELECT vote_count FROM candidate WHERE candidate_name='$can_name'";

$query4=mysqli_query($conn,$sql7);

$array3=array();
while($row2=mysqli_fetch_assoc($query4))
{

$array3[]=$row2;




}

$vote_count=$array3[0]['vote_count'];
$vote_count=$vote_count+1;
$sql8="UPDATE candidate
SET vote_count = '$vote_count'
WHERE candidate_name = '$can_name'";
$query5=mysqli_query($conn,$sql8);
$count=$count+1;
$sql9="UPDATE user
SET count = '$count'
WHERE email = '$user'";
$query6=mysqli_query($conn,$sql9);

}
else

{

	echo "sorry you are not allowed to give vote";
}

























?>
</body>
</html>
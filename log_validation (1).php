<?php

if(empty($_SESSION)) // if the session not yet started 
   session_start();



?>

<!DOCTYPE html>
<html>

<title>online voting system </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div>
<h3 class='header'>ONLINE VOTING SYSTEM</h3>
<?php


$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);
$email=$_POST["email"];
$password1=$_POST["password"];
$password2=md5($password1);
$sql1="SELECT * FROM user WHERE email='$email' AND password='$password2'";
$result1=mysqli_query($conn,$sql1);
$count1=mysqli_num_rows($result1);


if($count1==1)
{
       
		 $_SESSION['email']=$email;
		 header("Location: homepage.php");
		 
		 
}

else



{
	echo $count1;
	echo"you are not registered";
	
	
	
	
}































?>
</body>
</html>
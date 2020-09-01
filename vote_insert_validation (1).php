<!DOCTYPE html>
<html>

<title>online voting system </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class="body">
<div>
<h3 class="header">ONLINE VOTING SYSTEM</h3>
<ul class="ul">
  <li><a class="active" href=homepage.php>HOME</a></li>
  <li><a href=login.php>LOGIN</a></li>
  <li><a href=registration.php>REGISTRATION</a></li>
  <li><a href=admin.php>ADMIN</a></li>
  <li><a href="#about">ABOUT</a></li>
</ul>
</div>

<?php 
$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);
	$candidates = array();
	
	
	$candidates = $_POST['candidate'];
	
	
	for($counter=0;$counter<sizeof($candidates);$counter++ )
	{
	
	$sql3="INSERT INTO candidate (candidate_name) VALUES ('$candidates[$counter]')";
	mysqli_query($conn,$sql3);
	}









?>
</body>
</html>
<?php
$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);


if ($_SERVER["REQUEST_METHOD"] == "POST"){



$email=$_POST["email"];
$password1=$_POST["password"];
$password2=md5($password1);

}

$sql1="SELECT * FROM admin WHERE email='$email' AND password='$password2' ";
$result1=mysqli_query($conn,$sql1);
$count1=mysqli_num_rows($result1);

if($count1==1 )
{
   	
	
	
	header('Location: vote_create.php'); 
	
	
}
else
{ 

echo "YOU ARE NOT ALLOWED";
}








?>
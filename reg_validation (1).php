<?php
$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);


if ($_SERVER["REQUEST_METHOD"] == "POST"){

$roll=$_POST["roll"];
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$password1=$_POST["password"];
$password2=md5($password1);
}

$sql1="SELECT * FROM students where roll='$roll'";
$result1=mysqli_query($conn,$sql1);
$count1=mysqli_num_rows($result1);
$sql2="INSERT INTO user (roll,name,email,password) VALUES ('$roll','$fullname','$email','$password2')";
if($count1==1 )
{
   	
	mysqli_query($conn,$sql2);
	
	echo "THANK YOU VERY MUCH FOR REGISTRATION";
	
	
	
}
else
{ 

echo "YOR ROLL IS NOT IN THE LIST,PLEASE TRY AGAIN LATER";
}








?>
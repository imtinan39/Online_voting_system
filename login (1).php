<?php
$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("location: homepage.html"); // send to home page
   exit; 
}








?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class='body'>
<h3 class="header">ONLINE VOTING SYSTEM</h3>
<div>

<ul class="ul">
  <li><a class="active" href=homepage.php>HOME</a></li>
  <li><a href=login.php>LOGIN</a></li>
  <li><a href=registration.php>REGISTRATION</a></li>
  <li><a href=admin.php>ADMIN</a></li>
  <li><a href="#about">ABOUT</a></li>
 <?php
  if(isset($_SESSION['email'])) { // if already login
  echo "<li><a href=logout_validation.php>LOGOUT</a></li>";

}







     ?>
</ul>
</div>
<h6 class='login'>LOGIN</h6>
<form name="login" action="log_validation.php" method="post">
                      E-MAIL:<br>
<input  type="text" name="email" value="email">
<br>
                     PASSWORD:<br>
<input type="text" name="password" value="password">
<br>
<input type="submit" value="Submit">

</form>
</body>
</html>
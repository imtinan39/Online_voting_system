
<?php
$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);
if(empty($_SESSION)) // if the session not yet started 
   session_start();










?>







<!DOCTYPE html>
<html>
<div>
<h3 class="header">ONLINE VOTING SYSTEM</h3>
<ul class="ul">
  <li><a class="active" href=homepage.php>HOME</a></li>
  <li><a href=login.php>LOGIN</a></li>
  <li><a href=registration.php>REGISTRATION</a></li>
  <li><a href=admin.php>ADMIN</a></li>
  <li><a href="#about">ABOUT</a></li>

<?php
  if(isset($_SESSION['email'])) { // if already login
  echo "<li><a href=logout_validation.php>LOGOUT</a></li>";
  echo "  <li><a href=vote.php>VOTE</a></li>";
   echo "  <li><a href=result.php>RESULT</a></li>";
}







     ?>
</ul>
</div>
<title>online voting system </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class="body">
<div>
<h1 class="login">ADMIN</h1>
<form name="admin" action="admin_validation.php" method="post">
                      E-MAIL:<br>
<input  type="text" name="email" value="email">
<br>
                     PASSWORD:<br>
<input type="text" name="password" value="password">
<br>
<input type="submit" value="Submit">

</form>

</div>
</body>
</html>
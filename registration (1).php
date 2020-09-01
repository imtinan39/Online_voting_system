<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title> 50 years celebration</title>

</head>

<body class="body">
<h3 class="header">ONLINE VOTING SYSTEM</h3>
<div>
<ul class="ul">
  <li><a class="active" href=homepage.php>HOME</a></li>
  <li><a href=login.php>LOGIN</a></li>
  <li><a href=registration.php>REGISTRATION</a></li>
  <li><a href=admin.php>ADMIN</a></li>
  <li><a href="#about">ABOUT</a></li>
</ul>
</div>
<h1 class="login">REGISTRATION</h1>
    <form name="registration" action="reg_validation.php" method="post">
    ROLL:<br>
     <input type="text" name="roll" value="Mickey">
     <br>
  FULL NAME:<br>
  <input type="text" name="fullname" value="Mickey">
  <br>
  E-MAIL:<br>
  <input type="text" name="email" value="Mouse">
  <br>
  PASSWORD:<br>
  <input type="text" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form>
    

</body>

</html>
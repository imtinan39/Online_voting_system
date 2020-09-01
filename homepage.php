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

<?php
  if(isset($_SESSION['email'])) { // if already login
  echo "<li><a href=logout_validation.php>LOGOUT</a></li>";
  echo "  <li><a href=vote.php>VOTE</a></li>";
   echo "  <li><a href=result.php>RESULT</a></li>";
}







     ?>
</ul>
</div>
<p class="paragraph"> Depending on the particular implementation, e-voting may use standalone electronic voting machines (also called EVM) or computers connected to the Internet. It may encompass a range of Internet services, from basic transmission of tabulated results to full-function online voting through common connectable household devices. The degree of automation may be limited to marking a paper ballot, or may be a comprehensive system of vote input, vote recording, data encryption and transmission to servers, and consolidation and tabulation of election results.

A worthy e-voting system must perform most of these tasks while complying with a set of standards established by regulatory bodies, and must also be capable to deal successfully with strong requirements associated with security, accuracy, integrity, swiftness, privacy, auditability, accessibility, cost-effectiveness, scalability and ecological sustainability.

Electronic voting technology can include punched cards, optical scan voting systems and specialized voting kiosks (including self-contained direct-recording electronic voting systems, or DRE). It can also involve transmission of ballots and votes via telephones, private computer networks, or the Internet.

In general, two main types of e-voting can be identified:

e-voting which is physically supervised by representatives of governmental or independent electoral authorities (e.g. electronic voting machines located at polling stations);
remote e-voting via the Internet (also called i-voting) where the voter submits his or her votes electronically to the election authorities, from any location.</p>
</body>
</html>

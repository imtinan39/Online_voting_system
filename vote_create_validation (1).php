

<!DOCTYPE html>
<html>

<title>online voting system </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class="body">
<div>
<h3 class='header'>ONLINE VOTING SYSTEM</h3>
<?php


$servername = "localhost";
$db_name="ovs";
$db_password="";
$db_user_name="root";
$conn=mysqli_connect($servername,$db_user_name,$db_password,$db_name);
$no_candidate=$_POST["no_candidate"];

	echo "<form  name='vote' method = 'POST' action = 'vote_insert_validation.php'>";
	for($counter= 0; $counter < $no_candidate; $counter++)
	{   
	    echo "NAME OF"." ". "CANDIDATE";
		echo "\n";
		echo "<input type = 'text' name = 'candidate[]' /><br/>";
		echo "\n";
		
	}
	echo "<input type = 'submit' value = 'SEND'/>";
	echo "</form>";

  
  
  
  
  
  
  
  
?>
</body>
</html>
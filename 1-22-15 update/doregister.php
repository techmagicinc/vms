<?php
$username="root";
$password="";
$database="login";
$con = mysql_connect('localhost',$username,$password);
if (!$con){
  die('Could not connect: '.mysql_error());
}
mysql_select_db($database,$con);

$email = $_POST['email'];
$name = $_POST['name'];
	

if(isset($_POST['name'])){
	$do_register = "INSERT INTO users (`email`, `name`)
          VALUES
          ( '$email', '$name')";
		    
	if(!mysql_query($do_register,$con)){
		die('Error: '.mysql_error());
	}
	
	echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('registration complete')
		window.location.href='adminmain.php'
	</SCRIPT>");
exit();}
	mysql_close($con);
?>


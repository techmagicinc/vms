<?php
$username="root";
$password="";
$database="timestamp";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);

$add_fname = $_POST['fname'];
$add_lname = $_POST['lname'];
$add_Group = $_POST['Group'];

if(isset($_POST['fname']) && isset($_POST['lname']) 
	&& isset($_POST['Group'])){
	
	$add_vol = "INSERT INTO users (`fname`, `lname`, 
		`Group`)
          VALUES
          ( '$add_fname', '$add_lname' ,'$add_Group')";

	if(!mysql_query($add_vol,$con)){
		die('Error: '.mysql_error());
	}

	echo "1 record successfully added...";
	mysql_close($con);
}
header('Refresh: 3; url=/timestamp.php');

?>
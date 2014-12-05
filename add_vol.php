<?php
$username="root";
$password="";
$database="timestamp";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);

$add_Fname = $_POST['FirstName'];
$add_Lname = $_POST['LastName'];
$add_Cat = $_POST['Category'];

if(isset($_POST['FirstName']) && isset($_POST['LastName']) 
	&& isset($_POST['Category'])){
	
	$add_vol = "INSERT INTO users (`fname`, `lname`, 
		`Group`)
          VALUES
          ( '$add_Fname', '$add_Lname' ,'$add_Cat')";

	if(!mysql_query($add_vol,$con)){
		die('Error: '.mysql_error());
	}

	echo "1 record successfully added...";
	mysql_close($con);
}


?>
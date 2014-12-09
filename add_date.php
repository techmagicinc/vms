<?php 

$username="root";
$password="";
$database="timestamp";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);

$add_in = $_POST['add_in'];
$add_out = $_POST['add_out'];
//$add_date = $_POST['add_date'];

if(isset($_POST['add_in']) && isset($_POST['add_out']) 
	//&& isset($_POST['add_date'])
	){
	
	$add_sql = "INSERT INTO timehistory (`timein`, `timeout`)
          VALUES
          ( '$add_in', '$add_out' )";

	if(!mysql_query($add_sql,$con)){
		die('Error: '.mysql_error());
	}

	echo "1 record successfully added...";
	mysql_close($con);
}


?>
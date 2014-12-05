<?php 

$username="root";
$password="";
$database="brad_time";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);

$del_date = $_POST['del_date'];

if(isset($_POST['del_date'])){
	$del_sql = " DELETE FROM brad_time WHERE Time_date = '$del_date'";

	if(!mysql_query($del_sql,$con)){
		die('Error: '.mysql_error());
	}

	echo "1 record successfully dropped...";
	mysql_close($con);
}


?>
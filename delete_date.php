<?php 

$username="root";
$password="";
$database="timestamp";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);

$del_entry = $_POST['del_entry'];

if(isset($_POST['del_entry'])){
	$del_sql = " DELETE FROM timehistory WHERE ID = '$del_entry'";

	if(!mysql_query($del_sql,$con)){
		die('Error: '.mysql_error());
	}

	echo "1 record successfully dropped...";
	mysql_close($con);
}


?>
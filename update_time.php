<?php
$username="root";
$password="";
$database="brad_time";

$con = mysql_connect('localhost',$username,$password);

 if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);
   

    

$update_in = $_POST['time_in'];
$update_out = $_POST['time_out'];
$update_date = $_POST['time_date'];

if(isset($_POST['time_in']) && isset($_POST['time_date'])){
	$update_in_sql = " UPDATE brad_time SET Time_in ='$update_in'
					   WHERE Date = '$update_date'";

	if(!mysql_query($update_in_sql,$con)){
		die('Error: '.mysql_error());
	}

	echo "Update Time In Successful...";
	mysql_close($con);
}

if(isset($_POST['time_out'])&& isset($_POST['time_date'])){
	$update_out_sql = " UPDATE brad_time SET Time_out = 'update_out'
						WHERE Date = '$update_date'";

echo "Update Time Out Successful...";
	mysql_close($con);
}








//if(isset($_POST['time_in']) && isset($_POST['time_out'])) {
//	
//	$update_sql = "INSERT INTO brad_time (`Time_in`, `Time_out`)
  //        VALUES
    //      ( '$update_in', '$update_out')";
//
//	if(!mysql_query($update_sql,$con)){
//		die('Error: '.mysql_error());
//	}
//


?>
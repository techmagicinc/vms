<?php
$username="root";
$password="";
$database="brad_time";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);



$query_in="SELECT Time_in FROM brad_time";
$query_out="SELECT Time_out FROM brad_time";
$query_date="SELECT Time_date From brad_time";
$result_in=mysql_query($query_in);
$result_out=mysql_query($query_out);
$result_date=mysql_query($query_date);
$num=mysql_num_rows($result_in);

$i=0;

while ($i < $num) {
	$time_in=mysql_result($result_in,$i);
	$time_out=mysql_result($result_out,$i);
	$time_date=mysql_result($result_date,$i);



$i++;
}
?>
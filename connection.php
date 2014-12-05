<?php 

$username="root";
$password="";
$database="brad_time";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);


?>
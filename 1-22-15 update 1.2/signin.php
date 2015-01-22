<?php
require ('connect.php');
if (isset($_POST['submit'])){
$name=mysql_escape_string($_POST['vname']);


if(!$_POST['vname']){
echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Please enter Username and Password')
		window.location.href='vindex.php'
	</SCRIPT>");
exit();}

$sql= mysql_query("SELECT * FROM `users` WHERE `name` = '$name'");

if(mysql_num_rows($sql) > 0){
$_session['user_id'] =$login;
header('Location: vhome.php');
exit();}

else{
echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong username, password combination. please re-enter.')
		window.location.href='vindex.php'
	</SCRIPT>");
exit();}
}
?>
<?php
require ('connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['uname']);
$password=mysql_escape_string($_POST['pass']);

if(!$_POST['uname'] | !$_POST['pass']){
echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Please enter Username and Password')
		window.location.href='index.php'
	</SCRIPT>");
exit();}

$sql= mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` ='$password'");

if(mysql_num_rows($sql) > 0){
$_session['user_id'] =$login;
header('Location: adminmain.php');
exit();}

else{
echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong username, password combination. please re-enter.')
		window.location.href='index.php'
	</SCRIPT>");
exit();}
}
?>
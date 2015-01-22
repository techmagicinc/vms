<?php
mysql_connect("localhost", "root", "") 
or die("connection failure.");
mysql_select_db("login")or die ("Database does not exist.");
?>
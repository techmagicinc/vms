<!DOCTYPE html>
<html>

<?php
$username="root";
$password="";
$database="brad_vol";

$con = mysql_connect('localhost',$username,$password);

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);
?>

Welcome! Please fill out this form to start volunteering here at The Way Clinic!
<form action = "add_vol.php" method = "post">
<table>

<tr>
	 <td><label for = "First Name"/>First Name: </label></td>
     <td><input type = "text" name= "FirstName"/></td>
     <td><label for = "Category"/>Category: </label></td>
     
</tr>
<tr>
	 <td><label for = "Last Name"/>Last Name: </label></td>
     <td><input type = "text" name= "LastName"/></td>
     <td>
     <select name = "Category">
  		<option value="Md">Medical Doctor</option>
 		<option value="Rn">Registered Nurse</option>
  		<option value="Admin">Administration</option>
  		<option value="St">Student</option>
	</select>
	</td>
	<td><input type="submit" name="Add_Vol" value="Add"/></td>
     
</tr>
</table>
</form>

</html>
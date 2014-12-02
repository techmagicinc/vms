<!DOCTYPE html>
<html>

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

<b>
     <br>
     <h2><center>Brad Pressnalle</center></h2>
    <br>
  
    <br>
<table>
  <tr>
    <td>Time in</td>
    <td>Time out</td>
    <td>Date<td>
  </tr>


<?php


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

echo "

<table>
  
  <tr>
  <form name='form' action ='' method='get'>   
    <td><input type = 'text' value = $time_in name= 'time_in'> </td>
    <td><input type = 'text' value = $time_out name= 'time_out'> </td>
    <td><label for='time_date'>$time_date</label></td>
  </form>
  </tr>
 
</table>"

;

$i++;
}








?>


<br><br>
<form action = "update_time.php" method "post">
<input type="submit" name="Update" value="Update"/><br><br>
</form>

<form action = "add_date.php" method ="post">
<td>Add day worked</td><br>
     <td><input type = "text" value = "Time In" name= "add_in"/></td>
     <td><input type = "text" value = "Time Out" name= "add_out"/></td>
     <td><input type = "text" value = "Date" name= "add_date"/></td>
     <td><input type="submit" name="Add" value="Add"/></td>
<br><br>
</form>
<form action = "delete_date.php" method = "post">
<td>Delete day worked</td><br>
   
     <td><input type = "text" value = "Date" name= "del_date"/></td>
     <td><input type="submit" name="Delete" value="Delete"/></td>
</form>



</html>
<!DOCTYPE html>
<html>

<?php
$username="root";
$password="";
$database="timestamp";

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
  <col width="0">
  <col width="75">
  <col width="175">
  <tr>
    <td></td>
    <td>Entry #</td>
    <td>Time in</td>
    <td>Time out<td>
  </tr>


<?php


$query_in="SELECT timein FROM timehistory";
$query_out="SELECT timeout FROM timehistory";
$query_ID="SELECT ID From timehistory";
$result_in=mysql_query($query_in);
$result_out=mysql_query($query_out);
$result_ID=mysql_query($query_ID);
$num=mysql_num_rows($result_in);



$i=0;
while ($i < $num) {
	$time_in=mysql_result($result_in,$i);
	$time_out=mysql_result($result_out,$i);
	$time_ID=mysql_result($result_ID,$i);

echo "

<table>
   <col width='80'>
   <col width='80'>
   <col width='80'>
  <tr>
  <form name='form' action ='' method='get'>   
    <td><label for='ID'>$time_ID</label></td>
    <td><input type = 'text' value = $time_in name= 'timein'> </td>
    <td><input type = 'text' value = $time_out name= 'timeout'> </td>
    
  </form>
  </tr>
 
</table>"

;

$i++;
}








?>
<br><br>
<form action = "construction.php" method = "post">
<input type="submit" name="Update" value="Update"/><br><br>
</form>

<form action = "add_date.php" method ="post">
<td>Add day worked</td><br>
     <td><input type = "text" value = "Time In" name= "add_in"/></td>
     <td><input type = "text" value = "Time Out" name= "add_out"/></td>
     
     <td><input type="submit" name="Add" value="Add"/></td>
<br><br>
</form>
<form action = "delete_date.php" method = "post">
<td>Delete day worked</td><br>
   
     <td><input type = "text" value = "Entry # to delete" name= "del_entry"/></td>
     <td><input type="submit" name="Delete" value="Delete"/></td>
</form>



</html>
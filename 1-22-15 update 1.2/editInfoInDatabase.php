
<?php
//database connection
require ('connect.php');

if(isset($_POST['update'])){

$id = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$occupation = $_POST['occupation'];

$sql = "UPDATE users SET email = '$email', name = '$name', occupation = '$occupation' WHERE name = '$name' ";

mysql_select_db('login');
$retval = mysql_query( $sql, $con );

//connection error or success
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($con);
}
?>

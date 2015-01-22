
<?php
//database connection
require ('connect.php');
mysql_select_db($database,$con);

$id = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$occupation = $_POST['occupation'];


if(isset($_POST['name'])){
	$update = "INSERT INTO users (`email`, `name`)
          VALUES
          ( '$email', '$name')";
		    
	if(!mysql_query($update,$con)){
		die('Error: '.mysql_error());
	}

//connection error or success
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($con);
}
?>
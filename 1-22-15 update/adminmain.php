
<?php require ('login.php'); ?>

<!DOCTYPE html>



<html lang="en" hc="a0" hcx="0">

<!-- the head- contains  basic site info-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="admin main navigation page. basically home page with all controls">
    <meta name="author" content="daneel">
    <link rel="cross.ico" href="favicon.ico" type="image/x-icon"/>

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

	<!-- Logo -->	
	<div align = "center"><img src="http://thewayclinic.org/waydev/wp-content/uploads/2011/07/the_way_logo_no-background1.png" align = "center" height ="155" width="255"></div>
</head>

	
	
<body>	

<?php
require ('connect.php');



$query="SELECT * FROM users";
$result=mysql_query($query);



mysql_close();
?>

	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <!--  <a class="navbar-brand" href="#"> big letters here</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/adminmain.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="updateInformation.php">Edit Volunteer Information</a></li>
			<li class="divider"></li>
            <li><a href="register.php">Sign up New  Volunteer</a></li>
          </ul>
        </li>
      </ul>
	  
	 
	  
	  
	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<h2 id="tables-condensed">Current Volunteers </h2>
  <div class="bs-example" data-example-id="condensed-table">
  
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>OCCUPATION</th>
		  
        </tr>
      </thead>
      <tbody>
	  
	<?php
	
	
$i=0;
while ($row = mysql_fetch_row($result)) {


$id=mysql_result($result,$i,"id");
$name=mysql_result($result,$i,"name");
$email=mysql_result($result,$i,"email");
$occupation=mysql_result($result,$i,"occupation");


?>  
	  
        <tr>
          <th scope="row"><?php echo $id; ?> </th>
          <td> <?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $occupation; ?></td>
        </tr>
   
		
		<?php

$i++;
}

?>
		
      </tbody>
    </table>
  </div><!

  
  <!-- this makes the toggling work -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
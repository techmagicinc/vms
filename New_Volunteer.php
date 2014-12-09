<!DOCTYPE html>
<html>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!--    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->
<?php
$username="root";
$password="";
$database="timestamp";

$con = mysql_connect('localhost','root',"",'users');

if (!$con){
  die('Could not connect: '.mysql_error());
}

mysql_select_db($database,$con);
?>

  <nav class="navbar navbar-default" role="navigation">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="http://localhost/img/wayfree.png" alt="">
   <!--    <a class="navbar-brand" href="#">Brand</a> -->
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="timestamp.php">Home<span class="sr-only">(current)</span></a></li>
      <li><a href="index.php">Admin Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Volunteer Services <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="New_Volunteer.php">New User Registration</a></li>
            <li><a href="contactform.html">Contact Administrator</a></li>
            <li><a href="edit_time.php">Profile Management</a></li>
             <li><a href="reportscript.php">Reporting</a></li>
           <!--  <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div>
Welcome! Please fill out this form to start volunteering here at The Way Clinic!
<form action = "add_vol.php" method = "post">
<table>

<tr>
	 <td><label for = "First Name"/>First Name: </label></td>
     <td><input type = "text" name= "fname"/></td>
     <td><label for = "Category"/>Category: </label></td>
     
</tr>
<tr>
	 <td><label for = "Last Name"/>Last Name: </label></td>
     <td><input type = "text" name= "lname"/></td>
     <td>
     <select name = "Group">
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
</div>
</div>
</div>    <script src="js/jquery-1.11.1.min.js"></script>
  <!--   // <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script> -->
    <script src="/js/search.js"></script>
  
<script src="js/bootstrap.min.js"></script>

</html>
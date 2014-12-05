<!DOCTYPE html>
<html>

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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="timestamp.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="index.php">Admin Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Volunteer Services <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="New_Volunteer.php">New User Registration</a></li>
            <li><a href="#">Contact Administrator</a></li>
            <li><a href="#">Profile Management</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
  
  <!--     <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>


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

<h1>Welcome! Please fill out this form to start volunteering here at The Way Clinic!</h1>
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
  		<option value="Administrator Support">Admin Support</option>
 		  <option value="Counselor Mental Health">Counselor</option>
  		<option value="Medical Doctor DO">Doctor</option>
  		<option value="Nurse">Nurse</option>
      <option value="PA">PA</option>
      <option value="Pharmacist">Pharmacist</option>
      <option value="Sonography">Sonographer</option>
      <option value="Student Admin">Student Admin Support</option>
      <option value="Student Nurse">Student Nurse</option>
	</select>
	</td>
	<td><input type="submit" name="Add_Vol" value="Add"/></td>
     
</tr>
</table>
</form>

<a href="timestamp.php">Back</a>

</html>

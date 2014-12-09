<!DOCTYPE html>
<html>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!--    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

</head>

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
            <li><a href="contactform.html">Contact Administrator</a></li>
            <li><a href="edit_time.php">Profile Management</a></li>
             <li><a href="reportscript.php">Reporting</a></li>
            <!-- <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
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

<script src="js/jquery-1.11.1.min.js"></script>
  <!--   // <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script> -->
    <script src="/js/search.js"></script>
  
<script src="js/bootstrap.min.js"></script>

</html>
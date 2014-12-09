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

<link href="css/bootstrap.min.css" rel="stylesheet">

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
        <li class="active"><a href="reportscript.php">Reporting<span class="sr-only"></span></a></li>
        <li><a href="#">Messages</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Volunteer Services <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="timestamp.php">Volunteer Sign In</a></li>
            <li><a href="New_Volunteer.php">New User Registration</a></li>
            <!-- <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
        <form action="logout.php" method="post">
    <input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
        <li><a href = "index.php">Log Out</a></li>
      </form>
      </ul>

</head>
<body>
  <?php

$query_fname="SELECT fname FROM timehistory";
$query_lname="SELECT lname FROM timehistory";
$query_in="SELECT timein FROM timehistory";
$query_out="SELECT timeout FROM timehistory";
$result_fname=mysql_query($query_fname);
$result_lname=mysql_query($query_lname);
$result_in=mysql_query($query_in);
$result_out=mysql_query($query_out);
$num=mysql_num_rows($result_in);



$i=0;
while ($i < $num) {
  $time_fname=mysql_result($result_fname,$i);
  $time_lname=mysql_result($result_lname,$i);
  $time_in=mysql_result($result_in,$i);
  $time_out=mysql_result($result_out,$i);

echo "

<table>
   <col width='80'>
   <col width='80'>
   
  <tr>
  <form name='form' action ='' method='get'>   
    <td><label for='fname'>$time_fname</label></td>
    <td><label for='lname'>$time_lname</label></td>
    <td><label for='timein'>$time_in</label></td>
    <td><label for='timeout'>$time_out</label></td>";

    ?>
    
    <td>
    <form action = "construction.php" method = "post">
    <input type='submit' name='Update Profile' value='Update Profile'/>
    </form>
    </td>
    <td>
    <form action = 'edit_time.php' method = 'post'>
    <input type='submit' name='Update Time' value='Update Time'/>
    </form>
    </td>

<?php
    
 echo"
  </form>
  </tr>
 
</table>"


;

$i++;
}

    ?>
</body>
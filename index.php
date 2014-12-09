<html>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!--    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

<head>

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
<!--      <ul class="nav navbar-nav">
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
<body>
<font>
<center><h1>Admin Login</h1></center>
<br>
<br>
</font>
<form action="login.php" method="POST">
<center>Username: <input type="text" name="uname"></center><br>
<br>
<center>Password: <input type="password" name="pass"></center><br>
<br>

<?php
//<div align="center">
//<input name="remember" type="checkbox" id="remember" value="1">
//Remember me
//</div>
?>

<br>
<center><input type="submit" value="login" name="submit"></center>
<br>

<p>
<center><a href="timestamp.php">  Volunteer Sign In </a><font color="#FF6600"></font></center>
</p>

</form>
</body>
</head>
  <script src="js/jquery-1.11.1.min.js"></script>
  <!--   // <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script> -->
    <script src="/js/search.js"></script>
  
<script src="js/bootstrap.min.js"></script>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Way Free Medical Clinic Volunteer Management</title>

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


<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-4">
            <div class="page-header">
                <h1>The Way Free Medical Clinic Volunteer Management System</h1>
                        <h3>Please input your name</h3>
            </div>
            
        </div>
    </div>
   
   
<div class="container-fluid">
    <body id="body-color">

<div id="Sign-In">
    <!-- <h3>Search Volunteer Names</h3> -->
    <p>You may search either by first or last name</p>
   
    <form  method="post" action="search.php?go"  id="searchform" class="form-horizontal">
     <div class="control-group">
      <input  type="text" name="name">
      <input  type="submit" name="submit" value="Login">
    </form>
    </div>
</div> 
</div>
<div class="table-responsive">
          <table class="table table-bordered table-hover table-striped tablesorter">
            <thead>
            <tr>
                <th>Name <i class="fa fa-sort"></i></th>
                <th>Last Time Recorded <i class="fa fa-sort"></i></th>
             
              </tr>
            </thead>
                <tbody>
<?php
    $con=mysqli_connect("localhost","root","","timestamp");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM timehistory");

    while($row = mysqli_fetch_array($result))
      {
         
    
      echo '<td align="center">' . " " . $row['lname'];  //these are the fields that you have stored in your database table employee
      echo '<td>'.$row['timeout'].'</td>';
      echo "<br />";
      ECHO "</tr>\n";
      }


    mysqli_close($con);
    ?>
        </tbody>

          </table>


    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
  <!--   // <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script> -->
    <script src="/js/search.js"></script>
  
<script src="js/bootstrap.min.js"></script>
</div>
</body>

</html>
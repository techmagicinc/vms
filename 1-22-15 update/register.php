
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="admin main navigation page. basically home page with all controls">
    <meta name="author" content="daneel">
    <link rel="cross.ico" href="favicon.ico" type="image/x-icon"/>

    <title>edit volunteer information</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

	<!-- Logo -->	
	<div align = "center"><img src="http://thewayclinic.org/waydev/wp-content/uploads/2011/07/the_way_logo_no-background1.png" align = "center" height ="155" width="255"></div>
</head>
<body>
	<nav class="navbar navbar-default">
  <div  class="container">
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
	  <!--
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
	  -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!-- this makes the toggling work -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
 <div class="container" >

<title>PHP Login :: Free Registration/Signup Form</title>
<table>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>
	<?php 
	 if (isset($_GET['done'])) { ?>
	  <h2>Thank you</h2> Your registration is now complete and you can <a href="vindex.php">login here</a>";
	 <?php exit();
	  }
	?></p>
      <h3 class="titlehdr">New User Signup</h3>
      <p>Please register if this is your first time signing in.
		<br> Thank You.
	  </p>
	 <?php	
	 if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "* $e <br>";
	    }
	  echo "</div>";	
	   }
	 ?> 
      <form action="doregister.php" method="post" name="regForm" id="regForm" >
        <table width="95%" border="0" cellpadding="3" cellspacing="3" class="forms">
          <tr> 
            <td colspan="2">First and Last Name<span class="required"><font color="#CC0000">*</font></span><br> 
              <input name="name" type="text" id="name" size="40" class="required"></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>

         
          <tr> 
            <td>Your Email<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="email" type="text" id="email" class="required email"> 
              <span class="example">*Valid email</span></td>
          </tr>
          
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
         
          </tr>
        </table>
        <p align="center" >
          <input name="doRegister" type="submit" id="doRegister" value="Sign up">
        </p>
      </form>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

</body>
</html>
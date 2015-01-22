


<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en" hc="a0" hcx="0"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="" href="">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./test_files/ie-emulation-modes-warning.js"></script><style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	
  <p style="text-align:right">
<a href="vindex.php" type="button" class="btn btn-xs btn-link">Volunteer Login</a>
</p>	
<!-- Logo -->	
<div align = "center"><img src="http://thewayclinic.org/waydev/wp-content/uploads/2011/07/the_way_logo_no-background1.png" align = "center" size ="44"></div>

	
  <body>
    <div class="container">

     <form style="align:center" action="login.php" method="POST" class="form-signin" role="form" >
       <center> <h2 class="form-signin-heading">Admin Login</h2> </center>
        <label for="uname" class="sr-only" >Username</label>
        <input type="text"  placeholder="Username" class="form-control" name="uname" required="">
        <label for="pass" class="sr-only">Password</label>
        <input type="password"  placeholder="Password" id="password" class="form-control" name="pass" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button type="submit" value="login" name="submit" class="btn btn-lg btn-primary btn-block" >Sign In</button>
      </form>

    </div> <!-- /container -->

  

</body></html>
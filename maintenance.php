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

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top">
<link href="Site.css" rel="stylesheet">
</head>
<body>

<form action="login.php" method="POST">



</form>
<form action="logout.php" method="post">
    <input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
    <input type="submit" value="logout" />
</form>
<table width="150%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top">
<div class="myaccount">
  <p><strong>Administration</strong></p>
  <a href="home.php">Home</a><br>

    <td width="732" valign="top"><p>&nbsp;</p>
	  

	 
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>


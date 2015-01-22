<html>
<head>
<title>admin page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="styles.css" rel="stylesheet" type="text/css">
</head>

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

<form action="signin.php" method="POST">

</form>
<form action="vlogout.php" method="post">
    <input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
    <input type="submit" value="logout" />
</form>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top">
<div class="myaccount">
  <p><strong>My Account</strong></p>
  <a href="myAccount.php">Update-Information</a><br>
  <br>
  <a href="myHours.php">View Hours</a><br>
  <br>
      <a href="vhome.php">Home </a>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>&nbsp;</p>
	  

	 
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
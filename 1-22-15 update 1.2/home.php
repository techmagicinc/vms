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
  <a href="adminEditInfo.php">Volunteer Information</a><br>
  <a href="hours.php">Print/Edit Hours</a><br>
     <a href="home.php">Home </a>
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
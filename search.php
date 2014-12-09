
<head>
<style  type="text/css" media="screen">
ul  li{
  list-style-type:none;
}
</style>
</head>


<?php
// $curDate = new DateTime();
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];

  //connect  to the database
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("timestamp");
  //-query  the database table
  $sql="SELECT  ID, fname, lname FROM users WHERE fname LIKE '%" . $name .  "%' OR lname LIKE '%" . $name ."%'";
  //-run  the query against the mysql query function

  $result=mysql_query($sql);

 //      if(!$result){
 //        die("database query failed: " . mysql_error());
 //  echo "<p>No results found</p>";
 //  echo "<p><a  href=\"New_Volunteer.php\">Click Here to create a new volunteer profile</p>";
 // }
  if(mysql_num_rows($result)==0) {
    echo "<p>No results found</p>";
    echo "<p><a  href=\"New_Volunteer.php\">Click Here to create a new volunteer profile</p>";
  }
  
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $FirstName  =$row['fname'];
          $LastName=$row['lname'];
          $ID=$row['ID'];
        

  //-display the result of the array

  echo "<ul><h2><center><th>Thank you for your time</h2></th></center>\n";
  echo "<li>" . "<a  href=\"edit_time.php\">"   .$FirstName . " " . $LastName .  "</a></li>\n";
echo "<td>{$row['fname']}</td>\n";
echo "<td>{$row['lname']}</td>\n"; 




  // header('Refresh: 10;url=home.html');
  //CURRENT_TIMESTAMP  
  $query="INSERT INTO timeclock(fname,lname,time) VALUES ('$FirstName','$LastName', CURRENT_TIMESTAMP)";
  $query2="INSERT INTO timehistory(fname,lname,timeout) VALUES ('$FirstName','$LastName', CURRENT_TIMESTAMP)";
 
  mysql_query($query);
  mysql_query($query2);

 date_default_timezone_set('America/New_York');
$curDate = new DateTime();
echo date_format($curDate,'Y-m-d h:i:s A');
// echo "<form>";
// echo "<form action='tag.php' method='post'>";
// echo "<input type='submit' name='submit'>";
// echo "</form>";

echo "<p><a  href=\"timestamp.php\">Home</p>";
  echo "</ul>";
// header('Refresh: 3; url=/timestamp.php');
  }

  }
  else{ // if there is no matching rows do following
            echo "No results";
  }

  }

  }

  
?>
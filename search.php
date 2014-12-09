
<head>
<style  type="text/css" media="screen">
ul  li{
  list-style-type:none;
}
</style>
</head>


<?php
$curDate = new DateTime();
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
  
 
        
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $FirstName  =$row['fname'];
          $LastName=$row['lname'];
          $ID=$row['ID'];

 
 

  //-display the result of the array

  echo "<ul><h2><center><th>Thank you for your time</h2></th></center>\n";
  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n";
echo "<td>{$row['fname']}</td>\n";
echo "<td>{$row['lname']}</td>\n"; 

        // $table = 'timeclock';
        // $result = MYSQL_QUERY("SELECT * FROM {$table}");

        // $fields_num = MYSQL_NUM_FIELDS($result);

        // // ECHO "<h1>Table: {$table}</h1>";
        // ECHO "<table border='1'><tr>";
        // // printing table headers
        // FOR($i=0; $i<$fields_num; $i++)
        // {
        //     $field = MYSQL_FETCH_FIELD($result);
        //     ECHO "<td>{$field->name}</td>";
        // }
        // ECHO "</tr>\n";
        // // printing table rows
        // WHILE($row = MYSQL_FETCH_ROW($result))
        // {
        //     ECHO "<tr>";

        //     // $row is array... foreach( .. ) puts every element
        //     // of $row to $cell variable
        //     FOREACH($row AS $cell)
        //     ECHO "<td>$cell</td>";

        //     ECHO "</tr>\n";
        // }


  // header('Refresh: 10;url=home.html');
  //CURRENT_TIMESTAMP  
  $query="INSERT INTO timeclock(fname,lname,time) VALUES ('$FirstName','$LastName', CURRENT_TIMESTAMP)";
  mysql_query($query);
 date_default_timezone_set('America/New_York');
$curDate = new DateTime();
echo date_format($curDate,'Y-m-d h:i:s A');
// echo "<form>";
// echo "<form action='tag.php' method='post'>";
// echo "<input type='submit' name='submit'>";
// echo "</form>";


  echo "</ul>";
header('Refresh: 3; url=/timestamp.php');
  }
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
  
?>
<?php
$con=mysqli_connect("localhost","root","","timestamp");
//mysql_select_db("WayFreeClinic") or die ("Unable to select database!");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$from = $_POST['from'];
$to = $_POST['to'];

if(isset($_POST["reportbutton"]))
{
//$query = "SELECT * FROM Volunteer WHERE ClockIn BETWEEN '".$_POST['from']."' AND '".$_POST['to']."'";
  $query = "SELECT * FROM timehistory";
}

$result = mysqli_query($con,$query);
    echo "<table border='1'><tr><th>First Name</th><th>Last Name</th><th>Clock In</th><th>Clock Out</th></tr>";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result))
    {
    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    // echo "<td>" . $row['Group'] . "</td>";
    echo "<td>" . $row['timein'] . "</td>";
    echo "<td>" . $row['timeout'] . "</td>";
    echo "</tr>";
    }
  echo "</table>";
}
else 
  {
  echo "No rows found!";
  }


mysqli_close($con);
?>
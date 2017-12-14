<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

$conn = mysqli_connect("localhost","root","root","blackboard_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $host= "localhost";
 $username="root";
 $password="root";
 $dbname="blackboard_db";
  
  
?>
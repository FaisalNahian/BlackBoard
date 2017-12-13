<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

$con = mysqli_connect("heyfaisal.com","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
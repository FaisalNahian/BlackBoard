<?php

session_start();
require_once("rconnect.php");

//include 'connect.php';
include 'rNavBar.php';
include 'rTempBody.php';

$host = "localhost";
$username ="root";
$password = "";
$dbname = "blackboard_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

 <?php
 $id = $_GET['id'];
 $cid = $_GET['cid'];

echo "<div id='formdiv'>

<div id='formcontainer'>

<h3 style='margin-bottom:25px;'>Assignment Info</h3>

<form method='post' action='rUpdateRedirect.php'>
	
	<input type='text' name='assign_title' id='title' placeholder='Assignment Name' >
	
	<textarea type='text' name='assign_desc'  id='desc' placeholder='Description of Assignment'></textarea>
	
	<input type='hidden' name='assign_id' value='".$id."' />
	<input type='hidden' name='class_id' value='".$cid."' />
	
	<input type='submit' name='submit' value='submit' style='margin-top:25px; float:right; background:rgba(150,235,120,1); text-align:left;' >
</form>


<br> 

	</div>
</div>


";

?>




  




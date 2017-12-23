<?php
session_start();
include 'rNavBar.php';
include 'rTempBody.php';
// Create connection
$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }

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




  




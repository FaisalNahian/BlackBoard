<?php  

session_start();
require_once("rconnect.php");

//include 'connect.php';
include 'rNavBar.php';
include 'rTempBody.php';

$host = "localhost";
$username ="root";
$password = "root";
$dbname = "blackboard_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cid = $_POST['class_id'];

   $sql="UPDATE assignments 
   SET assign_title = '".$_POST["assign_title"]."',
   assign_desc = '".$_POST["assign_desc"]."'  
   WHERE assign_id = '".$_POST["assign_id"]."' " ;
 
 $result = mysqli_query($conn,$sql); 
 
 echo "

 <form id='myform' action='rViewAssignments.php' method='post'>
<input type='hidden' name='class_id' value='".$cid."' />

</form>
<script type='text/javascript'>
document.getElementById('myform').submit();
</script>
 


";



?>
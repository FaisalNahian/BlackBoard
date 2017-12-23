<?php  

session_start();
//include 'php/connect.php';
include 'rNavBar.php';
include 'rTempBody.php';

// Create connection
$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
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
<?php

session_start();
//require_once("php/connect.php"); 
// Create connection
$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }

 $id = $_POST['assign_id'];
 echo $id;
 $cid = $_POST['class_id'];
 echo $cid;
  
   $sql="DELETE FROM assignments 
     
   WHERE assign_id = '$id' " ;
 
 $result = mysqli_query($conn,$sql); 
 
echo "

 <form id='myform' action='rViewAssignments.php' method='post'>
<input type='hidden' name='class_id' value='".$cid."' />

</form>
<script type='text/javascript'>
document.getElementById('myform').submit();
</script>
 
 echo 'deleted';

";



?>


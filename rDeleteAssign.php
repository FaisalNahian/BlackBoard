<?php

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


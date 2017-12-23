<?php
session_start();
require_once("rConnect.php");


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



   
if(isset($_POST['btn-upload']))
{    

 $id = $_POST['class_id'];

 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="rUploads/";
     
   
 move_uploaded_file($file_loc, $folder.$file);
   
   $sql="INSERT INTO assignments(file,type,size,class_id) VALUES('$file','$file_type','$file_size','$id')";
 
 $result = mysqli_query($conn,$sql); 
 
 

$last_id = mysqli_insert_id($conn);

header("Location: rAssigninfo.php?id=$last_id&cid=$id"); 


	}
    

 


?>



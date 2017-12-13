<?php

$class = $_GET["class"];

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
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="ruploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO assignments(file,type,size) VALUES('$file','$file_type','$file_size')";
 
 $result = mysqli_query($conn,$sql);
}
?>
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



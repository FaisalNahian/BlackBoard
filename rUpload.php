<?php
session_start();
require_once("php/connect.php");

$class = $_GET["class"];

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
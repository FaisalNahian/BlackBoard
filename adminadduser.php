<?php
  session_start();
  $_SESSION['success']="false";

  require_once("php/connect.php");

    $name = $_POST['name'];
	  $address = $_POST['address'];
    
   
    $mobile = $_POST['mobile'];
  
    $pass = md5($_POST['txtpassword']);
	  $lib = $_POST['lib'];
    
   if( mysqli_query($con," insert into user(name,address,phone,password,libid) values ('$name','$address','$mobile','$pass','$lib') ;"))
   {
	   echo "databse created";
        $_SESSION['success']="true";  
       
        header("Location: ..\home.php");
   }
   else
        echo "<h1> Insert Failed </h1>";

   mysqli_close($con) or die(" Connection failed to close ! ") ;
?>
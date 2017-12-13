<?php
    session_start();
    require_once("php/connect.php");
    
    $name = $_POST['username'];
    $pass = $_POST['pass'];
		    
    # Validate login credentials
    if( $name == "admin" && $pass == "admin")
    {
        
        
            $_SESSION['uid']=$name;
            header('Location: ..\home.php') or die(" Error ");
        }
        
    	
        $_SESSION['login_error']=true;
        header("Location: ..\index.php") or die(" Error ");
    mysqli_close($con);
  
?>
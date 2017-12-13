<?php
    session_start();
    require_once("php/connect.php");
    
    $username = $_POST['username'];
    $password = $_POST['pass'];
	
	echo $username ;
    
    # Validate login credentials
    
    $result = mysqli_query($con," select * from registration where username='$username';") or die(" Error ");
    $data = mysqli_fetch_array($result);

    if( $data['username']==$username )
    {
        if($data['password']==md5($password))
        {
            $_SESSION['uid']=$username;
            header('Location: ..\userhome.php') or die(" Error ");
        }
        
    }
	
        $_SESSION['login_error']=true;
        header("Location: ..\index.php") or die(" Error ");
    mysqli_close($con);
  

?>
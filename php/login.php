<<<<<<< HEAD
<?php
    session_start();

   require_once("connect.php");
    
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
=======
 <?php
require('connect.php');
include("auth.php");
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `registration` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";

	}
    }else{
		
	}
	
?>
>>>>>>> 588748919bbca0a2bfc7a8b88b0ffeb13fd4c27e

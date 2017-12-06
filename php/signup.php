<?php
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$mobile = stripslashes($_REQUEST['mobile']);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$student_id = stripslashes($_REQUEST['student_id']);
	$student_id = mysqli_real_escape_string($con,$student_id);
	
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `registration` (username, password, email, student_id, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$student_id', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
		
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{}
?>
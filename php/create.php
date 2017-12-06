<?php 
	session_start();
	require_once("connect.php");
	
	$uid = $_SESSION['uid'];
	
	# Extract Form values
	$sno = $_POST['sno'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$stud_id = $_POST['stud_id'];
	$course = $_POST['course'];
	$semester = $_POST['semester'];
	$regcount = $_POST['regcount'];
	$status = $_POST['status'];
	
	#echo $fname . $lname . $mobile . $landline . $email . $public;
	
	if( mysqli_query($con," insert into students(sno,fname,lname,stud_id,course,semester,regcount,status) values('$sno','$fname','$lname','$stud_id','$course','$semester','$regcount','$status''active')"))
	{
		
			
			
		$_SESSION['insert_success']=1;
		header("Location: ..\create.php");
	}
	else
	{
		$_SESSION['insert_success']=0;
		header("Location: ..\create.php");
	}	
	mysqli_close($con);
?>
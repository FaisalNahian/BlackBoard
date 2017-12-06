<?php 
	session_start();
	require_once("connect.php");
	
	$bookid = $_POST['delete'];
	$uid = $_SESSION['uid'];
	
	if(!$con)
	{
		die("connection failed:".mysqli_connect_error());
	}
	else{
		echo "connection succesfull";
	}
	$sql = "delete from students where stud_id= $stud_id";
	if(mysqli_query($con,$sql))
	{
		$_SESSION['delete_success']="Student Successfully Deleted !";
		header("Location: ..\delete.php ");
	}
	else
	{
		$_SESSION['delete_success']="Could Not Find Student ID !";
		header("Location: ..\delete.php ");
	}

	mysqli_close($con);

?>
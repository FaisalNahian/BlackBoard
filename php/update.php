<?php
	session_start();
	require_once("connect.php");
	$uid = $_SESSION['uid'];
	
	$bookid =$_POST['bookid'];
	$title=$_POST['title'];
	$authid=$_POST['authid'];
	$libid=$_POST['libid'];
	$isbn=$_POST['isbn'];
	$publisher=$_POST['publisher'];
	echo $bookid;
	echo $title;
	echo $authid ;
	echo $libid ;
	echo $isbn ;
	echo $publisher ;
	
	
	$res=mysqli_query($con," update book set title='$title',authid='$authid',libid='$libid', isbn='$isbn',publisher='$publisher' where bookid='$bookid' ");
	if($res!=0)
	{
		$_SESSION['update_success']=true;
		header("location:../home.php");
		mysqli_close($con); 
	}
	else
		echo "Update Failed : Error in query";
	
?>
<?php

session_start();
	require_once("connect.php");
	$borrowid = $_POST['btn'];
	echo $borrowid;
	$select = mysqli_query($con,"select * from borrow where borrowid = '$borrowid'");
	$select1 = mysqli_fetch_Array($select);
$bookid=$select1[1];
$update = 	mysqli_query($con,"update book set status='available' where bookid ='$bookid'");
	$retdelete = mysqli_query($con,"delete from borrow where borrowid= '$borrowid'");
		header("Location: ..\borrow.php ");
		mysqli_close($con);
		?>
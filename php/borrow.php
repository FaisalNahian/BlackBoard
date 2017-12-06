<?php

session_start();
	require_once("connect.php");
	$userid = $_POST['btn'];
	$result1 = mysqli_query($con," select * from reserve") or die("Error " . mysql_error());

$result2=mysqli_fetch_Array($result1);
	
	$borrow = mysqli_query($con," insert into borrow(bookid,id,libid,borrowdate,retdate) values ('$result2[1]','$result2[3]','$result2[2]','$mydate','$mydate1')");
 
 
$borrowresult = mysqli_query($con," select * from borrow where id = '$result2[3]'") or die("Error " . mysql_error());

$count = mysqli_query($con," update book set borrowcount = (borrowcount+1) where bookid='$result2[1]'");
$count1 = mysqli_query($con," update user set borrowcount = (borrowcount+1) where id='$result2[3]'");

 $bookstatus = mysqli_query($con," update book set status = 'NA' where bookid='$result2[1]'");
//$bookdelete =  mysqli_query($con," delete from reserve where reserveid = '$result2[0]'");
header("Location: ..\display.php ");
		mysqli_close($con);
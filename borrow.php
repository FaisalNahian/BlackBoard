<?php 
session_start();


require_once("php/connect.php");
?>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title> Search Book </title>
	
</head>

<body >

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		
		<div class="navbar-header">
			<a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
		</div>

	
        <div>
            <ul class="nav navbar-nav">
                <li > <a href="userhome.php"> Home </a> </li>
                
    
                <li class="active"> <a href="borrow.php"> View Borrowed Books</a> </li>
                <li > <a href="display.php"> Display all books </a> </li>
				
				
                
				
				

            </ul>


            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['uid']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

	</div>
	
</nav>
<?php

//echo $_SESSION['uid'];//username

$var = $_POST['btn'];//book id
$mydate = date('Y-m-d');//current date
$mydate1 = date('Y-m-d', strtotime($mydate. ' + 20 days'));
//echo $mydate1;

$result = mysqli_query($con," select * from user where name = '$_SESSION[uid]'") or die("Error " . mysql_error());

$data = mysqli_fetch_Array($result); 
//echo "<br>".$data[0];//userid
//echo "<br>".$var;
$result1 = mysqli_query($con," select * from reserve") or die("Error " . mysql_error());

$result2=mysqli_fetch_Array($result1);
//echo "<br>".$result2[0];
//echo "<br>".$result2[1];

//echo "<br>".$result2[2];//libid
//echo "<br>".$result2[3];

//echo $mydate;//current date
$borrow = mysqli_query($con," insert into borrow(bookid,id,libid,borrowdate,retdate) values ('$result2[1]','$result2[3]','$result2[2]','$mydate','$mydate1')");
 
 
$borrowresult = mysqli_query($con," select * from borrow where $data[0]=id") or die("Error " . mysql_error());

$count = mysqli_query($con," update book set borrowcount = (borrowcount+1) where bookid='$var'");
 $bookstatus = mysqli_query($con," update book set status = 'NA' where bookid='$var'");
$bookdelete =  mysqli_query($con," delete from reserve where reserveid = '$result2[0]'");
?>
<table class="table table-bordered" style="font-family:aerial;font-size:15">
	<tr>
		<th> BorrowID</th>
		<th> BookID</th>
		<th> UserID</th>
		<th> Library ID</th>	
		
		
		<th> Borrow date</th>
		<th> Return Date</th>
		
		
		
	<tr>
	<?php
while($databorrow=mysqli_fetch_Array($borrowresult))
{
echo "<tr>";
echo "<th> $databorrow[0]</th>";
echo "<th> $databorrow[1]</th>";
echo "<th> $databorrow[2]</th>";
echo "<th> $databorrow[3]</th>";
echo "<th> $databorrow[4]</th>";
echo "<th> $databorrow[5]</th>";

echo "<td height='10'> <form  method='post' action='php/returndelete.php'> <button class='btn btn-default' name='btn' type='submit' value='".$databorrow[0]."'>Return</button> </form></td>";
		


}

?>





</body>

</html>
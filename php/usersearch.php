<html>
	
<head>
	<link href="..\bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="..\bootstrap/js/jquery-1.12.2.js"></script>
	<script src="..\bootstrap/js/bootstrap.min.js"></script>

		<!-- Date time picker attachement -->
		<link rel="stylesheet" href="..\bootstrap/css/datepicker.css">

	<!--	<script src="bootstrap/js/jquery-1.9.1.min.js"></script> -->

		<script src="..\bootstrap/js/bootstrap-datepicker.js"></script>
		<title> Results </title>
		


</head>
<body>
			<script>
			
			function f1()
			{
				alert("Done");
			}
			
			</script>
<?php

session_start();

require_once("connect.php");



list($key,$criteria) = split(":",$_POST['str']);
$uid = $_SESSION['uid'];

//echo $key;
//echo $criteria;
$result = mysqli_query($con," select * from book where $criteria = '$key' ") or die("Error " . mysql_error());


?>
<table class="table table-bordered">
	<tr>
		<th> Book ID</th>
		<th> Book Title</th>
		<th> Author ID</th>
		<th> Library ID</th>	
		<th> ISBN </th>
		<th> Publisher </th>
		<th> Publication Date </th>
		
	<tr>
	<?php
	$f=0;
	while($data=mysqli_fetch_Array($result))
	{
		$f=1;
		echo "<tr>";
		echo "<td> $data[0] </td> ";
		echo "<td> $data[1] </td> ";
		echo "<td> $data[2] </td> ";
		echo "<td> $data[3] </td> ";
		echo "<td> $data[4] </td> ";
		echo "<td> $data[5] </td> ";
		echo "<td> $data[6] </td> ";
		
		//echo "<td> <form  method='post' action=''> <button class='btn btn-default' name='btn' type='submit' value='".$data[2]."'>Reserve</button> </form></td>";
		echo "</tr>";
	}
	?></table>
	<?php
if($f==0)
{
echo "could not find the book";
}
mysqli_close($con);


 
?>


</body>
</html>
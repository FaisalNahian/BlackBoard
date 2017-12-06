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


$result = mysqli_query($con," select * from 'students' where $criteria = '$key' ") or die("Error " . mysql_error());


?>
<table class="table table-bordered">
	<tr>
		<th> SNO</th>
		<th> First Name</th>
		<th> Last Name</th>
		<th> Student ID</th>	
		<th> Course</th>
		<th> Semester </th>
		<th> Course Registered </th>
		<th> Status</th>
		
		
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
		echo "<td> $data[7] </td> ";
		
		echo "<td> <form  method='post' action='update.php'> <button class='btn btn-default' name='btn' type='submit' value='".$data[0]."'>&nbsp;<span class='glyphicon glyphicon-pencil'></span>&nbsp;</button> </form></td>";
		echo "</tr>";
	}
	?></table><?php
if($f==0)
{
echo "could not find student";
}
mysqli_close($con);


 
?>


</body>
</html>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title>Instructors Display</title>
	
</head>

<body >

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		
		<div class="navbar-header">
			<a hre="#" class="navbar-brand" />BLACKBOARD</a>
		</div>

		<!-- Menu  Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="#"  > <a href="home.php"> Home</a></li>
               <!--- <li  > <a href="create.php"> Upload Assignment </a> </li>
                <li > <a href="delete.php"> Delete Assignment </a> </li>-->
                <li > <a href="rViewClass.php"> View My Classes</a></li>
				<li class="active"> <a href="admindisplay.php"> Display All Students</a></li>
				<li> <a href="rViewAssignments.php"> Display All Assignments</a></li>
			</ul>

			<!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">			   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="update.php"><span class="glyphicon glyphicon-edit"></span> Edit Profile</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
	</div>

</nav>
<?php

// Create connection
$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }

$result = mysqli_query($con," select * from students ") or die("Error " . mysql_error());
?>
<table class="table table-bordered">
	<tr>
		<th> Portal ID</th>
		<th> First Name</th>
		<th> Last Name</th>
		<th> Student ID</th>	
		<th> Course</th>
		<th> Semester</th>
		<th> Course Registered</th>
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
echo "could not find the student";
	}
mysqli_close($con);
 
?>



</body>
</html>
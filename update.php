<?php
    session_start();
	// Create connection
	$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
	  }


    if(!isset($_POST['btn']))
            {
                    header("location: home.php");
            }
	$var = $_POST['btn'];
	$_SESSION['btn']=$var;
	$uid = $_SESSION['uid'];	
	
	$res = mysqli_query($con," select * from students where stud_id='$var' ") or die("Screwed"+mysqli_error($con));
	$data = mysqli_fetch_row($res);
	//$up_data = $data[0] . ":" . $data[1] . ":" . $data[2] . ":" . $data[3] . ":" . $data[4];
	//$_SESSION['up_data']=$up_data;
	//header("location:update.php");
	mysqli_close($con);
?>
<html>
	
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<title>Update Profile</title>
</head>
		
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-header" >
            <a hre="home.php" class="navbar-brand"/>BLACKBOARD </a>
        </div>
        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"> <a href="home.php"> Home</a></li>
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
    </div><!-- end of container -->
</nav><!-- end of navigation -->
   
<div class="container-fluid">
   <div class="row">
       
		<div class="col-xs-4" >
			
		</div>
         
		<div class="col-xs-4" style="background-color:white ">

			<form method="post" action="php/update.php">

				<table class="table table-hover"  width="100%">

					<tr>

						<th colspan="2" > <h2 align="center">Update Profile</h2> </th>
					</tr>

					<tr>
					<td><label for="bookid">Portal ID</label></td>
						<td> <input type="text" name="bookid"  data-toggle="tooltip" title="bookid" value="<?php echo htmlentities($data[0])?>" class="form-control" placeholder="Portal ID"/> </td></tr>
						
					<tr>
					<td><label for="title">First Name</label></td>
								
					<td> <input type="text" name="title" data-toggle="tooltip" title="title"value="<?php echo htmlentities($data[1])?>" class="form-control" placeholder="First Name"/> </td>
						
					</tr>

					<tr>
					<td><label for="authid">Last Name</label></td>
						
						<td> <input type="text" name="authid" data-toggle="tooltip" title="authid" value="<?php echo htmlentities($data[2])?>" class="form-control" placeholder="Last Name"/>  </td>
					</tr>

					<tr>
						<td><label for="libid">Student ID</label></td>
				
						<td> <input type="text" name="libid" data-toggle="tooltip" title="libid" value="<?php echo htmlentities($data[3])?>" class="form-control" placeholder="Student ID"/> </td>
						
					</tr>

					<tr>
						<td><label for="bookisbn">Course</label></td>
				
						<td> <input type="text" name="isbn" data-toggle="tooltip" title="isbn" value="<?php echo htmlentities($data[4])?>" class="form-control" placeholder="Course"/> </td>
						
					</tr>

					<tr>
						<td><label for="publisher">Semester</label></td>
				
						<td> <input type="text" name="publisher" data-toggle="tooltip" title="publisher" value="<?php echo htmlentities($data[5])?>" class="form-control" placeholder="Semester"/> </td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><label for="publisher">Course Registered</label></td>
				
						<td> <input type="text" name="publisher" data-toggle="tooltip" title="publisher" value="<?php echo htmlentities($data[5])?>" class="form-control" placeholder="Course Registered"/> </td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><label for="publisher">Status</label></td>
				
						<td> <input type="text" name="publisher" data-toggle="tooltip" title="publisher" value="<?php echo htmlentities($data[5])?>" class="form-control" placeholder="Status" /> </td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td> <br/> <input type="submit" class="btn btn-primary" value="Update"/></td>
						<td></td>
					</tr>

				</table>
			</form>
		</div>
         
		<div class="col-xs-4" >
			
		</div>
       
    </div><!-- end of row -->
</div><!-- end of container -->
  
</body>
</html>
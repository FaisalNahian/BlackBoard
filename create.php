<?php
    session_start();

    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
            }

    $uid = $_SESSION["uid"];
	if(isset($_SESSION['insert_success']))
	{
		if($_SESSION['insert_success']==1)
			$cs = " student Added Successfully !";
		else
			$cs = " student Already Exist !";
		
		unset($_SESSION['insert_success']);
	}

	else
	{
		$cs="";
	}
?>

<html>
	
<head>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/datepicker.css">
	<!-- Date Picker-->
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		// When the document is ready
		$(document).ready(function () {

			$('#txtdatepicker').datepicker({
				format: "yyyy/mm/dd"
			});
			
		});
		</script>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
		<title> UPLOAD ASSIGNMENTS </title>
</head>
		
<body>

    <nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			
			<div class="navbar-header">
				<a hre="#" class="navbar-brand" /> BLACKBOARD SYSTEM </a>
			</div>
			
			<!-- Menu  Left -->
        <div>
            <ul class="nav navbar-nav">
                 <li class="active"  > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Upload Assignment </a> </li>

                <li > <a href="delete.php"> Delete Assignment </a> </li>
                <li > <a href="adminsearch.php"> View My Classes </a> </li>
				<li > <a href="adduser.php"> Add User</a> </li>
				<li > <a href="adminreserve.php"> View Registered Classes</a> </li>
				<li > <a href="adminborrow.php"> View Registered Students</a> </li>
				
				<li > <a href="admindisplay.php"> Display All Students</a> </li>
				<li > <a href="adminassignments.php"> Display All Assignments</a> </li>
				
				
				<li class="dropdown">
				
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> More Options <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="freqborrower.php">Recently Registered Classes</a></li>
						<li><a href="freqborrowedbook.php">Recently Updated Assignments</a></li>
						<li><a href="freqborrowerb.php">Recently Graded Assignments</a></li>

                   
                </li>
				
				

            </ul>


            <!-- Menu  right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>
			
		</div>
		
	</nav>
   
   <div class="container-fluid">
         
    <div class="row">
       
		<div class="col-xs-4" >
			
		</div>

		<div class="col-xs-4" style="background-color:white ">

			<form method="post" action="php/create.php"  >
			
			<table class="table table-hover"  width="100%" >

				<tr>

					<th colspan="3" > <h2 align="center"> Upload Assignments </h2> </th>
				</tr>

				<tr>
					<td> <input type="text" name="bookname"  class="form-control" placeholder="Assignment Title" required/> </td></tr>
					<tr><td> <input type="text" name="authid" class="form-control" placeholder="Staff ID" required/> </td></tr>
					
				</tr>

				<tr>
					<td> <input type="number" maxlength="10" name="libid" class="form-control" placeholder="Course Id" required/>  </td>
					
				</tr>

				<tr>
					<td> <input type="text" name="publisher" class="form-control" placeholder="Professor Name" required/> </td></tr>
					
					<tr><td><input type="number" name="update" class="form-control" placeholder="Upload Date" id="txtdatepicker" required/></td>
					
					<tr><td><input type="number" name="duedate" class="form-control" placeholder="Due Date" id="txtdatepicker" required/></td>
				
				</tr>

				<tr>

					<td>   
					 <textarea id="myTextareat" name="upload" rows="6" cols"40" style="width:600;"></textarea>
							<form action="http://jkorpela.fi/cgi-bin/echo.cgi"
									<p>
									Please specify a file, or a set of files:<br>
									<input type="file" name="datafile" size="40">
									</p>
									</form>
							   
							
					</td>

				</tr>
				<tr>
					
					<td> <br/> <input type="submit" style="align-center" class="btn btn-primary btn-lg" value="Upload"/></td>
					
				</tr>

			</table>
			</form>
			
			<br/><br/>
			<h3 align="center" class="text-success"><?php echo $cs ?> </h3>
			
		</div>
         
		<div class="col-xs-4" >
			
		</div>
       
    </div>
     
    </div>

   
</body>
	
</html>
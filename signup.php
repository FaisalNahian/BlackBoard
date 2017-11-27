<?php
	$user_taken  = "";
?>
<html>
	
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>


		<!-- Date time picker attachement -->
		<link rel="stylesheet" href="bootstrap/css/datepicker.css">

	<!--	<script src="bootstrap/js/jquery-1.9.1.min.js"></script> -->

		<script src="bootstrap/js/bootstrap-datepicker.js"></script>

		<title> Sign-Up </title>


	<script type="text/javascript">
		// When the document is ready
		$(document).ready(function () {

			$('#txtdatepicker').datepicker({
				format: "dd/mm/yyyy"
			});

		});
		
		function validatePassword()
		{

				var x = document.getElementById('pwd1').value;
				var y = document.getElementById('pwd2').value;

				if(x == y)
				{
					return true;
				}
				else
				{
					alert(" Passwords Do Not Match !");
					return false;
				}
				
		}

	</script>
</head>
		
<body >

    <nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			<!-- Logo -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand" /> BLACKBOARD SYSTEM </a>
			</div>
	
			<!-- Menu on the right -->
			
				<ul class="nav navbar-nav navbar-right">
					
					<li> <a href="index.php"> Log-In </a> </li>
				
				</ul>
			
			</div>
			
		</div>
		
	</nav>
   
   <div class="container-fluid">
         
    <div class="row">
       
		<div class="col-xs-4" >
			<!-- Empty Column -->
		</div>
         
		<div class="col-xs-4" style="background-color:rgba(202, 205, 205, 0.100) ">
			
			<!-- Sign up form -->
			<form role="form" method="post" action="php/signup.php" onsubmit="return validatePassword()">
			<div class="form" align="center">
			<h2> <strong> Sign-Up </strong> </h2>
			<br/><br/>
			
			<input type="text" class="form-control" name="username"  placeholder="User Name" aria-describedby="basic-addon1" required ><br/><br/>
			
			<input type="text" class="form-control" name="email"  placeholder="Email Id" aria-describedby="basic-addon1" required > <br/><br/>

			<input type="text" class="form-control" name="mobile"  placeholder="Mobile Number" aria-describedby="basic-addon1" required > <br/><br/>

			<input type="password" class="form-control" name="password" id="pwd1" placeholder="Password" aria-describedby="basic-addon1"  required > <br/><br/>
			
			<input type="password" class="form-control" name="password" placeholder="Confirm Password" id="pwd2" aria-describedby="basic-addon1"  required > <br/><br/>
			
			<input type="text" class="form-control" name="student_id"  placeholder="Student ID" aria-describedby="basic-addon1" required > <br/><br/>

			<input class="btn btn-primary btn-lg" type="submit" name="btnsubmit" value="Register"  style=" width:auto"/><br/>
			
			</div>
			</form>
			<a href="index.php">Sign-Up</a>
		</div>
         
		<div class="col-xs-4" >
			<!-- Empty Column -->
		</div>
       
    </div>
     
    </div>


</body>
</html>

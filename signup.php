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
					alert(" Passwords do not match!");
					return false;
				}
				
		}

	</script>
</head>
		
<body >
    <nav class="navbar navbar-inverse">	
		<div class="container">			
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand" />Blackboard</a>
			</div>	

	        <div id="navbar" class="navbar-collapse collapse">
	        	<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="userhome.php"><span class="glyphicon glyphicon-log-in"></span> Students Area</a></li>
					<li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				</ul>

				<!-- Signin form -->
		        <form class="navbar-form navbar-right" method="post" action="php/login.php" role="form">
		            <div class="form-group">
		              <input type="text" name="username" placeholder="Username" class="form-control">
		            </div>
		            <div class="form-group">
		              <input type="password" name="pass" placeholder="Password" class="form-control">
		            </div>
		            <button type="submit" name="btnsub" class="btn btn-success">Sign in</button>
		        </form>
	        </div><!--/.navbar-collapse -->
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
				
				<input type="text" class="form-control" name="username"  placeholder="Username" aria-describedby="basic-addon1" required ><br/><br/>			
				<input type="password" class="form-control" name="password" id="pwd1" placeholder="Password" aria-describedby="basic-addon1" required ><br/><br/>
				<input type="password" class="form-control" name="password" placeholder="Confirm Password" id="pwd2" aria-describedby="basic-addon1" required ><br/><br/>
				<input type="text" class="form-control" name="email"  placeholder="Email" aria-describedby="basic-addon1" required ><br/><br/>
				<input type="text" class="form-control" name="mobile"  placeholder="Phone Number" aria-describedby="basic-addon1" required ><br/><br/>						
				<input type="text" class="form-control" name="student_id"  placeholder="Student ID" aria-describedby="basic-addon1" required ><br/><br/>
				<input class="btn btn-primary btn-lg" type="submit" name="btnsubmit" value="Register"  style=" width:auto"/><br/>			
				</div>
			</form>			
		</div>
         
		<div class="col-xs-4" >
			<!-- Empty Column -->
		</div>
       
    </div>
     
    </div>

<body  style=" background:url(http://dbakevlar.com/wp-content/uploads/2016/02/gray-background-8440-8763-hd-wallpapers.jpg)"></body>
</body>
</html>

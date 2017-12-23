<?php
	session_start();
	unset($_SESSION['uid']);
	$login_error= null;
	$recover_error_var=null;
	$recover_success_var=null;
	if(isset($_SESSION['login_error']))
	{
		
		$login_error = " Invalid Username / Password ! " ;
		
		session_unset();
		session_destroy();
	}
	
?>
<html>
	
<head>
	
	<link href="bootstrap/global.css" rel="stylesheet" >
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/datepicker.css">
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>
	
		
		<title> Log-In </title>

	<script type="text/javascript">
		//  document is ready
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
		<div class="container">			
			<div class="navbar-header">
				<a href="#" class="navbar-brand" />Blackboard</a>
			</div>	

	        <div id="navbar" class="navbar-collapse collapse">
	        	<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="userhome.php"><span class="glyphicon glyphicon-user"></span> Students Area</a></li>
					<li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign-Up</a></li>
				</ul>
	        </div><!--/.navbar-collapse -->
			</div>
		</div>
	</nav><!-- end of navigation -->
   
   <div class="container-fluid">
   		<div class="row">

   					<div class="col-xs-4" >

					<p>	</p>

					</div>

         	<div class="col-xs-4" style="background-color:rgba(202, 205, 205, 0.100) " id="menu">
				<?php

					if(isset($_SESSION['success']))
	            	{
	            					?> <div class="alert alert-success">
	                                  <a href="#" class="close" data-dismiss="alert" aria-label="close" hide="true" id="xxx">&times;</a>
	                                  <strong text-align="center">Success: You have been successfully registered!</strong>
	                                </div>
	                                <?php
	                                session_destroy();
	            	}

	            ?>

				<div align="center" class="mylogin">
					<h1><strong>Instructors Area</strong></h1>
					<h3><strong>Sign in</strong></h3>
					<br/><span class="text-danger" ><?php echo $login_error; ?> </span>
					<br/><span class="text-danger" ><?php echo $recover_error_var; ?> </span>
					<br/><span class="text-success" ><?php echo $recover_success_var; ?> </span>
					<form method="post" action="php/adminlogincheck.php" role="form">					
					<input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1" required> <br/>
					<input type="password" class="form-control" name="pass" placeholder="Password" aria-describedby="basic-addon1" required><br/>
					<input class="btn btn-primary btn-lg" type="submit" name="btnsub" value="Login"  style=" width:100%"/><br/><br/>
					</form>
				</div>
			
			</div>
		</div> <!-- end of row-->
	</div> <!-- end of container-->
     
    <div class="container">
      <hr>
   		<!-- footer -->
   		<footer class="footer">
   			<p><a href="recovery.php">Password Recovery</a> &middot; <a href="privacy.php">Privacy</a> &middot; <a href="terms.php">Terms</a></p>
			<p>Blackboard Project for NYIT CSCI 760 Database Course: Made by Faisal Nahian, Robert Maldonado and Siddharth Mogulla. Powered by <a href="http://getbootstrap.com">Bootstrap</a> and <a href="http://heyfaisal.com">heyfaisal.com</a>.</p>
		</footer> <!-- end of footer -->
    </div> <!-- end of container -->
   
</body>
</html>
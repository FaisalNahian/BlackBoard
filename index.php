<?php
	session_start();
	unset($_SESSION['uid']);
	$login_error= null;
	$recover_error_var=null;
	$recover_success_var=null;
	if(isset($_SESSION['login_error']))
	{
		
		$login_error = "Invalid Username or Password!";
		
		session_unset();
		session_destroy();
	}
		
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Blackboard Project for NYIT CSCI 760 Database Course">
	    <meta name="author" content="Faisal Nahian, Robert Maldonado and Siddharth Mogulla">
	    <link rel="icon" href="images/favicon.ico">
   		<title>Blackboard</title>

	    <!-- Bootstrap files --> 
		<link href="bootstrap/global.css" rel="stylesheet" >
		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap/css/datepicker.css">
		<!-- Bootstrap core JavaScript -->
		<script src="bootstrap/js/jquery-1.12.2.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/bootstrap-datepicker.js"></script>
			
		<!-- Custom scripts for this page -->
		<script type="text/javascript">
			
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
						alert("Passwords do not match!");
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
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Instructors Area</a></li>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
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


<!-- Main jumbotron for a primary call to action -->
    <div class="jumbotron">
      <div class="container">

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
		<!-- login error output -->
		<div align="center" class="mylogin">
			<br/>
			<br/><span class="text-danger" ><?php echo $login_error; ?> </span>
			<br/><span class="text-danger" ><?php echo $recover_error_var; ?> </span>
			<br/><span class="text-success" ><?php echo $recover_success_var; ?> </span>
		</div>


        <h1>Welcome to Blackboard!</h1>
        <p>This site is for students and teachers.</p>
        <p><a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up &raquo;</a>
        <a class="btn btn-primary btn-lg" href="adminlogin.php" role="button">Instructors Area &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <hr>
   		<!-- footer -->
   		<footer class="footer">
   			<p>&middot; <a href="#">Password Recovery</a> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			<p>Blackboard Project for NYIT CSCI 760 Database Course: Made by Faisal Nahian, Robert Maldonado and Siddharth Mogulla. Powered by <a href="http://getbootstrap.com">Bootstrap</a> and <a href="http://heyfaisal.com">heyfaisal.com</a>.</p>
		</footer> <!-- end of footer -->
    </div> <!-- end of container -->

	</body>
</html>
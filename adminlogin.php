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

				<!-- Signin form -->
		        <form class="navbar-form navbar-right" method="post" action="php/adminlogincheck.php" role="form">
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
<!--
    <nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			
			<div class="navbar-header">
				<a hre="#" class="navbar-brand " />Blackboard</a>
			</div>
			
			
			
				<ul class="nav navbar-nav navbar-right">
				
					<li> <a href="userhome.php"> <strong><span class="glyphicon glyphicon-home"> MAIN &nbsp;</strong> </a> </li>
					
				
				</ul>
			
			</div>
			
		</div>
		
	</nav>-->
   
 <!--  <div class="container-fluid">
         
    <div class="row">

		<div class="col-xs-4" >

		<p>
		 
		</p>

		</div>

		<div class="col-xs-4" style="background-color:rgba(202, 205, 205, 0.100) " id="menu">
			
			<div align="center" class="mylogin">
				<br/>
			<h1> <strong>LOG-IN </strong></h1>
			<br/><span class="text-danger" > </span>
			<br/><span class="text-danger" > </span>
			<br/><span class="text-success" > </span>
			<form method="post" action="php/adminlogincheck.php" role="form">
			
			<input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1" required> <br/><br/>
			<input type="password" class="form-control" name="pass" placeholder="Password" aria-describedby="basic-addon1" required><br/><br/> <br/>
			<input class="btn btn-primary btn-lg" type="submit" name="btnsub" value="Login"  style=" width:100%"/><br/><br/>

			</form>
			</div>
			
		</div>
         
		
    </div>
     -->
	 <div class="jumbotron">
      <div class="container">

      	    			<!-- login error output -->
		<div align="center" class="mylogin">
			<br/>
			<br/><span class="text-danger" > </span>
			<br/><span class="text-danger" > </span>
			<br/><span class="text-success" > </span>
		</div>


        <h1>Welcome to Blackboard!</h1>
        <p>Log-In is ristricted for students</p>
        <p><a class="btn btn-primary btn-lg"     href="signup.php" role="button">Sign Up &raquo;</a>
        <a class="btn btn-primary btn-lg" href="index.php" role="button">Student Area &raquo;</a></p>
      </div>
    </div>
		
    </div>
	 
   <link href="bootstrap/css/bootstrap1.css" rel="stylesheet">
	
	<div class="footer-bottom">

	<div class="container">

		<div class="row">

			<div class="col-xs-30 col-sm-10 col-md-10 col-lg-10">

				<div class="copyright">

					© 1984-2018, Blackboard, All rights reserved
					<p>&middot; <a href="#">Password Recovery</a> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			<p>Blackboard Project for NYIT CSCI 760 Database Course: Made by Faisal Nahian, Robert Maldonado and Siddharth Mogulla. Powered by <a href="http://getbootstrap.com">Bootstrap</a> and <a href="http://heyfaisal.com">heyfaisal.com</a>.</p>
				</div>

			</div>

			<div class="col-xs-30 col-sm-5 col-md-5 col-lg-20">

				<div class="design">

					 

				</div>

			</div>

		</div>

	</div>

</div>
<body  style=" background:url(http://abettertodaymedia.com/wp-content/uploads/2015/12/Light-Grey-Background-Hd-5.jpg)"></body>
</body>
</html>
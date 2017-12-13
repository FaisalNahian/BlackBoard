<?php
	$user_taken  = "";
?>
<html>
	
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>


		<!--Date time picker attachement -->
		<link rel="stylesheet" href="bootstrap/css/datepicker.css">



		<script src="bootstrap/js/bootstrap-datepicker.js"></script>

		<title> Sign-Up </title>


	<script type="text/javascript">
		//document is ready
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
		
			
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand" /> BLACKBOARD </a>
				<a href="home.php" class="navbar-brand" /> Home</a>
				
				
				
				
			</div>
			<ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo "admin" ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>
	
			<!-- Menu right -->
			
				<ul class="nav navbar-nav navbar-right">
					
				
	
				</ul>
			
			</div>
			
		</div>
		
	</nav>
   
   <div class="container-fluid">
         
    <div class="row">
       
		<div class="col-xs-4" >
			
		</div>
         
		<div class="col-xs-4" style="background-color:rgba(202, 205, 205, 0.100) ">
			
			
			<form role="form" method="post" action="php/adminadduser.php" onsubmit="return validatePassword()">
			<div class="form" align="center">
			<h2> <strong> Add New User </strong> </h2>
			<br/><br/>
			
			<input type="text" class="form-control" name="name"  placeholder="User Name" aria-describedby="basic-addon1" required ><br/><br/>
			
						<input type="text" class="form-control" name="address"  placeholder="Email Id" aria-describedby="basic-addon1" required > <br/><br/>
<input type="text" class="form-control" name="lib"  placeholder="Student ID" aria-describedby="basic-addon1" required > <br/><br/>

			<input type="text" class="form-control" name="mobile"  placeholder="Mobile Number" aria-describedby="basic-addon1" required > <br/><br/>


			<input type="password" class="form-control" name="txtpassword" id="pwd1" placeholder="Enter Password" aria-describedby="basic-addon1"  required > <br/><br/>
			<input type="password" class="form-control" placeholder="Confirm Password" id="pwd2" aria-describedby="basic-addon1"  required > <br/><br/>


			

				
			<input class="btn btn-primary btn-lg" type="submit" name="btnsubmit" value="Add"  style=" width:auto"/><br/>
			
			</div>
			</form>
		</div>
         
		<div class="col-xs-4" >
			
		</div>
       
    </div>
     
    </div>


</body>
</html>
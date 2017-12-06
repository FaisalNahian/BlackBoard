<?php
    session_start();

    if(!isset($_SESSION['uid']))
            {
                    header("location:home.php");
            }

    $uid = $_SESSION["uid"];
?>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title> Search Book </title>
	
</head>

<body >

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		<!-- Logo -->
		<div class="navbar-header">
			<a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
		</div>

		<!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>
    
                <li > <a href="delete.php"> Delete  Book</a> </li>
                <li class="active"> <a href="search.php"> Search Book </a> </li>
                <li > <a href="admindisplay.php">Display All Books </a> </li>
				
				
				

            </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['uid']; ?><span class="caret"></span></a>
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

		<div class="col-xs-5" style="background-color:white">
		
			<h1 align="center"> Search Book </h1> <br/><br/>

			
			
				<div class="input-group">

					<input type="text" id="txtsearch" class="form-control" placeholder="Enter Keyword to Search" required />
    	  			<span class="input-group-btn">
						<button class="btn btn-primary" type="submit" id="btnsearch"><span class="glyphicon glyphicon-search"></span>&nbsp; Search</button>
      				</span>
				</div> <br/>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="bookid" checked>By ID</label><br>
				
				
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="authid">By author id</label><br>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="isbn">By Book ISBN</label><br>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="libid">By Library id</label><br>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="title">By Book Title</label>
				
				
				<br/<br/><br/><br/>
			
			<div id="content-pane">
			
				
				
			</div>
		</div>

		<div class="col-xs-3" >
			
			<script>
				$(document).ready(function(){
					$('#content-pane').load('nothing.php');
				
				$('button#btnsearch').on('click',function(){
					
					// Send query and load dynamically
					var key = $('input#txtsearch').val();
					var criteria = $('input[name=txtchoice]:checked').val();
					var total = key + ":" + criteria;
		
					$.post('php/search.php',{str:total},function(data){
					$('div#content-pane').html(data);
			
					});
					
				});
				
				});
			</script>
		</div>

	</div>

</div>


</body>

</html>
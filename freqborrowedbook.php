<?php
session_start();
    $update_msg="";
	//$uid = $_SESSION["uid"];
	?>
<html>

<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title> ABS Library Management System</title>
</head>

<body>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>

                <li > <a href="delete.php"> Delete Book </a> </li>
                <li > <a href="adminsearch.php"> Search Book</a> </li>
				<li > <a href="adduser.php"> Add User</a> </li>
				<li > <a href="adminreserve.php"> View Reserved Books</a> </li>
				<li> <a href="adminborrow.php"> View Borrowed Books</a> </li>
				
				<li > <a href="admindisplay.php"> Display All Books</a> </li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> More Options <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="freqborrower.php">Frequent Borrowers</a></li>
						<li><a href="freqborrowedbook.php">Frequently Borrowed books</a></li>
							<li><a href="freqborrowerb.php">Frequent Borrowers in Branch</a></li>
						<li><a href="freqborrowedbookb.php">Frequently Borrowed books in a Branch</a></li>
						

                    </ul>
                </li>
				
				

            </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "admin";?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>

</nav>

<div class="container-fluid" style="background-color:WHITE >

    <div class="row" >

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-18" style="background-color:WHITE ">
            
            

            <div class="jumbotron">
                <h1>ABS LIBRARY MANAGEMENT SYSTEM</h1>
                <p></P>

            <br/><br/>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

            

            </div>  

        </div>

        <div class="col-xs-2" >

        </div>

    </div>

</div>
<h3 align="center" class="text-success">Top 10 Freuently borrowed Books</h3>
<?php

require_once("php/connect.php");

$result = mysqli_query($con," select * from book order by borrowcount desc");
?>
<table class="table table-bordered" style="font-family:aerial;font-size:15">
	<tr>
		<th> Book ID</th>
		<th> Book Title</th>
		<th> Author ID</th>
		<th> Library ID</th>	
		<th> ISBN </th>
		<th> Publisher </th>
		<th> Publication Date </th>
		<th> Number Of times Borrowed</th>
		
		<th> status </th>
		
		
		
		
	<tr>
	<?php
$count=0;
while($data =  mysqli_fetch_Array($result))
{
	$count++;
	echo "<tr>";
		echo "<td height='10'> $data[0] </td> ";
		echo "<td height='10'> $data[1] </td> ";
		echo "<td height='10'> $data[2] </td> ";
		echo "<td height='10'> $data[3] </td> ";
		echo "<td height='10'> $data[4] </td> ";
		echo "<td height='10'> $data[5] </td> ";
		echo "<td height='10'> $data[6] </td> ";
		echo "<td height='10'> $data[7] </td> ";
		
		echo "<td height='10'> $data[8] </td> ";
if($count==10)
{
	break;
}
		}
	?>	
</body>

</html>

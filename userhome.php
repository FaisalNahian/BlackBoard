<?php
    session_start();
	$update_msg="";


    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
            }

    $uid = $_SESSION["uid"];
?>
<html>

<head>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5JkX0Ls3oJ4J3ShdCV31ioYp0B1sryTp";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
	<link herf="bootstrap/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title> Dashboard </title>
</head>

<body>

<?php

				if(isset($_SESSION['success']))
            	{
            					?> <div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close" hide="true" id="xxx">&times;</a>
                                  <strong text-align="center">Success: U Loged in Successfully!</strong>
								 
                                </div>
                                <?php
                                session_destroy();
            	}

            ?>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a hre="#" class="navbar-brand" />BLACKBOARD SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="userhome.php">HOME <span class="glyphicon glyphicon-home"></a> </li>
				</ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
					
                    <ul class="dropdown-menu">
					<li><a href="php/index.php">Log-Out <span class="glyphicon glyphicon-off"></span></a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>
</nav>

</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default nav nav-pills nav-stacked ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="1" data-parent="#accordion" href="#collapseOne">Search Subjects</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in ">
                        <div class="panel-body">
                        
                            <table class="table">
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="1"><i></i>Science</a></li>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="2"><i></i>English</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="3"><i></i>Math</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="4"><i></i>Spanish</a></li>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="5" data-parent="#accordion" href="#collapseTwo">Tools</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Announcement</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="6"><i></i>Tasks</a></li>
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>My Grades</a></li>
                                    </td></tr>
									<tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Send Email</a></li>
                                    </td></tr>
									<tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Calender</a></li>
                                    </td></tr>
									<tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>User Directory</a></li>
                                    </td></tr>
									<tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Personal Information</a></li>
                                    </td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="6" data-parent="#accordion" href="#collapseThree">My Courses</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            </table>
                        </div>
                    </div>
                </div>
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="7" data-parent="#accordion" href="#collapseFoure">Helpline Assistance</a>
                        </h4>
                    </div>
                    <div id="collapseFoure" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            </table>
                        </div>
                    </div>
                </div>
				</div>
				</div>
        <div class="col-sm-9 col-md-9 well " id="1">
            <div class="well">
                <h3>MY Announcement</h3>
				<p>No Institution Announcemens have been posted in the last 7 days.</p> 
				<p>No Courses or Organisational Announcemens have been posted in last 7 days.</p>
				<a href="#1" class="yndzuxt" data-toggle="modal" data-target="#lightbox2">
								<p style="text-align: right;">More Announcement....</p></br>
							</a>
               </div>
			   </div>
			   
			    <div class="col-sm-9 col-md-9 well " id="2">
            <div class="well">
                <h3>No Demand Help</h3>
				
				<h4>Help for students</h4>
				<p>Visit Blackboard Help for students</p>
					<p>Learn about the Blackboard app</p>
					<p>Watch students helpful Blackboard guide videos</p>
				
				<h4>Help for Instructors</h4>
				
				<p>Visit Blackboard Help for instructors</p>
				<p>Explore online teaching stratergies and best practices</p>
				<p>Learn about Blackboard instructor app</p>
				<p>Watch instructors helpful Blackboard guide videos</p>
				</p>
				<a href="#1" class="yndzuxt" data-toggle="modal" data-target="#lightbox2">
								<br></br>
							</a>
               </div>
			   </div>
			   
				<script>
				$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});
				
				</script>


<body style="background:url(http://www.anishdua.com/wp-content/uploads/2016/07/Light-Grey-Background-Hd-5-1.jpg)"></body>

</body>

</html>
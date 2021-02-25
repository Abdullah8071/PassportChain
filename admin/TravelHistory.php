<?php

session_start();

include('config.php');

if (strlen($_SESSION['alogin']) == 0) 
{
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | TravelHistory</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container" style="margin-top:1%">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="" style="margin-bottom:2%">
                    Passport Chain | Admin
                </a>
                <a href="" style="margin-left:19%">
                    <img src="images/LOGO1.png" style="width:250px;height:70px;" alt="">
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                        <li><a href="#">
                                Admin
                            </a></li>
                        <li class="nav-user dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/admin.png" class="nav-avatar" />
                                <b class="caret"></b>
                            </a>
							<ul class="dropdown-menu">
                                <li><a href="RegistrationPassword.php">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->


		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="sidebar">
						<ul class="widget widget-menu unstyled" style="background-color: white">
								<li><a href="RegistrationHome.php"><i class="menu-icon icon-tasks"></i>Home</a></li>
								<li><a href="Registration.php"><i class="menu-icon icon-tasks"></i>Register</a></li>
								<li><a href="TravelHistory.php"><i class="menu-icon icon-tasks"></i>Travel History</a></li>
								<li><a href="CriminalRecord.php"><i class="menu-icon icon-tasks"></i>Criminal Record</a></li>
	
			
								
			
								</ul>
						</div>
						<!--/.sidebar-->
					</div>
					<!--/.span3-->

					<div class="span9">
						<div class="content">

							<div class="module">
								<div class="module-head">
									<h3>Add Travel History</h3>
								</div>
								<div class="module-body">

				

									<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

										<div class="control-group">
											<label class="control-label" for="basicinput">Passport Number</label>
											<div class="controls">
												<input type="text" name="passportnumber" placeholder="Enter Passport Number" class="span8 tip" required>
											</div>
                                        </div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Passenger ID</label>
											<div class="controls">
												<input type="text" name="passengerid" placeholder="Enter Passenger ID" class="span8 tip" required>
											</div>
                                        </div>

								

										<div class="control-group">
											<label class="control-label" for="basicinput">Passenger Name</label>
											<div class="controls">
												<input type="text" name="passengername" placeholder="Enter Passenger Name" class="span8 tip" required>
											</div>
                                        </div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Departure City</label>
											<div class="controls">
												<input type="text" name="departurecity" placeholder="Enter Departure City" class="span8 tip" required>
											</div>
                                        </div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Arrival City</label>
											<div class="controls">
												<input type="text" name="arrivalcity" placeholder="Enter Arrival City" class="span8 tip" required>
											</div>
                                        </div>
                                        
										<div class="control-group">
											<label class="control-label" for="basicinput">Travel Date</label>
											<div class="controls">
												<input type="text" name="travaldate" placeholder="Enter Travel Date" class="span8 tip" required>
											</div>
                                        </div>


										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn btn-success">Add</button>
											</div>
										</div>

										

									</form>
								</div>
							</div>





						</div>
						<!--/.content-->
					</div>
					<!--/.span9-->
				</div>
			</div>
			<!--/.container-->
		</div>
		<!--/.wrapper-->

		<div class="footer">
			<div class="container">


				<b class="copyright">&copy; 2021 Passport Chain</b>
			</div>
		</div>



		<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
		<script src="scripts/datatables/jquery.dataTables.js"></script>
		<script>
			$(document).ready(function() {
				$('.datatable-1').dataTable();
				$('.dataTables_paginate').addClass("btn-group datatable-pagination");
				$('.dataTables_paginate > a').wrapInner('<span />');
				$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
				$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
			});
		</script>
	</body>

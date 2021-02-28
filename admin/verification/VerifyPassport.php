<?php

session_start();

include('config.php');

if (strlen($_SESSION['vlogin']) == 0) {
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
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<style>
		.accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		.active,
		.accordion:hover {
			background-color: black;
			color:white;
		}

		.panel {
			padding: 0 18px;
			display: none;
			background-color: white;
			overflow: hidden;
		}
	</style>
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
								<li><a href="VerificationPassword.php">Change Password</a></li>
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
							<li><a href="VerificationHome.php"><i class="menu-icon icon-tasks"></i>Home</a></li>
							<li><a href="ViewPassports.php"><i class="menu-icon icon-tasks"></i>View Passports</a></li>
							<li><a href="VerifyPassport.php"><i class="menu-icon icon-tasks"></i>Verify Passport</a></li>





						</ul>
					</div>
					<!--/.sidebar-->
				</div>
				<!--/.span3-->

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Verify Passport</h3>
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
										<div class="controls">
											<button type="submit" name="submit" class="btn btn-success">Send Email</button>

										</div>
									</div>




								</form>
								<br>
								<br>
								<button class="accordion">Passenger Details <i style="float:right;font-size:large" class="icon-user"></i></button>
								<div class="panel">
									<h5>Passport Number: 42323423444420</h5>
									<h5>Passenger Name: Naveed</h5>
									<h5>Passenger ID: 3885</h5>
									<h5>Father Name: Ahmed </h5>

									<h5>Nationality: Pakistani</h5>
									<h5 style="color:red">Date Expiry: 20-Feb-2022</h5>
								</div>

								<button class="accordion">Criminal Record <i style="float:right;font-size:large" class="icon-legal"></i></button>
								<div class="panel">
							
								<h5>Case Number: 420</h5>
								<h5>Registerd By: Sindh Police</h5>
								<h5>Date: 12-Jan-2021</h5>
								<h5 style="color:red">Decision: Travel Not Allowed</h5>
							</div>


								<button class="accordion">Travel History <i style="float:right;font-size:x-large"class="icon-plane"></i> </button>
								<div class="panel">
									<div class="module-body table">


										<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
											<thead>
												<tr>
													<th>#</th>
													<th>Arrival City</th>
													<th>Departure City</th>

												</tr>
											</thead>
											<tbody>

												<tr>
													<td>1</td>
													<td>Sukkhur</td>
													<td>Karachi</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Karachi</td>
													<td>Islamabad</td>
												</tr>

												<tr>
													<td>3</td>
													<td>Doha</td>
													<td>Sydney</td>
												</tr>

												<tr>
													<td>4</td>
													<td>Bangkok</td>
													<td>Vegas</td>
												</tr>



										</table>
									</div>
								</div>


								<script>
									var acc = document.getElementsByClassName("accordion");
									var i;

									for (i = 0; i < acc.length; i++) {
										acc[i].addEventListener("click", function() {
											this.classList.toggle("active");
											var panel = this.nextElementSibling;
											if (panel.style.display === "block") {
												panel.style.display = "none";
											} else {
												panel.style.display = "block";
											}
										});
									}
								</script>

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
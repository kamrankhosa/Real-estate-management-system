<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="../css/all.min.css">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		<!--Custom CSS File -->
		<link rel="stylesheet" type="text/css" href="../css/custom.css">
		
 <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
 
	<title><?php echo TITLE ?></title>
	<style type="text/css">
		.sidebar ul li{
			font-size: 16px;
		}
		
	</style>
</head>
<body>
	<!-- Top Navbar -->
	<nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background-color: #2c3c5c;"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="Dashboard.php">ESMS</a></nav>
	<!-- START CONTAINER -->
	<div class="container-fluid" style="margin-top: 40px;">
		<!-- START ROW -->
		<div class="row">
				<!--START side bar 1ST COLUMN started -->

			<nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
				<div class="sidebar sticky">
					<ul class="nav flex-column sidebar1">
						<li class="nav-item  mb-1 pl-1"><a class="nav-link <?php if(PAGE=='Dashboard'){ echo'active';} ?>" href="Dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>

						<li class="nav-item  pl-1  mb-1"><a class="nav-link <?php if(PAGE=='Work'){ echo'active';} ?>" href="Work.php"><i class="fas fa-briefcase mr-2"></i>Work Order</a></li>

						<li class="nav-item   mb-1"><a class="nav-link <?php if(PAGE=='Requests'){ echo'active';} ?>" href="Requests.php"><i class="fas fa-praying-hands mr-2"></i>Requests</a></li>

						<li class="nav-item   mb-1"><a class="nav-link <?php if(PAGE=='Assets'){ echo'active';} ?>" href="Assets.php"><i class="fas fa-binoculars mr-2"></i>Assets</a></li>
						
						

						<li class="nav-item   mb-1"><a class="nav-link <?php if(PAGE=='Technician'){ echo'active';} ?>" href="Technician.php"><i class="fab fa-whmcs mr-2"></i>Technician</a></li>
						
						<li class="nav-item   mb-1"><a class="nav-link <?php if(PAGE=='Requester'){ echo'active';} ?>" href="Requester.php"><i class="fas fa-pray mr-2"></i>Requester</a></li>

						<li class="nav-item mb-1"><a class="nav-link <?php if(PAGE=='Sell-Report'){ echo'active';} ?>" href="Sell-Report.php"><i class="fas fa-business-time mr-2"></i>Sell-Report</a></li>

						<li class="nav-item   mb-1"><a class="nav-link <?php if(PAGE=='Work-Report'){ echo'active';} ?>" href="Work-Report.php"><i class="fas fa-chart-line mr-2"></i>Work-Report</a></li>
						
						<li class="nav-item   mb-1"><a class="nav-link <?php if(PAGE=='Adminpasschange'){ echo'active';} ?>" href="Adminpasschange.php"><i class="fas fa-eye mr-2"></i>Change Password</a></li>

						<li class="nav-item   mb-1"><a class="nav-link" href="Admin-logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Log Out</a></li>
						
						
						

					</ul>
				</div>
			</nav><!--End side bar 1ST COLUMN  -->
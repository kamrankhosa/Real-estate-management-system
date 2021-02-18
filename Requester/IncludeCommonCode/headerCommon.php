<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="../css/all.min.css">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		<!--Custom CSS File -->
		<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<title><?php echo TITLE ?></title>
	
</head>
<body>
	<!-- Top Navbar -->
	<nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background-color: #2c3c5c;"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">ESMS</a></nav>
			<!-- START CONTAINER -->
	<div class="container-fluid" style="margin-top: 40px;">
		<!-- START ROW -->
		<div class="row">
				<!--START side bar 1ST COLUMN started -->

			<nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
				<div class="sidebar sticky">
					<ul class="nav flex-column">
						<li class="nav-item ml-3 mb-1 p-1 pl-1"><a class="nav-link <?php if(PAGE=='RequesterProfile'){ echo'active';} ?>"href="RequesterProfile.php"><i class="fas fa-id-badge"></i>Profile</a></li>

						<li class="nav-item ml-3 mb-1 p-1 pl-1"><a class="nav-link <?php if(PAGE=='submitRequest'){ echo'active';} ?>" href="submitRequest.php"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>

						<li class="nav-item ml-3 mb-1 p-1 pl-1"><a class="nav-link <?php if(PAGE=='CheckStatus'){ echo'active';} ?>" href="CheckStatus.php"><i class="fas fa-align-center"></i>Service Status</a></li>

						<li class="nav-item ml-3 mb-1 p-1 pl-1"><a class="nav-link <?php if(PAGE=='RequesterChangePass'){ echo'active';} ?>" href="RequesterChangePass.php"><i class="fas fa-key"></i>Change Password</a></li>

						<li class="nav-item ml-3 mb-1 p-1 pl-1"><a class="nav-link" href="RequesterLogin.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

					</ul>
				</div>
			</nav>
			<!-- sidebar 1ST COLUMN ended -->
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>project complete</title>
		<!--Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		<!--Custom CSS File -->
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	</head>
	<body>

		<!-- <nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background-color: #2c3c5c;"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">ESMS</a></nav> -->
		<!--start navigation-->
		<nav class="navbar navbar-expand-sm fixed-top pl-5 fixed-top flex-md-nowrap p-0 text-uppercase shadow"style="background-color:#2c3c5c;">
								<a href="index.php"><img src="images/Esmvvs.svg" style="width:110px;"></a>

			<!-- <a href="index.php" class="navbar-brand">ESMS #2c3c5c</a> -->
			<!-- <span class="navbar-text text-white mt-5 small" style="color: blue;">
				Customer's Happiness is Our Aim
			</span> -->
			<button type="button" class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mymenu">
				<ul class="navbar-nav pl-5 custom-nav ">
					<li class="nav-item"><a href="index.php" class="nav-link ">home</a></li>
					<li class="nav-item"><a href="#services" class="nav-link">services</a></li>
					<li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
					<li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link ">Login</a></li>
					<li class="nav-item"><a href="#contact" class="nav-link">contact</a></li>
				</ul>
			</div>
						
			</nav><!--End  navigation-->
			<!-- START HEADER JUMBOTRON -->
			<header class="jumbotron back-image" style="background-image: url(images/banner2.jpg);">
				<div class=" myclass mainheading float-right" style="margin-right: 100px; margin-top:250px;">
					<h1 class="text-uppercase text-danger font-weight-bold">wellcome to esms</h1>
					<p class="font-italic farzi-class">customers happiness is our aim</p>
					<a href="Requester/RequesterLogin.php" class="btn btn-success btn-lg mr-4">login</a>
					<a href="#registration" class="btn btn-danger btn-lg mr-4" style="margin-left:18px;">signup</a>
				</div>
			</header>
			<!-- end header jumbotron -->
			<!-- start introducing services section -->
			<div class="container">
				<div class="jumbotron">
					<h3 class="text-center">
					ESMS Services
					</h3>
					<p>
						In this world of fast growing technology peoplr mostly want to save their time while taking any service from the market. And as we know today it has become a difficult task to find an electrition to take his/services. I am going to develop a web based application through which anyone registered on the website can hire an electrition by following some easy steps. An admin will also maintain all the activities on the portal by users. That's all ,i am going to develop electrical service center app.
					</p>
				</div>
				
			</div> <!-- end introducing services section container -->
			
			<!-- start services section icon wala -->
			<div class="container text-center border-bottom">
				<h2 class="text-capitalize">
				our services
				<hr style="width: 20%;"></hr>
				</h2>

				<div class="row mt-4">
					<div class="col-sm-4 mb-4">
						<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
						<h4 class="mt-4">Electronic Appliances</h4>
					</div>
					<div class="col-sm-4 mb-4">
						<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
						<h4 class="mt-4">Preventive Maintenance</h4>
					</div>
					<div class="col-sm-4 mb-4">
						<a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
						<h4 class="mt-4">Fault Repair</h4>
					</div>
				</div>
				
			</div>
			
			<!-- end services section icon wala container -->
			<!-- start Registration form -->
			<?php

				include"User-Registration.php";
			?>
			<!-- End Registration form container -->

			<!--start happy customer section -->
			<div class="jumbotron" style="background-color: #2c3c5c;">
			<div class="container">
				<h2 class="text-center text-white">happy custoomer</h2>
				<div class="row mt-5">
				<div class="col-lg-3 col-sm-6">  <!-- START first column -->
				<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/banner2.jpg" class="img-fluid" style="border-radius:40px;">	
				<h4 class="card-title mt-1">Rajesh Khanna</h4>
				<P>he is a very intelligent person, and love to work hard ,and support the customer from their services.</P>
					
				</div>	
				</div>	
				</div>	
				<!-- end first column -->
				<div class="col-lg-3 col-sm-6 ">  <!-- START 2nd column -->
				<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/banner2.jpg" class="img-fluid" style="border-radius:40px;">	
				<h4 class="card-title mt-1">Rajesh Khanna</h4>
				<P>he is a very intelligent person, and love to work hard ,and support the customer from their services.</P>
					
				</div>	
				</div>	
				</div>	
				<!-- end 2nd column -->
				<div class="col-lg-3 col-sm-6">  <!-- START 3rd column -->
				<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/banner2.jpg" class="img-fluid" style="border-radius:40px;">	
				<h4 class="card-title mt-1">Rajesh Khanna</h4>
				<P>he is a very intelligent person, and love to work hard ,and support the customer from their services.</P>
					
				</div>	
				</div>	
				</div>	
				<!-- end 3rd column -->
				<div class="col-lg-3 col-sm-6">  <!-- START 4th column -->
				<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/banner2.jpg" class="img-fluid" style="border-radius:40px;">	
				<h4 class="card-title mt-1">Rajesh Khanna</h4>
				<P>he is a very intelligent person, and love to work hard ,and support the customer from their services.</P>
					
				</div>	
				</div>	
				</div>	
				<!-- end 4th column -->
										

				</div>
				
			</div>	


			</div><!--end happy customer -->
			<!--start contact us -->
			<div class="container">
				<h2 class="text-center mb-4">contact us</h2>
				<div class="row">
					<!-- start 1st column -->
					
			<?php

				include"Contact-Form.php";
			?>


					<!-- end 1st column -->
					<div class="col-md-4 text-center"><!-- start second column -->
						<strong>head querters:</strong><br>
						esms pvt ltd,<br>
						ashok nagar,ranchi<br>
						jharkand-5348756<br>
						phone:03327649704<br>
						<a href="#" target="_blank">www.esms.com</a><br><br><br>
						<strong>BRANCH:</strong><br>
						esms pvt ltd,<br>
						ashok nagar,ranchi<br>
						DELHI-5348756<br>
						phone:03327649704<br>
						<a href="#" target="_blank">www.esms.com</a><br>
					</div><!-- end second column -->
					
				</div>
				
			</div>
			<!-- START FOOTER -->
			<footer class="container-fluid  mt-5 text-white text-capitalize" style="background-color: #2c3c5c;">
				<div class="container">
				<div class="row py-3 ">
					<div class="col-md-6 "><!-- start first column -->
						<span class="pr-2">follow us</span>
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>							
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>											


					</div><!-- end first column -->
					<div class="col-md-6 text-right"><!--start second column-->
					<small>Designed by Nayaab SAHAB &copy; 2020</small>	
					<small class="ml-2"><a href="Admin/AdminLogin.php" style="color: #cc0000;">admin login</a></small>
					</div><!--second column end-->
				</div>
			</div>
			</footer>
			
			<!--bootstrap javascript-->
			<script src="js/jquery.min.css"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/all.min.js"></script>
		</body>
	</html>
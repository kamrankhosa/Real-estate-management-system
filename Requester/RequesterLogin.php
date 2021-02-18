<?php
session_start();
 include"../dbconnection.php";

 // if ($_SESSION['r_login_id']) {
 // 	header("location:RequesterProfile.php");
 // }


if(isset($_POST['LOGIN_BUTTON'])){
	$EMAIL=$_POST['r_email'];
	$PASS=$_POST['r_password'];

	$query=mysqli_query($db_connect,"select * from requesterlogin_tb where r_email='$EMAIL' and r_password='$PASS' ");
	$checkpoint=$query->num_rows;
	if ($checkpoint==1) {

		$data=mysqli_fetch_array($query);
		$_SESSION['r_login_id']=$data['r_login_id']; 
		$_SESSION['r_email']=$EMAIL;


		header("location:RequesterProfile.php");

	}else{

		$error="o sorry your Email and password is incorrect";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	
	<!--Bootstrap css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="../css/all.min.css">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		
</head>
<body>
	<div class="mb-3 mt-5 container text-center" style="font-size: 30px;">
			<i class="fas fa-stethoscope"></i>
		<span> Online Electrical Service Maintenance System</span>
	</div>
		<p class="text-center" style="font-size: 20px;">
			<i class="fas fa-user-secret text-danger mr-2"></i>Requester Login Area
		</p>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-sm-6 col-md-4">

<?php

if (isset($error)) {
	echo "<div class='alert alert-danger'>".$error."</div>";
}

?>					

					<form action="" class="shadow-lg p-4" method="POST">
					
					<div class="form-group">
						<i class="fas fa-user" style="color: green;"></i>
						<label for="email" class="font-weight-bold pl-1">Email</label>
						<input type="text" name="r_email" class="form-control" placeholder="Email">
						<small class="form-text">We'll never share your email with anyone else</small>
					</div>
					<div class="form-group">
						<i class="fas fa-key" style="color: green;"></i><label for="pass" class="font-weight-bold pl-1">Password</label>
						<input type="password" name="r_password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-outline-danger mt-4 shadow-sm font-weight-bold btn-block" name="LOGIN_BUTTON">Login</button>
				</form>
					

				</div>
			</div>

		</div>
	




	<!--bootstrap javascript-->
			<script src="../js/jquery.min.css"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/all.min.js"></script>
	
</body>
</html>
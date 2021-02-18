<?php 

	include "dbconnection.php";

	if (isset($_POST['rSignup'])) {
		
		$name= $_POST['rname'];
		$email= $_POST['remail'];
		$password= $_POST['rpassword'];


$query=mysqli_query($db_connect,"SELECT r_email from requesterlogin_tb where r_email='$email'");
// $checkpoint=mysqli_num_rows($query);
 	$checkpoint=$query->num_rows;
		if ($checkpoint<1) {
			
			$query_insert = mysqli_query($db_connect,"INSERT INTO requesterlogin_tb set 

				r_name='$name',
				r_email='$email',
				r_password='$password'
   				  
   				
          ");
			   
			$success="Congrats! Your account has been created!";

		} 
		else{

			$error = "This email address already exists.";
		}

	}

 ?>
			<div class="container pt-5" >
				<h2 class="text-center text-capitalize pb-2" id="registration">
				create an account
				</h2>
				<div class="row-mt-4 mb-4">
					<div class="col-md-6 offset-md-3">

<?php



	if (isset($success)) {
		echo "<div class='alert alert-success'>".$success."</div>";
		
	}
	if (isset($error)) {
		echo "<div class='alert alert-danger'>" .$error."</div>";
	}

?>				
						<form action="" class="shadow-lg p-4" method="POST">
							<div class="form-group">
								<i class="fas fa-user" style="color: green;"></i><label class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="rname" required>
							</div>
							<div class="form-group">
								<i class="fas fa-envelope" style="color: green;"></i><label class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="E-mail" name="remail" required>
								<span style="font-size: 12px;" class="text-capitalize font-weight-bold pt-4">we'll never share your email  with anyone</span>
							</div>
							<div class="form-group">
								<i class="fas fa-key" style="color: green;"></i><label class="font-weight-bold pl-2">password</label><input type="text" class="form-control" placeholder="Password" name="rpassword" required>
							</div>
							<button type="submit" class="btn btn-outline-info mt-4 btn-block shadow-sm font-weight-bold" name="rSignup">Signup</button>
							<em style="font-size: 11px;" class="text-capitalize font-weight-bold">Note: by clicking sign up,you agree  to our terms,data policy amd cookies policy</em>
						</form>
					</div>
				</div>
				
			</div>
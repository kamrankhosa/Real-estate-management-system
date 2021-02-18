<?php
session_start();

define('TITLE','CHANGE PASSWORD');
define('PAGE','Adminpasschange');
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }

include"../dbconnection.php";


if (isset($_POST['password_update_btn'])) {
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$query_old_pass=mysqli_query($db_connect,"SELECT * from adminlogin_tb where a_password='$old_password'and a_login_id='$_SESSION[a_login_id]'");

	$checkpoint_old_password= $query_old_pass->num_rows;
	

	if ($checkpoint_old_password == 1) {
		

		if ($new_password==$confirm_password) {
			
$query_update_password=mysqli_query($db_connect,"UPDATE adminlogin_tb set a_password='$new_password'where a_login_id='$_SESSION[a_login_id]'");

      $pass_change_success ="Your Password has been Changed";
		}
		else {

         $error_pass_matching ="your new and confiirm password does not match";
	   }
	}
	  else {
	  	$error_old_pass ="your current password does not match";
	  }
}

include"Include_Code/Admin-header.php";






?>

                <div class="col-sm-6  mt-5 ">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST" class="mx-5 jumbotron mx-3 my-2">
					<h5 class="text-center ">Admin Password Change Form</h5>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="rEmail" id="rEmail"                               value="<?php echo $_SESSION['a_email'];?>" readonly>
					</div>
					<div class="form-group">
						<label for="opassword">old password</label>
						<input type="password" class="form-control" name="old_password" id="old_password" required>
						
					</div>
					<div class="form-group">
						<label for="npassword">New password</label>
						<input type="password" class="form-control" name="new_password" id="new_password"required >
						
					</div>
					<div class="form-group">
						<label for="cpassword">Confirm password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"required>						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger btn-block" name="password_update_btn">Update
					</button>
					</div>

					<?php
if (isset($error_pass_matching)) {
	echo "<div class='alert alert-danger col-sm-4 ml-2 mt-2'>".$error_pass_matching."</div>";
}
if (isset($error_old_pass)) {
	echo "<div class='alert alert-danger col-sm-4 ml-2 mt-2'>".$error_old_pass."</div>";
}
if (isset($pass_change_success)) {
	echo "<div class='alert alert-success col-sm-4 ml-2 mt-2'>".$pass_change_success."</div>";
}

?>
					
				</form>
			</div>

			<?php


			include"Include_Code/Admin-footer.php";
			?>

			

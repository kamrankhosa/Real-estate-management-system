<?php
session_start();
 include"../dbconnection.php";

 define('PAGE','RequesterChangePass');
 define('TITLE','Requester Password Change');


 if (!$_SESSION['r_login_id']) {
 	header("location:RequesterLogin.php");
 }
if (isset($_POST['password_update_btn'])) {
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$query_old_pass=mysqli_query($db_connect,"SELECT * from requesterlogin_tb where r_password='$old_password'and r_login_id='$_SESSION[r_login_id]'");

	$checkpoint_old_password= $query_old_pass->num_rows;
	

	if ($checkpoint_old_password == 1) {
		

		if ($new_password==$confirm_password) {
			
$query_update_password=mysqli_query($db_connect,"UPDATE requesterlogin_tb set r_password='$new_password'where r_login_id='$_SESSION[r_login_id]'");

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
 include"IncludeCommonCode/headerCommon.php";
?>

                <div class="col-sm-6  mt-5 ">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST" class="mx-5 jumbotron mx-3 my-2">
					<h5 class="text-center ">Requester Password Change Form</h5>
					<div class="form-group">
						<label for="rEmail">Email</label>
						<input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $_SESSION['r_email']?>" readonly>
					</div>
					<div class="form-group">
						<label for="">old password</label>
						<input type="password" class="form-control" name="old_password" id="old_password" required>
						
					</div>
					<div class="form-group">
						<label for="">New password</label>
						<input type="password" class="form-control" name="new_password" id="new_password"required >
						
					</div>
					<div class="form-group">
						<label for="password">Confirm password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"required>						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger btn-block" name="password_update_btn">Update
					</button>
					</div>
					
				</form>
			</div>
<?php
include"IncludeCommonCode/footerCommonCode.php";
?>
<?php
if (isset($error_pass_matching)) {
	echo "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>".$error_pass_matching."</div>";
}
if (isset($error_old_pass)) {
	echo "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>".$error_old_pass."</div>";
}
if (isset($pass_change_success)) {
	echo "<div class='alert alert-success col-sm-6 ml-5 mt-2'>".$pass_change_success."</div>";
}

?>

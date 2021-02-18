<?php
session_start();
define('TITLE','PROFILE');
define('PAGE','RequesterProfile');
include"../dbconnection.php";

 if (!$_SESSION['r_login_id']) {
 	header("location:RequesterLogin.php");
 }

?>
<?php

include"IncludeCommonCode/headerCommon.php";

$query=mysqli_query($db_connect,"select r_name from requesterlogin_tb where r_login_id='$_SESSION[r_login_id]'");
$data=mysqli_fetch_array($query);

if (isset($_POST['nameupdate'])) {

	$NAME=$_POST['rName'];
	$query_update_name=mysqli_query($db_connect,"UPDATE requesterlogin_tb set r_name='$NAME'where r_login_id='$_SESSION[r_login_id]'");
	header("location:RequesterProfile.php");
}




?>

			<div class="col-sm-6  mt-5 ">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST" class="mx-5">
					<div class="form-group">
						<label for="rEmail">Email</label>
						<input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $_SESSION['r_email']?>" readonly>
					</div>
					<div class="form-group">
						<label for="rName">Name</label>
						<input type="text" class="form-control" name="rName" id="rName"  value="<?php echo $data['r_name'];?>">
						
					</div>
					<button type="submit" class="btn btn-danger" name="nameupdate">Update
					</button>
					
				</form>
			</div><!--END profile area 2ND COLUMN-->
		</div>
		<!-- END ROW -->
		



	</div> 
	<!-- End CONTAINER -->
	

	<!--bootstrap javascript-->
			<script src="../js/jquery.min.css"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/all.min.js"></script>
</body>
</html>



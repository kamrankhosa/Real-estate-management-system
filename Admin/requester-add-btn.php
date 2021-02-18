<?php
session_start();
define('TITLE','Requester insert');
define('PAGE','Requester');

include"Include_Code/Admin-header.php";
include"../dbconnection.php";

if (isset($_POST['requester_submit_btn'])) {
		
		$name= $_POST['requester_name'];
		$email= $_POST['requester_email'];
		$password= $_POST['r_password'];


$query=mysqli_query($db_connect,"SELECT r_email from requesterlogin_tb where r_email='$email'");
 	$checkpoint=$query->num_rows;
		if ($checkpoint<1) {
			
			$query_insert = mysqli_query($db_connect,"INSERT INTO requesterlogin_tb set 

				r_name='$name',
				r_email='$email',
				r_password='$password'
   				  
   				
          ");
			   
			$success="Congrats! Your Requester added Successfully!";

		} 
		else{

			$error = "This email address already exists.";
		}

	}

	if(isset($_POST['requester_close_btn'])){

		header("location:Requester.php");
	}



?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">   <!--start profile area 2ND COLUMN-->


	<?php



	if (isset($success)) {
		echo "<div class='alert alert-success'>".$success."</div>";
		
	}
	if (isset($error)) {
		echo "<div class='alert alert-danger'>" .$error."</div>";
	}

?>		

				<form action="" method="POST">
					<h5 class="text-center text-bold">Add New Requester</h5>
					
					
					<div class="form-group">
						<label for="name">Requester Name</label>
						<input type="text" class="form-control" name="requester_name" id="requester_name"required >
						
					</div>
					<div class="form-group">
						<label for="Email">Requester Email</label>
                        <input type="Email" class="form-control" name="requester_email" id="requester_email"required>
					</div>
					<div class="form-group">
						<label for="ID"> Requester Password</label>
						<input type="number" class="form-control" name="r_password" id="r_password">
					</div>
					<div class="float-right">
						<button type="submit" class="btn btn-danger" name="requester_submit_btn">Submit
					</button>
					<a href="Requester.php" class="btn btn-secondary">Close</a>
					</div>

					
				</form>
			</div>
			

			<?php include"Include_Code/Admin-footer.php";
?>

			
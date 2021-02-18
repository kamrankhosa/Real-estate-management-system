<?php
session_start();
define('TITLE','Technician insert');
define('PAGE','Technician');

include"Include_Code/Admin-header.php";
include"../dbconnection.php";

if (isset($_POST['technician_submit_btn'])) {
		
	       $technician_new_name=$_POST['technician_name'];

     	    $technician__new_city=$_POST['technician_city'];
     	     $technician_new_mobile=$_POST['technician_mobile'];
     	    $technician_new_email=$_POST['technician_email'];
     	  


$query=mysqli_query($db_connect,"SELECT tech_email from technician_tb where tech_email='$technician_new_email'");
 	$checkpoint=$query->num_rows;
		if ($checkpoint<1) {
			
			$query_insert = mysqli_query($db_connect,"INSERT INTO technician_tb set 

				tech_name='$technician_new_name',
				tech_city='$technician__new_city',
				tech_mobile='$technician_new_mobile',
				tech_email='$technician_new_email'
   				  
   				
          ");
			   
			$success="Congrats! Your Technician added Successfully!";

		}
		else{

			$error = "This email address already exists.";
		}

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
						<label for="name">Technician Name</label>
						<input type="text" class="form-control" name="technician_name" id="technician_name"required >
						
					</div>
					<div class="form-group">
						<label for="City">Technician City</label>
						<input type="text" class="form-control" name="technician_city" id="technician_city">
					</div>
					<div class="form-group">
						<label for="Mobile">Technician Mobile</label>
						<input type="number" class="form-control" name="technician_mobile" id="technician_mobile">
					</div>
					<div class="form-group">
						<label for="Email">Technician Email</label>
                        <input type="Email" class="form-control" name="technician_email" id="technician_email"required>
					</div>
				
					<div class="float-right">
						<button type="submit" class="btn btn-danger" name="technician_submit_btn">Submit
					</button>
					<a href="Technician.php" class="btn btn-secondary">Close</a>
					</div>

					
				</form>
			</div>
			

			<?php include"Include_Code/Admin-footer.php";
?>

			
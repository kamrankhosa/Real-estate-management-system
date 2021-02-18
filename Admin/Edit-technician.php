<?php
session_start();
define('TITLE','Requester Edit Detail');
define('PAGE','Technician');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

$selected_record=$_GET['tech_id'];
$query=mysqli_query($db_connect,"SELECT * FROM technician_tb where tech_id = '$selected_record'");
$data=mysqli_fetch_array($query);
?>

<?php 


 if (isset($_POST['technician_update_btn'])) {
     	    $technician_new_name=$_POST['technician_name'];

     	    $technician_new_city=$_POST['technician_city'];
     	     $technician_new_mobile=$_POST['technician_mobile'];
     	    $technician_new_email=$_POST['technician_email'];
     	  
     	   

     	   $query_update =mysqli_query($db_connect,"UPDATE technician_tb set

     	    		tech_name ='$technician_new_name',
     	    		tech_city ='$technician_new_city',
     	    		tech_mobile ='$technician_new_mobile',
     	    		tech_email ='$technician_new_email'

     	    		where tech_id = '$selected_record'
     	    	");
     	   header("location:Technician.php");
     }
?>
<?php  
 if (isset($_POST['technician_close_btn'])) {

     	   header("location:Technician.php");

     	}

  ?>
 <div class="col-sm-6 mt-5 mx-3 jumbotron">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST">
					<h5 class="text-center text-bold">Technician Edit Detail Form</h5>
					
					<div class="form-group">
						<label for="ID"> Technician ID</label>
						<input type="number" value="<?php echo $data['tech_id'];?>" class="form-control" name="tech_id" id="tech_id" readonly >
						
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" value="<?php echo $data['tech_name'];?>" class="form-control" name="technician_name" id="technician_name"required >
						
					</div>
					<div class="form-group">
						<label for="name">City</label>
						<input type="text" value="<?php echo $data['tech_city'];?>" class="form-control" name="technician_city" id="technician_city"required >
						
					</div>
					<div class="form-group">
						<label for="name">Mobile</label>
						<input type="text" value="<?php echo $data['tech_mobile'];?>" class="form-control" name="technician_mobile" id="technician_mobile"required >
						
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
                        <input type="Email" value="<?php echo $data['tech_email'];?>" class="form-control" name="technician_email" id="technician_email"required>						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger" name="technician_update_btn">Update
					</button>
					<button type="submit" class="btn btn-secondary" name="technician_close_btn">Close
					</button>
					</div>

					
				</form>
			</div>
			
			

<?php include"Include_Code/Admin-footer.php";
?>

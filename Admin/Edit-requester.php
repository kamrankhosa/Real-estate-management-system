<?php
session_start();
define('TITLE','Requester Edit Detail');
define('PAGE','Requester');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

$selected_record=$_GET['r_login_id'];
$query=mysqli_query($db_connect,"SELECT * FROM requesterlogin_tb where r_login_id = '$selected_record'");
$data=mysqli_fetch_array($query);
?>

<?php 


 if (isset($_POST['requester_update_btn'])) {
     	    $requester_new_name=$_POST['requester_name'];
     	    $requester_new_email=$_POST['requester_email'];
     	   

     	   $query_update =mysqli_query($db_connect,"UPDATE requesterlogin_tb set

     	    		r_name ='$requester_new_name',
     	    		r_email ='$requester_new_email'

     	    		where r_login_id = '$selected_record'
     	    	");
     	   header("location:Requester.php");
     }
?>
<?php  
 if (isset($_POST['requester_close_btn'])) {

     	   header("location:Requester.php");

     	}

  ?>
 <div class="col-sm-6 mt-5 mx-3 jumbotron">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST">
					<h5 class="text-center text-bold">Requester Edit Detail Form</h5>
					
					<div class="form-group">
						<label for="ID"> Requester ID</label>
						<input type="number" value="<?php echo $data['r_login_id'];?>" class="form-control" name="r_login_id" id="r_login_id" readonly >
						
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" value="<?php echo $data['r_name'];?>" class="form-control" name="requester_name" id="requester_name"required >
						
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
                        <input type="Email" value="<?php echo $data['r_email'];?>" class="form-control" name="requester_email" id="requester_email"required>						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger" name="requester_update_btn">Update
					</button>
					<button type="submit" class="btn btn-secondary" name="requester_close_btn">Close
					</button>
					</div>

					
				</form>
			</div>
			
			

<?php include"Include_Code/Admin-footer.php";
?>

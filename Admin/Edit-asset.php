<?php
session_start();
define('TITLE','Assets Edit Detail');
define('PAGE','Assets');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

$selected_record=$_GET['asset_id'];
$query=mysqli_query($db_connect,"SELECT * FROM product_tb where asset_id = '$selected_record'");
$data=mysqli_fetch_array($query);
?>

<?php 


 if (isset($_POST['assets_update_btn'])) {
     	   
     	    $asset_name=$_POST['asset_name'];

     	    $asset_DOP=$_POST['asset_DOP'];
     	     $asset_available=$_POST['asset_available'];
     	    $asset_total=$_POST['asset_total'];
     	     $asset_real=$_POST['asset_real'];

     	    $asset_sell=$_POST['asset_sell'];
     	     
     	  
     	   

     	   $query_update =mysqli_query($db_connect,"UPDATE product_tb set

     	    		asset_name ='$asset_name',
     	    		asset_purhase_date ='$asset_DOP',
     	    		asset_available ='$asset_available',
     	    		asset_total ='$asset_total',
     	    		asset_realCost ='$asset_real',
     	    		asset_sellCost ='$asset_sell'

     	    		where asset_id = '$selected_record'
     	    	");
     	   header("location:Assets.php");
     }
?>
<?php  
 if (isset($_POST['asset_close_btn'])) {

     	   header("location:Assets.php");

     	}
  ?>
 <div class="col-sm-6 mt-5 mx-3 jumbotron">   <!--start profile area 2ND COLUMN-->
 	<h5 class="text-center text-bold">Product Edit Detail Form</h5>

				<form action="" method="POST">
					
					
					<div class="form-group">
						<label for="ID">Product ID</label>
						<input type="number" value="<?php echo $data['asset_id'];?>" class="form-control" name="asset_id" id="asset_id" readonly >					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" value="<?php echo $data['asset_name'];?>" class="form-control" name="asset_name" id="asset_name"required >
						asset_
					</div>
					<div class="form-group">
						<label for="name">Date Of Purchase</label>
						<input type="date" value="<?php echo $data['asset_purhase_date'];?>" class="form-control" name="asset_DOP" id="asset_DOP"required >
						
					</div>
					<div class="form-group">
						<label for="name">Available</label>
						<input type="number" value="<?php echo $data['asset_available'];?>" class="form-control" name="asset_available" id="asset_available"required >
						
					</div>
					<div class="form-group">
						<label for="Email">Total</label>
                        <input type="number" value="<?php echo $data['asset_total'];?>" class="form-control" name="asset_total" id="asset_total"required>						
					</div>
					<div class="form-group">
						<label for="name">Product Real Cost</label>
						<input type="number" value="<?php echo $data['asset_realCost'];?>" class="form-control" name="asset_real" id="asset_real"required >
						
					</div>
					<div class="form-group">
						<label for="number"> Product Sell Cost</label>
                        <input type="number" value="<?php echo $data['asset_sellCost'];?>" class="form-control" name="asset_sell" id="asset_sell"required>						
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-danger" name="assets_update_btn">Submit
					</button>
					<button type="submit" class="btn btn-secondary" name="asset_close_btn">Close
					</button>
					</div>

					
				</form>
			</div>
			
			

<?php include"Include_Code/Admin-footer.php";
?>

<?php
session_start();
define('TITLE','Product insert');
define('PAGE','Assets');

include"Include_Code/Admin-header.php";
include"../dbconnection.php";


if (isset($_POST['assets_update_btn'])) {
		
	      $asset_name=$_POST['asset_name'];

     	    $asset_DOP=$_POST['asset_DOP'];
     	     $asset_available=$_POST['asset_available'];
     	    $asset_total=$_POST['asset_total'];
     	     $asset_real=$_POST['asset_real'];

     	    $asset_sell=$_POST['asset_sell'];
     	     


			
			$query_insert = mysqli_query($db_connect,"INSERT INTO product_tb set 

				asset_name ='$asset_name',
     	    		asset_purhase_date ='$asset_DOP',
     	    		asset_available ='$asset_available',
     	    		asset_total ='$asset_total',
     	    		asset_realCost ='$asset_real',
     	    		asset_sellCost ='$asset_sell'
   				
          ");
			header("location:Assets.php");
}

?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">   <!--start profile area 2ND COLUMN-->
<h5 class="text-center text-bold">Add New Product</h5>

				<form action="" method="POST">
					
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text"  class="form-control" name="asset_name" id="asset_name"required >
						asset_
					</div>
					<div class="form-group">
						<label for="name">Date Of Purchase</label>
						<input type="date"  class="form-control" name="asset_DOP" id="asset_DOP"required >
						
					</div>
					<div class="form-group">
						<label for="name">Available</label>
						<input type="number"  class="form-control" name="asset_available" id="asset_available"required >
						
					</div>
					<div class="form-group">
						<label for="Email">Total</label>
                        <input type="number"  class="form-control" name="asset_total" id="asset_total"required>						
					</div>
					<div class="form-group">
						<label for="name">Product Real Cost</label>
						<input type="number"  class="form-control" name="asset_real" id="asset_real"required >
						
					</div>
					<div class="form-group">
						<label for="number"> Product Sell Cost</label>
                        <input type="number"  class="form-control" name="asset_sell" id="asset_sell"required>						
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-danger" name="assets_update_btn">Submit
					</button>
					<a href="Assets.php" class="btn btn-secondary">Close</a>
					
					</div>

					
				</form>
			</div>
			

			<?php include"Include_Code/Admin-footer.php";?>

			
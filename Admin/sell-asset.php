<?php
session_start();
define('TITLE',' SELL ASSETS');
define('PAGE','Assets');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";


$selected_record=$_GET['asset_id'];

$query=mysqli_query($db_connect,"SELECT * FROM product_tb where asset_id = '$selected_record'");
$data=mysqli_fetch_array($query);
?>


<?php 


 if (isset($_POST['sell_asset_btn'])) {
     	   
     	    $cust_name=$_POST['cust_name'];

     	    $asset_name=$_POST['asset_name'];
     	     $asset_available=$_POST['asset_available'];
     	    $asset_quantity=$_POST['asset_quantity'];
     	     $asset_sellprice=$_POST['asset_sellprice'];

     	    $asset_total=$_POST['asset_total'];
     	     $asset_date=$_POST['asset_date'];
     	     
     	  
     	   

     	   $query_insert ="INSERT INTO purchaser_tb set

     	    		pur_name ='$cust_name',
     	    		pur_product_name ='$asset_name',
     	    		pur_product_avlble ='$asset_available',
     	    		pur_product_quantity ='$asset_quantity',
     	    		pur_product_each ='$asset_sellprice',
     	    		pur_total ='$asset_total',
     	    		pur_date ='$asset_date'";
     	    	if ($db_connect->query($query_insert) == TRUE) {

     	    		$genid=mysqli_insert_id($db_connect);

     	    		session_start();

     	           $_SESSION['myid']=$genid;
                   header("location:product-bill.php");
     	    	}

     	    	$available=$_REQUEST['asset_available'] - $_REQUEST['asset_quantity'];
     	   $query_update=mysqli_query($db_connect,"UPDATE product_tb set asset_available='$available' where asset_id='$selected_record'");
     }
    
         
     	
     
?>
<?php  
 if (isset($_POST['asset_close_btn'])) {

     	   header("location:Assets.php");

     	}
  ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">   <!--start profile area 2ND COLUMN-->
 	<h5 class="text-center text-bold">Customer Bill</h5>

				<form action="" method="POST">
					
					<div class="form-group">
						<label for="ID">Product ID</label>
						<input type="text" value="<?php echo $data['asset_id'];?>" class="form-control" name="asset_id" id="asset_id" readonly >					
						</div>
					
					<div class="form-group">
						<label for="name">Customer Name</label>
						<input type="text" class="form-control" name="cust_name" id="asset_name"required >
						
					</div>
					<div class="form-group">
						<label for="name">Product Name</label>
						<input type="text" value="<?php echo $data['asset_name'];?>" class="form-control" name="asset_name" id="asset_name" readonly>
					</div>
					
					<div class="form-group">
						<label for="name">Available</label>
						<input type="number" value="<?php echo $data['asset_available'];?>" class="form-control" name="asset_available" id="asset_available"readonly>
						
					</div>
					<div class="form-group">
						<label for="Email">Quantity</label>
                        <input type="number" class="form-control" name="asset_quantity" id="asset_total"required onchange="test(this)">						
					</div>
					<div class="form-group">
						<label for="number">Price Each</label>
                        <input type="number" value="<?php echo $data['asset_sellCost'];?>" class="form-control" name="asset_sellprice" id="asset_sell1"required>						
					</div>
					<div class="form-group">
						<label for="number"> Total Price</label>
                        <input type="number" class="form-control" name="asset_total" id="asset_sell2"required>	
                        <div class="form-group col-md-5">
						<label for="number">Date</label>
                        <input type="Date" class="form-control" name="asset_date" id="asset_sell"required>						
					</div>					
					</div>
					<div class="form-group text-center float-right">
						<button type="submit" class="btn btn-danger  btn-lg" name="sell_asset_btn">Submit
					</button>
					<button type="submit" class="btn btn-secondary  btn-lg" name="sell_close_btn">Close
					</button>
					</div>

					
				</form>
			</div>
			<script>
				function test(value){
					var qnty= value.value;
					var price = $('#asset_sell1').val();
					document.getElementById('asset_sell2').value=price*qnty;
					// $('#asset_sell2').value=a*qnty;
				}
			</script>

			<?php
include"Include_Code/Admin-footer.php";

?>
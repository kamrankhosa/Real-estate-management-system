<?php
session_start();
define('TITLE','ASSETS');
define('PAGE','Assets');
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }

include"Include_Code/Admin-header.php";
include"../dbconnection.php";

?>

<div class=" mt-5 text-center col-sm-6 col-md-10">
					
					<p class="bg-dark text-white p-2">List Of Assets</p>

                  <table  id="example" border="0" class="table">
                  	<thead>
		<tr>
			
			<th scope="col">Product ID</th>
			<th scope="col">Name</th>
			<th scope="col">Purchase Date</th>
			<th scope="col">Available</th>
			<th scope="col">Total</th>
			<th scope="col">Real Cost</th>
			<th scope="col">Sell Cost</th>
			<th scope="col">Edit</th>
			<th scope="col">Delete</th>
			<th scope="col">Sell</th>

			
		</tr>
	</thead>
<tbody>

		<?php
		$query=mysqli_query($db_connect,"SELECT * from product_tb");
		while ($data=mysqli_fetch_array($query)) {
			
	



		?>
		
		<tr>
			<td> <?php echo $data['asset_id'];?></td>
			<td><?php echo $data['asset_name']; ?></td>
			<td><?php echo $data['asset_purhase_date']; ?></td>
			<td><?php echo $data['asset_available']; ?></td>
			<td><?php echo $data['asset_total'];?></td>

			<td> <?php echo $data['asset_realCost'];?></td>
			<td><?php echo $data['asset_sellCost']; ?></td>
			<td><a class="btn btn-primary" href="Edit-asset.php?asset_id=<?php echo $data['asset_id'];?>"><i class="far fa-eye"></i></a>

						<td><a class="btn btn-success" href="delete-asset.php?asset_id=<?php echo $data['asset_id'];?>"><i class="far fa-trash-alt"></i></a>
						<td><a class="btn btn-success" href="sell-asset.php?asset_id=<?php echo $data['asset_id'];?>"><i class="far fa-eye"></i></a></td>
		</tr>
	<?php   }; ?>
</tbody>
	
	</table>
	<?php
include"Include_Code/Admin-footer.php";

?>
<div class="float-right">
			<a href="asset-add-btn.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>



			</div>

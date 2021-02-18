<?php
session_start();
define('TITLE','Customer Bill');
define('PAGE','Assets');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";
?>

<?php 
$QUERY="SELECT * from purchaser_tb where pur_id={$_SESSION['myid']}";
$result=$db_connect->query($QUERY);

if($result->num_rows==1){
	$data=$result->fetch_array();
	?>
<div class="mx-5 col-sm-4 mt-5">
<h3 class="text-center mt-5 mb-3">Customer Bill</h3>
<table class="table table-hover table-bordered">
	<tbody>
		<tr>
			<td>Purchaser ID</td>
			<td><?php if(isset($data['pur_id'])){ echo $data['pur_id']; } ?></td>
		</tr>

		
		<tr>
			<td> Purchaser Name</td>
			<td><?php if(isset($data['pur_name'])){ echo $data['pur_name']; } ?></td>
		</tr>

		<tr>
			<td>Product Name</td>
			<td><?php if(isset($data['pur_product_name'])){ echo $data['pur_product_name']; } ?></td>
		</tr>

		<tr>
			<td>Quantity</td>
			<td><?php if(isset($data['pur_product_quantity'])){ echo $data['pur_product_quantity']; } ?></td>
		</tr>

		<tr>
			<td>Price Each</td>
			<td><?php if(isset($data['pur_product_each'])){ echo $data['pur_product_each']; } ?></td>
		</tr>

		<tr>
			<td>Total Price </td>
			<td><?php if(isset($data['pur_total'])){ echo $data['pur_total']; } ?></td>
		</tr>

		<tr>
			<td>Date</td>
			<td><?php if(isset($data['pur_date'])){ echo $data['pur_date']; } ?></td>
		</tr>
		</tbody>
		</table>
		<form class="d-print-none "><input class="btn btn-danger btn-lg float-right" type="submit" value="Print"
		onClick="window.print()">
		<a href="Assets.php" class="btn btn-secondary btn-lg float-right mr-2" type="submit">close</a>
		</form>
		

	

					

<?php }?>
</div>


<?php include"Include_Code/Admin-footer.php";?>

<?php
session_start();
define('TITLE','WORK ORDER');
define('PAGE','Work');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";
?>

<?php 
$selected_record=$_GET['requester_id'];

$QUERY="SELECT * from assignwork_tb where requester_id='$selected_record'";
	$result=$db_connect->query($QUERY);

	if($result->num_rows>0){
	$data=$result->fetch_assoc();
	?>
<div class="mx-5 col-sm-6 mt-5">
<h3 class="text-center mt-5 mb-3">Assign work Detail</h3>
<table class="table table-bordered table-hover">
	<tbody>
		<tr>
			<td> Request ID</td>
			<td><?php if(isset($data['requester_id'])){ echo $data['requester_id']; } ?></td>
		</tr>

		<tr>
			<td> Request Info</td>
			<td><?php if(isset($data['requester_info'])){ echo $data['requester_info']; } ?></td>
		</tr>

		<tr>
			<td> Request Description</td>
			<td><?php if(isset($data['requester_desc'])){ echo $data['requester_desc']; } ?></td>
		</tr>

		<tr>
			<td> Requester Name</td>
			<td><?php if(isset($data['requester_name'])){ echo $data['requester_name']; } ?></td>
		</tr>

		<tr>
			<td> Address 1</td>
			<td><?php if(isset($data['requester_add1'])){ echo $data['requester_add1']; } ?></td>
		</tr>

		<tr>
			<td> Address 2</td>
			<td><?php if(isset($data['requester_add2'])){ echo $data['requester_add2']; } ?></td>
		</tr>

		<tr>
			<td> City</td>
			<td><?php if(isset($data['requester_city'])){ echo $data['requester_city']; } ?></td>
		</tr>

		<tr>
			<td> State</td>
			<td><?php if(isset($data['requester_state'])){ echo $data['requester_state']; } ?></td>
		</tr>

		<tr>
			<td> Zip Code</td>
			<td><?php if(isset($data['requester_zip'])){ echo $data['requester_zip']; } ?></td>
		</tr>

		<tr>
			<td> Email</td>
			<td><?php if(isset($data['requester_email'])){ echo $data['requester_email']; } ?></td>
		</tr>

		<tr>
			<td> Mobile</td>
			<td><?php if(isset($data['requester_mobile'])){ echo $data['requester_mobile']; } ?></td>
		</tr>

		<tr>
			<td> Assigned Date</td>
			<td><?php if(isset($data['assign_date'])){ echo $data['assign_date']; } ?></td>
		</tr>

		<tr>
			<td> Technician Name</td>
			<td><?php if(isset($data['assign_tech'])){ echo $data['assign_tech']; } ?></td>
		</tr>
		<tr>
			<td> Customer Sign</td>
			<td></td>
		</tr>
		<tr>
			<td> Technician Sign</td>
			<td></td>
		</tr>
		</tbody>
		</table>
		<form class="d-print-none "><input class="btn btn-danger btn-lg float-right mb-2" type="submit" value="Print"
		onClick="window.print()">
		</form>
		

	

					

<?php }
?>
</div>
<?php include"Include_Code/Admin-footer.php";

?>

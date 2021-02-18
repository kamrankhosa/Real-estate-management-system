<?php
session_start();
define('PAGE','CheckStatus');
 include"../dbconnection.php";
 define('TITLE','Requester Service Status');
 if (!$_SESSION['r_login_id']) {
 	header("location:RequesterLogin.php");
 }


include"IncludeCommonCode/headerCommon.php";

?>


<div class="col-sm-6 mt-5 mx-3">
	<form action="" method="POST" class="form-inline d-print-none">
		<div class="form-group mr-3">
			<label for="check_id"> Enter Request ID:</label>
	<input type="text" name="check_id" class="form-group" id="check_id" required>
</div>
<button type="submit" class="btn btn-danger">Search</button>
</form>

<?php 
if (isset($_REQUEST['check_id'])) {

	$QUERY="SELECT * from assignwork_tb where assignwork_id={$_REQUEST['check_id']}";
	$QUERY1="SELECT * from submitrequest_tb where requester_id={$_REQUEST['check_id']}";
	$result=$db_connect->query($QUERY);
	$result1=$db_connect->query($QUERY1);
    if(!empty($result) || !empty($result1)){
	if($result->num_rows>0){
	$data=$result->fetch_assoc();

	

	?>


<h3 class="text-center mt-5">Assign work Detail</h3>
<table class="table table-bordered table-hover">
	<tbody>
		<tr>
			<td> Request ID</td>
			<td><?php if(isset($data['assignwork_id'])){ echo $data['assignwork_id']; } ?></td>
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
			<td> Service Charge</td>
			<td><?php if(isset($data['request_charges'])){ echo $data['request_charges']; } ?></td>
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
<tr>
		<td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print'
		onClick='window.print()'></form></td>
		</tr>


<?php }  elseif($result1->num_rows>0){

	echo '<div class="alert alert-warning mt-4">Your Request Is Still Pending</div>';
}
else{
	echo '<div class="alert alert-warning mt-4">Invalid</div>';

} 
}
else{
echo '<div class="alert alert-warning mt-4">Record not found.</div>';
}
}?>

</div>

<?php
include"IncludeCommonCode/footerCommonCode.php";
?>
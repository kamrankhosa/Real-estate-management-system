<?php
session_start();
define('TITLE','WORK ORDER');
define('PAGE','Work');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }
?>

	
		<div class="col-sm-9 text-center col-md-10 mt-5">
			<p class="bg-dark text-white p-2">List Of Assets</p>
<table id="example" class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
					<th scope="col">Request Id</th>
					<th scope="col">Request info</th>
					<th scope="col">Name</th>
					<th scope="col">Address</th>
					<th scope="col">city</th>
					<th scope="col">Mobile</th>
					<th scope="col">Technician</th>
					<th scope="col">Assign Date</th>
					<th scope="col">Service Charges</th>
					<th scope="col">View</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>
					<tbody>

				<?php
				$query=mysqli_query($db_connect,"SELECT * from assignwork_tb");
				while($data=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $data['assignwork_id']; ?></td>
						<td><?php echo $data['requester_info']; ?></td>
						<td><?php echo $data['requester_name']; ?></td>
						<td><?php echo $data['requester_add1']; ?></td>

						<td><?php echo $data['requester_city']; ?></td>
						<td><?php echo $data['requester_mobile']; ?></td>
						<td><?php echo $data['assign_tech']; ?></td>
						<td><?php echo $data['assign_date']; ?></td>
						<td><?php echo $data['request_charges']; ?></td>
						<td><a class="btn btn-primary" href="Edit-request-from-work.php?requester_id=<?php echo $data['requester_id'];?>"><i class="far fa-eye"></i></a></td>

						<td><a class="btn btn-success" href="delete-request-from-work.php?requester_id=<?php echo $data['requester_id'];?>"><i class="far fa-trash-alt"></i></a></td>
					</tr>


				<?php } ?>
								</tbody>
								<tfoot>
            <tr>
					<th scope="col">Request Id</th>
					<th scope="col">Request info</th>
					<th scope="col">Name</th>
					<th scope="col">Address</th>
					<th scope="col">city</th>
					<th scope="col">Mobile</th>
					<th scope="col">Technician</th>
					<th scope="col">Assign Date</th>
					<th scope="col">Service Charges</th>
					<th scope="col">View</th>
					<th scope="col">Delete</th>
				</tr>
			</tfoot>

			</table>

		</div>




<?php include"Include_Code/Admin-footer.php";
?>
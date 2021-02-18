<?php
session_start();
define('TITLE','Dashboard');
define('PAGE','Dashboard');
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }
include"Include_Code/Admin-header.php";

include"../dbconnection.php";
$query=mysqli_query($db_connect,"SELECT max(requester_id) from submitrequest_tb");
$data=mysqli_fetch_row($query);
$submitrequest=$data[0];

$query1=mysqli_query($db_connect,"SELECT max(requester_id) from assignwork_tb");
$data1=mysqli_fetch_row($query1);
$assignwork=$data1[0];

$query2=mysqli_query($db_connect,"SELECT * from technician_tb");
$data2=mysqli_num_rows($query2);


?>
			<div class="col-sm-9 col-md-10"><!--START dashboard 2ST COLUMN started -->
				<div class="row text-center mx-5">
					<div class="col-sm-4 mt-5" >
						<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
							<div class="card-header">REQUESTS RECEIVED</div>
							<div class="card-body">
							<h4 class="card-title"><?php echo $submitrequest;?></h4>
							<a class="btn text-white" href="Requests.php">  view</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 mt-5" >
						<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
							<div class="card-header">ASSIGNED WORD</div>
							<div class="card-body">
							<h4 class="card-title"><?php echo $assignwork;?></h4>
							<a class="btn text-white" href="Work.php">  view</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 mt-5" >
						<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
							<div class="card-header">N0.OF TECHNICIAN</div>
							<div class="card-body">
							<h4 class="card-title"><?php echo $data2;?></h4>
							<a class="btn text-white" href="Technician.php">  view</a>
							</div>
						</div>
					</div>
					

				</div>
				<div class="mx-5 mt-5 text-center">
					
					<p class="bg-dark text-white p-2">List Of Requester</p>

                  <table  id="example" border="0" class="table">
                  	<thead>
		<tr>
			
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<!-- <th class="scope">Password</th> -->
			
		</tr>
	</thead>


		<?php
		$query=mysqli_query($db_connect,"SELECT * from requesterlogin_tb");
		while ($data=mysqli_fetch_array($query)) {
			
	



		?>
		<tbody>
		<tr>
			<td> <?php echo $data['r_login_id'];?></td>
			<td><?php echo $data['r_name']; ?></td>
			<td><?php echo $data['r_email'];?></td>
			<!-- <th><?php echo $data ['r_password'];?></th> -->
		</tr>
	<?php   }; ?>
</tbody>
	
	</table>


				</div>

			</div>
			<!--END dashboard 2ST COLUMN started -->

			</div><!-- END ROW -->
		
	</div> <!-- End CONTAINER -->
	
	

	<!--bootstrap javascript-->
			<script src="../js/jquery.min.css"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/all.min.js"></script>
</body>
</html>
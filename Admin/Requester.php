<?php
session_start();
define('TITLE','Requester');
define('PAGE','Requester');

include"Include_Code/Admin-header.php";
include"../dbconnection.php";
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }


?>

				<div class=" mt-5 text-center col-sm-4 col-md-10">
					
					<p class="bg-dark text-white p-2">List Of Requester</p>

                  <table id="example" border="0" class="table">
                  	<thead>
		<tr>
			
			<th scope="col"> Req ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">View</th>
			<th scope="col">Delete</th>
			
		</tr>
	</thead>

<tbody>
		<?php
		$query=mysqli_query($db_connect,"SELECT * from requesterlogin_tb");
		while ($data=mysqli_fetch_array($query)) {
			
	



		?>
		
		<tr>
			<td> <?php echo $data['r_login_id'];?></td>
			<td><?php echo $data['r_name']; ?></td>
			<td><?php echo $data['r_email'];?></td>
			<td><a class="btn btn-primary" href="Edit-requester.php?r_login_id=<?php echo $data['r_login_id'];?>"><i class="far fa-eye"></i></a></td>

						<td><a class="btn btn-success" href="delete-requester.php?r_login_id=<?php echo $data['r_login_id'];?>"><i class="far fa-trash-alt"></i></a></td>
		</tr>
	<?php   }; ?>
</tbody>
	
	</table>
	<?php



include"Include_Code/Admin-footer.php";
?>
<div class="float-right">
			<a href="requester-add-btn.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a>



			</div>
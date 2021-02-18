<?php
session_start();
define('TITLE','TECHNICIAN');
define('PAGE','Technician');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }
?>
				<div class=" mt-5 text-center col-sm-4 col-md-10">
					
					<p class="bg-dark text-white p-2">List Of Technician</p>

                  <table id="example" border="0" class="table">
                  	<thead>
		<tr>
			
			<th scope="col"> Technician ID</th>
			<th scope="col">Name</th>
			<th scope="col">City</th>
			<th scope="col">Mobile</th>
			<th scope="col">Email</th>
			<th scope="col">View</th>
			<th scope="col">Delete</th>
			
		</tr>
	</thead>

<tbody>
		<?php
		$query=mysqli_query($db_connect,"SELECT * from technician_tb");
		while ($data=mysqli_fetch_array($query)) {
			
	



		?>
		
		<tr>
			<td> <?php echo $data['tech_id'];?></td>
			<td><?php echo $data['tech_name']; ?></td>
			<td><?php echo $data['tech_city']; ?></td>
			<td><?php echo $data['tech_mobile']; ?></td>
			<td><?php echo $data['tech_email'];?></td>
			<td><a class="btn btn-primary" href="Edit-technician.php?tech_id=<?php echo $data['tech_id'];?>"><i class="far fa-eye"></i></a></td>

						<td><a class="btn btn-success" href="delete-technician.php?tech_id=<?php echo $data['tech_id'];?>"><i class="far fa-trash-alt"></i></a></td>
		</tr>
	<?php }; ?>
</tbody>
	
	</table>
	<?php



include"Include_Code/Admin-footer.php";

?>
<div class="float-right">
			<a href="technician-add-btn.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a>



			</div>
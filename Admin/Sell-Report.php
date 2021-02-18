<?php
session_start();
define('TITLE','SELL REPORT');
define('PAGE','Sell-Report');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }
?>

 


 
 <div class="col-sm-4 col-md-4 mt-5 text-center d-print-none ">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST" class="mx-5 jumbotron mx-3 my-2">
					<h5 class="text-center ">Sell Report Detail</h5>
					<div class="form-group">
						<label for="email">Start Date</label>
						<input type="Date" class="form-control" name="st_date" id="st_date">
					</div>
					<div class="form-group">
						<label for="opassword">End Date</label>
						<input type="date" class="form-control" name="end_date" id="end_date" required>
						
					</div>
					
						<button type="submit" class="btn btn-danger float-right btn-lg" name="Search_btn">Search
					</button>
				


					</form>
</div>
<?php
if(isset($_REQUEST['Search_btn'])){
	$st_date=$_POST['st_date'];
    $end_date=$_POST['end_date'];

    $query="SELECT * FROM purchaser_tb where pur_date BETWEEN '$st_date'AND '$end_date'";
    $result=$db_connect->query($query);

   if($result->num_rows>0){
   	echo '<div class="col-md-5">';
	echo '<p class="bg-dark text-white text-center mt-5 p-2">Details</p>';
	echo '<table id="example" class="table table-bordered table-hover">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Id</th>';
	echo '<th scope="col"> Purchaser Name</th>';
	echo '<th scope="col">product_name</th>';
	echo '<th scope="col">Quantity</th>';
	echo '<th scope="col">Price Each</th>';
	echo '<th scope="col">Total</th>';
	echo '<th scope="col">Date</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	while($data=$result->fetch_assoc()){
		echo '<tr>';
		echo '<td>'.$data['pur_id'].'</td>';
		echo '<td>'.$data['pur_name'].'</td>';
		echo '<td>'.$data['pur_product_name'].'</td>';
		echo '<td>'.$data['pur_product_quantity'].'</td>';
		echo '<td>'.$data['pur_product_each'].'</td>';
		echo '<td>'.$data['pur_total'].'</td>';
		echo '<td>'.$data['pur_date'].'</td>';
		echo '<tr>';
	}
	echo '<div class="float-right mt-4">';
	echo '<tr>';
	echo '<td>';
	echo '<input type="submit" class="btn btn-danger d-print-none" value="Print" Onclick="window.print()">';
	echo '</td>';
	echo '</tr>';
	echo '</div>';
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}else{
	echo "<div class='alert alert-warning col-sm-3 ml-5 mt-2' role='alert'>No Record</div>";
}
}
    ?>
<?php 
include"Include_Code/Admin-footer.php";
?>
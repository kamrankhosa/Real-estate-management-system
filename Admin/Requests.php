<?php
session_start();
define('TITLE','Requests');
define('PAGE','Requests');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";
if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }

?>
<!-- start second column -->
<div class="col-sm-4">
<?php
    
    $sql="SELECT requester_id,requester_info,requester_desc,request_date FROM submitrequest_tb ORDER BY requester_id ASC LIMIT 3";
$result=$db_connect->query($sql);
if($result->num_rows > 0){
while($data=$result->fetch_assoc()){
			echo '<div class="card mt-5 mx-5">';
			echo '<div class="card-header">';
			echo 'Request ID:'.$data["requester_id"];
			echo '</div>';
			echo '<div class="card-body">';
			echo '<h5 class="card-title">Request Info:'.$data['requester_info'];
			echo '</h5>';
			echo '<p class="card-text">'.$data['requester_desc'];
			echo '</p>';
			echo '<p class="card-text">Request Date:'.$data['request_date'];
			echo'</p>';
            echo'<div class="float-right">';
            echo'<form action="" method="POST">';
            echo'<input type="hidden" name="id" value='.$data["requester_id"].'>';
			echo'<input type="submit" class="btn btn-danger mr-3" value="view" name="view">';
			echo'<input type="submit" class="btn btn-secondary" value="close" name="close">';
			echo'</form>';
			 echo'</div>';
			echo '</div>';

			echo '</div>';

    }
		}


?>
</div>



<?php include"request_assign_form.php";?>

<?php include"Include_Code/Admin-footer.php";?>

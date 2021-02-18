<?php
session_start();
include"../dbconnection.php";
define('PAGE','submitRequest');
define('TITLE','Submit Request');
if (!$_SESSION['r_login_id']) {
     header("location:RequesterLogin.php");
 }

if (isset($_POST['submit_requesterbtn'])) {
     	    $REQUESTER_INFO=$_POST['request_Info'];
     	    $REQUESTER_DESC=$_POST['requester_Description'];
     	    $REQUESTER_NAME=$_POST['requester_Name'];
     	    $REQUESTER_ADD1=$_POST['requester_address1'];
     	    $REQUESTER_ADD2=$_POST['requester_address2'];
     	    $REQUESTER_CITY=$_POST['requester_city'];
     	    $REQUESTER_STATE=$_POST['requester_state'];
     	    $REQUESTER_ZIP=$_POST['requester_zipcode'];
     	    $REQUESTER_EMAIL=$_POST['requester_email'];
     	    $REQUESTER_MOBILE=$_POST['requester_mobile'];
     	    $REQUESTER_DATE=$_POST['requester_date'];

     	   $sql =  "INSERT INTO submitrequest_tb set

     	    		requester_info='$REQUESTER_INFO',
     	    		requester_desc='$REQUESTER_DESC',
     	    		requester_name='$REQUESTER_NAME',
     	    		requester_add1='$REQUESTER_ADD1',
     	    		requester_add2='$REQUESTER_ADD2',
     	    		requester_city='$REQUESTER_CITY',
     	    		requester_state='$REQUESTER_STATE',
     	    		requester_zip='$REQUESTER_ZIP',
     	    		requester_email='$REQUESTER_EMAIL',
     	    		requester_mobile='$REQUESTER_MOBILE',
     	    		request_date='$REQUESTER_DATE'";

                    
if ($db_connect->query($sql) == TRUE) {
     
     $genid=mysqli_insert_id($db_connect);
$success = "<div class='alert alert-success col-sm-6 ml-2 mt-2'>YOUR REQUEST HAVE BEEN SUBMITTED</div>"; 
        $_SESSION['myid']=$genid;
        
        header("location:submit-request-success.php");
 }

        // echo"<script> location.href='submit-request-success.php'</script>";
     }else{

          $error = "<div class='alert alert-danger col-sm-6 ml-2 mt-2'>unable to request</div>"; 


     }


     include"IncludeCommonCode/headerCommon.php";

     ?>


 <div class="col-sm-9 col-md-10 mt-5"><!-- start service Request form 2nd column-->
 	<form action="" method="POST" class="mx-5 shadow-lg p-4">
 		<div class="form-group">
 			<label for="inputRequestInfo">Request Info</label>
 			<input type="text" name="request_Info" id="inputRequestInfo" placeholder="Request Info" class="form-control" required>
 		</div>
 		<div class="form-group">
 			<label for="inputRequestDescription">Description</label>
 			<input type="text" name="requester_Description" id="inputRequestDescription" placeholder="Write Description" class="form-control" required>
 		</div>
 		<div class="form-group">
 			<label for="inputName">Name</label>
 			<input type="text" name="requester_Name" id="inputName" placeholder="Name" class="form-control" required>
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-6">
 				<label for="inputAddress">Address</label>
 				<input type="text" name="requester_address1" id="inputaddress1" placeholder="Address" class="form-control" required>
 			</div>
 			<div class="form-group col-md-6">
 				<label for="inputAddress2">Address 2</label>
 				<input type="text" name="requester_address2" id="inputaddress2" placeholder="Address" class="form-control" required>
 			</div>
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-6">
 				<label for="inputCity">City</label>
 				<input type="text" name="requester_city" id="inputCity" placeholder="City" class="form-control" required>
 			</div>
 			<div class="form-group col-md-4">
 				<label for="inputState">State</label>
 				<input type="text" name="requester_state" id="inputState" placeholder="State" class="form-control" required>
 			</div>
 			<div class="form-group col-md-2">
 				<label for="inputZipCode">Zip Code</label>
 				<input type="text" name="requester_zipcode" id="inputZipCode" placeholder="Zip Code" class="form-control" required>
 			</div>
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-6">
 				<label for="inputEmail">Email</label>
 				<input type="email" name="requester_email" id="inputEmail" placeholder="Email" class="form-control" required>
 			</div>
 			<div class="form-group col-md-2">
 				<label for="inputmobile">Mobile</label>
 				<input type="text" name="requester_mobile" id="inputmobile" placeholder="Mobile" class="form-control" required>
 			</div>
 			<div class="form-group col-md-2">
 				<label for="inputdate">Date</label>
 				<input type="date" name="requester_date" id="inputdate" placeholder="date" class="form-control" required>
 			</div>
 		</div>
 		<button type="submit" class="btn btn-danger px-5 mr-3" name="submit_requesterbtn">Submit</button>
 		<button type="Reset" class="btn btn-secondary px-5">Reset</button>
 	</form>
 </div><!-- end service Request form 2nd column-->

 


<?php
include"IncludeCommonCode/footerCommonCode.php";
?>



<?php
 if (isset($success)) {
     echo"$success";
     
     
}
?>





















.
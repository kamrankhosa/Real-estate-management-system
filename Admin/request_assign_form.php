<?php

    if (isset($_REQUEST['close'])){
               
          $sql= "DELETE FROM submitrequest_tb where requester_id={$_REQUEST['id']}";

          if ($db_connect->query($sql) == TRUE){
               echo "<script>
               location.replace('Requests.php');
               </script>";
// header("Location: Requests.php");
          }else{

               echo "unable to delete";


          }
          }

	
		if (isset($_REQUEST['view'])) {
			
		$sql="SELECT * FROM submitrequest_tb where requester_id={$_REQUEST['id']}";

		$result=$db_connect->query($sql);
		
         $data=$result->fetch_assoc();			
	


}


		if (isset($_POST['Assign_Button'])) {
			 $REQUESTER_ID=$_POST['requester_id'];
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
     	    $ASSIGN_TECH=$_POST['Assign_tech'];
              $ASSIGN_AMOUNT=$_POST['number'];
     	    $REQUESTER_DATE=$_POST['requester_date'];

     	   $sql =  "INSERT INTO assignwork_tb set
     	   		requester_id='$REQUESTER_ID',
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
     	    		assign_tech='$ASSIGN_TECH',
                    request_charges='$ASSIGN_AMOUNT',
     	    		assign_date='$REQUESTER_DATE'";

                    
if ($db_connect->query($sql) == TRUE) {

	$success = "<div class='alert alert-success col-sm-6 ml-2 mt-2'>work assign successfully</div>";

	}else{
		$error = "<div class='alert alert-danger col-sm-6 ml-2 mt-2'>unable to assign Work</div>";
	}
}


	


		?>

<div class="col-sm-5 mt-5 jumbotron"><!-- start service Request form 2nd column-->
 	<form action="" method="POST">
 		<h5 class="text-center">Assign Work Order Request</h5>
 		<div class="form-group">
 			<label for="requester_id">Request ID</label>
<input type="text" name="requester_id" id="requester_id"class="form-control"value="<?php if(isset($data['requester_id'])) echo $data['requester_id'];?>">
 		</div>
 		 <div class="form-group">
 			<label for="inputRequestInfo">Request Info</label>
 			<input type="text" name="request_Info" id="inputRequestInfo" class="form-control" value="<?php if(isset($data['requester_info'])) echo $data['requester_info'];?>">
 		</div>
 		<div class="form-group">
 			<label for="inputRequestDescription">Description</label>
 			<input type="text" name="requester_Description" id="inputRequestDescription" class="form-control" value="<?php if(isset($data['requester_desc'])) echo $data['requester_desc'];?>">
 		</div>

 		<div class="form-group">
 			<label for="inputName">Name</label>
 			<input type="text" name="requester_Name" id="inputName" class="form-control" value="<?php if(isset($data['requester_name'])) echo $data['requester_name'];?>">
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-6">
 				<label for="inputAddress">Address</label>
 				<input type="text" name="requester_address1" id="inputaddress1"class="form-control" value="<?php if(isset($data['requester_add1'])) echo $data['requester_add1'];?>">
 			</div>
 			<div class="form-group col-md-6">
 				<label for="inputAddress2">Address 2</label>
 				<input type="text" name="requester_address2" id="inputaddress2" class="form-control" value="<?php if(isset($data['requester_add2'])) echo $data['requester_add2'];?>">
 			</div>
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-6">
 				<label for="inputCity">City</label>
 				<input type="text" name="requester_city" id="inputCity" class="form-control" value="<?php if(isset($data['requester_city'])) echo $data['requester_city'];?>">
 			</div>
 			<div class="form-group col-md-3">
 				<label for="inputState">State</label>
 				<input type="text" name="requester_state" id="inputState"  class="form-control"value="<?php if(isset($data['requester_state'])) echo $data['requester_state'];?>">
 			</div>
 			<div class="form-group col-md-3">
 				<label for="inputZipCode">Zip Code</label>
 				<input type="text" name="requester_zipcode" id="inputZipCode"  class="form-control" value="<?php if(isset($data['requester_zip'])) echo $data['requester_zip'];?>">
 			</div>
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-8">
 				<label for="inputEmail">Email</label>
 				<input type="email" name="requester_email" id="inputEmail"  class="form-control" value="<?php if(isset($data['requester_email'])) echo $data['requester_email'];?>">
 			</div>
 			<div class="form-group col-md-4">
 				<label for="inputmobile">Mobile</label>
 				<input type="text" name="requester_mobile" id="inputmobile" class="form-control"value="<?php if(isset($data['requester_mobile'])) echo $data['requester_mobile'];?>">
 			</div>
 		</div>
 		<div class="form-row">
 			<div class="form-group col-md-3">
 				<label for="Assign_tech">Assign Tech</label>
 				<input type="Assign_tech" name="Assign_tech" id="Assign_tech"  class="form-control" required>
 			</div>
               <div class="form-group col-md-5">
                    <label for="number">Service Charges</label>
                    <input type="number" name="number" id="number"  class="form-control" required>
               </div>
 			<div class="form-group col-md-4">
 				<label for="inputdate">Date</label>
 				<input type="date" name="requester_date" id="inputdate" class="form-control" required>
 			</div>
 		</div>
 		<div class="float-right">
 		<button type="submit" class="btn btn-success" name="Assign_Button">Assign</button>
 		<button type="reset" class="btn btn-secondary" name="reset">Reset</button>
 	</div>

 	<?php if (isset($success)) {
 		echo $success;
 	}
 	?>

 	</form>
<?php
 session_start();
 define('TITLE','Success');
  include"IncludeCommonCode/codeforrecept.php";
  include"../dbconnection.php";

 if (!$_SESSION['r_login_id']) {
 	header("location:RequesterLogin.php");
 }
$sql="SELECT * FROM submitrequest_tb WHERE requester_id={$_SESSION['myid']}";

$result=$db_connect->query($sql);

if($result->num_rows ==1){

		$data=$result->fetch_assoc();
		echo "<div class='ml-5 mt-5'>

		<table class='table' border='0'>
                  	<tbody>
		<tr>
			<th>Requester ID</th>
			<td>".$data['requester_id']."</td>
	    </tr>

	    <tr>
			<th>Requester Email</th>
			<td>".$data['requester_email']."</td>
	    </tr>


        <tr>
			<th>Requester Name</th>
			<td>".$data['requester_name']."</td>
	    </tr>

          <tr>
			<th>Requester Description</th>
			<td>".$data['requester_desc']."</td>
	    </tr>

	    <tr>
			<th>Requester info</th>
			<td>".$data['requester_info']."</td>
	    </tr>

		<tr>
		<td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print'
		onClick='window.print()'></form></td>
		</tr>
</tbody>
	
	</table>
	</div>
	";
}else{

	echo"failed";
}


?>
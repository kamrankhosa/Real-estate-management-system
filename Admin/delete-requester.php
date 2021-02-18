<?php
session_start();
define('TITLE','WORK ORDER');
define('PAGE','Work');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

	
$selected_record=$_GET['r_login_id'];

$query=mysqli_query($db_connect,"DELETE FROM requesterlogin_tb where r_login_id='$selected_record'");

header("refresh:2; url=Requester.php");
?>
<?php include"Include_Code/Admin-footer.php";
?>


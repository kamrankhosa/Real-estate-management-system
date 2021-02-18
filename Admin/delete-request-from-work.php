<?php
session_start();
define('TITLE','WORK ORDER');
define('PAGE','Work');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

	
$selected_record=$_GET['requester_id'];

$query=mysqli_query($db_connect,"DELETE FROM assignwork_tb where requester_id='$selected_record'");

header("location:Work.php");
?>
<?php include"Include_Code/Admin-footer.php";
?>


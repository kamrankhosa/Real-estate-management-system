<?php
session_start();
define('TITLE','WORK ORDER');
define('PAGE','Technician');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

	
$selected_record=$_GET['tech_id'];

$query=mysqli_query($db_connect,"DELETE FROM technician_tb where tech_id='$selected_record'");

header("location:Technician.php");
?>
<?php include"Include_Code/Admin-footer.php";
?>


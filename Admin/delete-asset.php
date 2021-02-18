<?php
session_start();
define('TITLE','Delete Assets');
define('PAGE','Assets');
include"Include_Code/Admin-header.php";
include"../dbconnection.php";

	if (!$_SESSION['a_login_id']) {
 	header("location:AdminLogin.php");
 }
$selected_record=$_GET['asset_id'];

$query=mysqli_query($db_connect,"DELETE FROM product_tb where asset_id='$selected_record'");

header("location:Assets.php");
?>
<?php include"Include_Code/Admin-footer.php";
?>


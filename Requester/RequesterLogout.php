<?php
session_start();
 include"../dbconnection.php";
 define('TITLE','Log Out');
 session_destroy();

 header("location:RequesterLogin.php");



?>
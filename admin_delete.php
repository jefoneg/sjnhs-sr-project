<?php
session_start();
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where user_id ='$id'");
	header('location: admin_dashboard.php');

?>
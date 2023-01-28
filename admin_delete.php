<?php
session_start();
	include('conn.php');
	$id=$_GET['id'];
	$getuserindb = "select * from user where user_id = '$id'";
	$rungetuser = mysqli_query($conn,$getuserindb);
	$fetchgetuser = mysqli_fetch_array($rungetuser);
	$olduserfiledir = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from user where user_id ='$id'");
	unlink($olduserfiledir);
	header('location: admin_dashboard.php');

?>
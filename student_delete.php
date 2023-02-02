<?php
session_start();
	include('conn.php');
	$id=$_GET['id'];
	$getuserindb = "select * from student_tbl where student_id = '$id'";
	$rungetuser = mysqli_query($conn,$getuserindb);
	$fetchgetuser = mysqli_fetch_array($rungetuser);
	$olduserfiledir = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from student_tbl where student_id ='$id'");
	unlink($olduserfiledir);
	header('location: teacher_dashboard_admin.php');

?>
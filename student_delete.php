<?php
session_start();
	include('conn.php');
	$id=$_GET['id'];

	$getuserindb = "select * from he_table where lrn = '$id'";
	$rungetuser = mysqli_query($conn,$getuserindb);
	$fetchgetuser = mysqli_fetch_array($rungetuser);
	$olduserfiledir = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from he_table where lrn ='$id'");
	unlink($olduserfiledir);
	$getuserindb1 = "select * from stem_table where lrn = '$id'";
	$rungetuser1 = mysqli_query($conn,$getuserindb1);
	$fetchgetuser1 = mysqli_fetch_array($rungetuser1);
	$olduserfiledir1 = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from stem_table where lrn ='$id'");
	unlink($olduserfiledir1);
	$getuserindb2 = "select * from ict_table where lrn = '$id'";
	$rungetuser2 = mysqli_query($conn,$getuserindb2);
	$fetchgetuser2 = mysqli_fetch_array($rungetuser2);
	$olduserfiledir2 = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from ict_table where lrn ='$id'");
	unlink($olduserfiledir2);
	$getuserindb2 = "select * from ia_table where lrn = '$id'";
	$rungetuser2 = mysqli_query($conn,$getuserindb2);
	$fetchgetuser2 = mysqli_fetch_array($rungetuser2);
	$olduserfiledir2 = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from ia_table where lrn ='$id'");
	unlink($olduserfiledir2);
	$getuserindb2 = "select * from abm_table where lrn = '$id'";
	$rungetuser2 = mysqli_query($conn,$getuserindb2);
	$fetchgetuser2 = mysqli_fetch_array($rungetuser2);
	$olduserfiledir2 = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from abm_table where lrn ='$id'");
	unlink($olduserfiledir2);
	$getuserindb2 = "select * from humms_table where lrn = '$id'";
	$rungetuser2 = mysqli_query($conn,$getuserindb2);
	$fetchgetuser2 = mysqli_fetch_array($rungetuser2);
	$olduserfiledir2 = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from humms_table where lrn ='$id'");
	unlink($olduserfiledir2);
	header('location: teacher_dashboard_admin.php');
	$getuserindb2 = "select * from student_tbl where lrn = '$id'";
	$rungetuser2 = mysqli_query($conn,$getuserindb2);
	$fetchgetuser2 = mysqli_fetch_array($rungetuser2);
	$olduserfiledir2 = "assets/images/users/".$fetchgetuser['image'];
	mysqli_query($conn,"delete from student_tbl where lrn ='$id'");
	unlink($olduserfiledir2);
	$_SESSION['success'] = 'Sucessfully Deleted!';
	header('location: teacher_dashboard_faculty.php');


?>
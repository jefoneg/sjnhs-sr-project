<?php
session_start();
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from student_tbl where student_id ='$id'");
	header('location: teacher_dashboard_admin.php');

?>
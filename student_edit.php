<?php
session_start();
include('conn.php');
$id=$_GET['id'];

$image = $_POST['image'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];

$qry = "UPDATE student_tbl SET firstname = '$firstname', lastname = '$lastname', section = '$section', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname', image = '$image' WHERE student_id = '$id'";
mysqli_query($conn,$qry);
$_SESSION['prompt'] = "Alert!";
$_SESSION['success'] = "Student Updated!";
header('location: teacher_dashboard_admin.php');
?>
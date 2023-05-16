<?php
session_start();
include('conn.php');
$semester = $_POST['semester'];

$sem_update_qry = mysqli_query($conn,"UPDATE abm_table SET semester = '$semester'");
$sem_update_qry = mysqli_query($conn,"UPDATE ict_table SET semester = '$semester'");
$sem_update_qry = mysqli_query($conn,"UPDATE stem_table SET semester = '$semester'");
$sem_update_qry = mysqli_query($conn,"UPDATE ia_table SET semester = '$semester'");
$sem_update_qry = mysqli_query($conn,"UPDATE he_table SET semester = '$semester'");
$sem_update_qry = mysqli_query($conn,"UPDATE humms_table SET semester = '$semester'");
$sem_update_qry = mysqli_query($conn,"UPDATE student_tbl SET semester = '$semester'");

$_SESSION['prompt'] = "";
$_SESSION['success'] = "Semester status updated successfully!";
header("location: settings_faculty.php");

?>
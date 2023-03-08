<?php
session_start();
include('conn.php');
$semester = $_POST['semester'];

$sem_update_qry = mysqli_query($conn,"UPDATE semester_session SET semester_status = '$semester'");

$_SESSION['success'] = "Semester status updated successfully!";
header("location: settings.php");

?>
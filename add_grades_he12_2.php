<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$mil_mid_1=$_POST['mil_mid_1'];
$mil_mid_2=$_POST['mil_mid_2'];
$mil_mid_ave=$_POST['mil_mid_ave'];
$mil_final_1=$_POST['mil_final_1'];
$mil_final_2=$_POST['mil_final_2'];
$mil_final_ave=$_POST['mil_final_ave'];
$ps_mid_1=$_POST['ps_mid_1'];
$ps_mid_2=$_POST['ps_mid_2'];
$ps_mid_ave=$_POST['ps_mid_ave'];
$ps_final_1=$_POST['ps_final_1'];
$ps_final_2=$_POST['ps_final_2'];
$ps_final_ave=$_POST['ps_final_ave'];
$peh4_mid_1=$_POST['peh4_mid_1'];
$peh4_mid_2=$_POST['peh4_mid_2'];
$peh4_mid_ave=$_POST['peh4_mid_ave'];
$peh4_final_1=$_POST['peh4_final_1'];
$peh4_final_2=$_POST['peh4_final_2'];
$peh4_final_ave=$_POST['peh4_final_ave'];
$immersion_mid_1=$_POST['immersion_mid_1'];
$immersion_mid_2=$_POST['immersion_mid_2'];
$immersion_mid_ave=$_POST['immersion_mid_ave'];
$immersion_final_1=$_POST['immersion_final_1'];
$immersion_final_2=$_POST['immersion_final_2'];
$immersion_final_ave=$_POST['immersion_final_ave'];
$bp_mid_1 = $_POST['bp_mid_1'];
$bp_mid_2 = $_POST['bp_mid_2'];
$bp_mid_ave = $_POST['bp_mid_ave'];
$wrcc_mid_1=$_POST['wrcc_mid_1'];
$wrcc_mid_2=$_POST['wrcc_mid_2'];
$wrcc_mid_ave=$_POST['wrcc_mid_ave'];
$wrcc_final_1=$_POST['wrcc_final_1'];
$wrcc_final_2=$_POST['wrcc_final_2'];
$wrcc_final_ave=$_POST['wrcc_final_ave'];
$average = $_POST['2nd_average_12'];



$sql = "UPDATE he_table SET  mil_mid_1 = '$mil_mid_1', mil_mid_2 = '$mil_mid_2', mil_mid_ave = '$mil_mid_ave', mil_final_1 = '$mil_final_1', mil_final_2 = '$mil_final_2', mil_final_ave = '$mil_final_ave', ps_mid_1 = '$ps_mid_1', ps_mid_2 = '$ps_mid_2', ps_mid_ave = '$ps_mid_ave', ps_final_1 = '$ps_final_1', ps_final_2 = '$ps_final_2', ps_final_ave = '$ps_final_ave', peh4_mid_1 = '$peh4_mid_1', peh4_mid_2 = '$peh4_mid_2', peh4_mid_ave = '$peh4_mid_ave', peh4_final_1 = '$peh4_final_1', peh4_final_2 = '$peh4_final_2', peh4_final_ave = '$peh4_final_ave', immersion_mid_1 = '$immersion_mid_1', immersion_mid_2 = '$immersion_mid_2', immersion_mid_ave = '$immersion_mid_ave', immersion_final_1 = '$immersion_final_1', immersion_final_2 = '$immersion_final_2', immersion_final_ave = '$immersion_final_ave',bp_mid_1 = '$bp_mid_1', bp_mid_2 = '$bp_mid_2', bp_mid_ave = '$bp_mid_ave', wrcc_mid_1 = '$wrcc_mid_1', wrcc_mid_2 = '$wrcc_mid_2', wrcc_mid_ave = '$wrcc_mid_ave', wrcc_final_1 = '$wrcc_final_1', wrcc_final_2 = '$wrcc_final_2', wrcc_final_ave = '$wrcc_final_ave', 2nd_average_12 = '$average' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 

$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades_teacher.php?lrn='. $lrn);
?> 
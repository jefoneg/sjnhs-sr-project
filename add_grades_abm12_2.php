<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$mil_mid_1=$_POST['mil_mid_1'];
$mil_mid_2=$_POST['mil_mid_2'];
$mil_mid_ave=$_POST['mil_mid_ave'];
$ps_mid_1=$_POST['ps_mid_1'];
$ps_mid_2=$_POST['ps_mid_2'];
$ps_mid_ave=$_POST['ps_mid_ave'];
$peh4_mid_1=$_POST['peh4_mid_1'];
$peh4_mid_2=$_POST['peh4_mid_2'];
$peh4_mid_ave=$_POST['peh4_mid_ave'];
$immersion_mid_1=$_POST['immersion_mid_1'];
$immersion_mid_2=$_POST['immersion_mid_2'];
$immersion_mid_ave=$_POST['immersion_mid_ave'];
$business1_mid_1=$_POST['business1_mid_1'];
$business1_mid_2=$_POST['business1_mid_2'];
$business1_mid_ave=$_POST['business1_mid_ave'];
$economics_mid_1=$_POST['economics_mid_1'];
$economics_mid_2=$_POST['economics_mid_2'];
$economics_mid_ave=$_POST['economics_mid_ave'];
$business2_mid_1=$_POST['business2_mid_1'];
$business2_mid_2=$_POST['business2_mid_2'];
$business2_mid_ave=$_POST['business2_mid_ave'];
$wrcc_mid_1=$_POST['wrcc_mid_1'];
$wrcc_mid_2=$_POST['wrcc_mid_2'];
$wrcc_mid_ave=$_POST['wrcc_mid_ave'];
$average = $_POST['2nd_average_12'];
$sql = "UPDATE abm_table SET  mil_mid_1 = '$mil_mid_1', mil_mid_2 = '$mil_mid_2', mil_mid_ave = '$mil_mid_ave',ps_mid_1 = '$ps_mid_1', ps_mid_2 = '$ps_mid_2', ps_mid_ave = '$ps_mid_ave', peh4_mid_1 = '$peh4_mid_1', peh4_mid_2 = '$peh4_mid_2', peh4_mid_ave = '$peh4_mid_ave',immersion_mid_1 = '$immersion_mid_1', immersion_mid_2 = '$immersion_mid_2', immersion_mid_ave = '$immersion_mid_ave',business1_mid_1 = '$business1_mid_1', business1_mid_2 = '$business1_mid_2', business1_mid_ave = '$business1_mid_ave', economics_mid_1 = '$economics_mid_1', economics_mid_2 = '$economics_mid_2', economics_mid_ave = '$economics_mid_ave', business2_mid_1 = '$business2_mid_1', business2_mid_2 = '$business2_mid_2', business2_mid_ave = '$business2_mid_ave',wrcc_mid_1 = '$wrcc_mid_1', wrcc_mid_2 = '$wrcc_mid_2', wrcc_mid_ave = '$wrcc_mid_ave', 2nd_average_12 = '$average' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 

$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades_teacher.php?lrn='. $lrn);
?> 
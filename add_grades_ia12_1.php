<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$iphp_mid_1=$_POST['iphp_mid_1'];
$iphp_mid_2=$_POST['iphp_mid_2'];
$iphp_mid_ave=$_POST['iphp_mid_ave'];
$iphp_final_1=$_POST['iphp_final_1'];
$iphp_final_2=$_POST['iphp_final_2'];
$iphp_final_ave=$_POST['iphp_final_ave'];
$ucsp_mid_1=$_POST['ucsp_mid_1'];
$ucsp_mid_2=$_POST['ucsp_mid_2'];
$ucsp_mid_ave=$_POST['ucsp_mid_ave'];
$ucsp_final_1=$_POST['ucsp_final_1'];
$ucsp_final_2=$_POST['ucsp_final_2'];
$ucsp_final_ave=$_POST['ucsp_final_ave'];
$peh3_mid_1=$_POST['peh3_mid_1'];
$peh3_mid_2=$_POST['peh3_mid_2'];
$peh3_mid_ave=$_POST['peh3_mid_ave'];
$peh3_final_1=$_POST['peh3_final_1'];
$peh3_final_2=$_POST['peh3_final_2'];
$peh3_final_ave=$_POST['peh3_final_ave'];
$eapp_mid_1=$_POST['eapp_mid_1'];
$eapp_mid_2=$_POST['eapp_mid_2'];
$eapp_mid_ave=$_POST['eapp_mid_ave'];
$eapp_final_1=$_POST['eapp_final_1'];
$eapp_final_2=$_POST['eapp_final_2'];
$eapp_final_ave=$_POST['eapp_final_ave'];
$practical2_mid_1=$_POST['practical2_mid_1'];
$practical2_mid_2=$_POST['practical2_mid_2'];
$practical2_mid_ave=$_POST['practical2_mid_ave'];
$practical2_final_1=$_POST['practical2_final_1'];
$practical2_final_2=$_POST['practical2_final_2'];
$practical2_final_ave=$_POST['practical2_final_ave'];
$fpl_mid_1=$_POST['fpl_mid_1'];
$fpl_mid_2=$_POST['fpl_mid_2'];
$fpl_mid_ave=$_POST['fpl_mid_ave'];
$fpl_final_1=$_POST['fpl_final_1'];
$fpl_final_2=$_POST['fpl_final_2'];
$fpl_final_ave=$_POST['fpl_final_ave'];
$eim3_mid_1=$_POST['eim3_mid_1'];
$eim3_mid_2=$_POST['eim3_mid_2'];
$eim3_mid_ave=$_POST['eim3_mid_ave'];
$eim3_final_1=$_POST['eim3_final_1'];
$eim3_final_2=$_POST['eim3_final_2'];
$eim3_final_ave=$_POST['eim3_final_ave'];
$average = $_POST['1st_average_12'];



$sql = "UPDATE ia_table SET  iphp_mid_1 = '$iphp_mid_1', iphp_mid_2 = '$iphp_mid_2', iphp_mid_ave = '$iphp_mid_ave', iphp_final_1 = '$iphp_final_1', iphp_final_2 = '$iphp_final_2', iphp_final_ave = '$iphp_final_ave', ucsp_mid_1 = '$ucsp_mid_1', ucsp_mid_2 = '$ucsp_mid_2', ucsp_mid_ave = '$ucsp_mid_ave', ucsp_final_1 = '$ucsp_final_1', ucsp_final_2 = '$ucsp_final_2', ucsp_final_ave = '$ucsp_final_ave', peh3_mid_1 = '$peh3_mid_1', peh3_mid_2 = '$peh3_mid_2', peh3_mid_ave = '$peh3_mid_ave', peh3_final_1 = '$peh3_final_1', peh3_final_2 = '$peh3_final_2', peh3_final_ave = '$peh3_final_ave', eapp_mid_1 = '$eapp_mid_1', eapp_mid_2 = '$eapp_mid_2', eapp_mid_ave = '$eapp_mid_ave', eapp_final_1 = '$eapp_final_1', eapp_final_2 = '$eapp_final_2', eapp_final_ave = '$eapp_final_ave', practical2_mid_1 = '$practical2_mid_1', practical2_mid_2 = '$practical2_mid_2', practical2_mid_ave = '$practical2_mid_ave', practical2_final_1 = '$practical2_final_1', practical2_final_2 = '$practical2_final_2', practical2_final_ave = '$practical2_final_ave', fpl_mid_1 = '$fpl_mid_1', fpl_mid_2 = '$fpl_mid_2', fpl_mid_ave = '$fpl_mid_ave', fpl_final_1 = '$fpl_final_1', fpl_final_2 = '$fpl_final_2', fpl_final_ave = '$fpl_final_ave', eim3_mid_1 = '$eim3_mid_1', eim3_mid_2 = '$eim3_mid_2', eim3_mid_ave = '$eim3_mid_ave', eim3_final_1 = '$eim3_final_1', eim3_final_2 = '$eim3_final_2', eim3_final_ave = '$eim3_final_ave', 1st_average_12 = '$average' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 

$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades_teacher.php?lrn='. $lrn);
?> 
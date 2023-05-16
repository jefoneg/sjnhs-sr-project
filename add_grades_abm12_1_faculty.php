<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$iphp_mid_1=$_POST['iphp_mid_1'];
$iphp_mid_2=$_POST['iphp_mid_2'];
$iphp_mid_ave=$_POST['iphp_mid_ave'];
$ucsp_mid_1=$_POST['ucsp_mid_1'];
$ucsp_mid_2=$_POST['ucsp_mid_2'];
$ucsp_mid_ave=$_POST['ucsp_mid_ave'];
$peh3_mid_1=$_POST['peh3_mid_1'];
$peh3_mid_2=$_POST['peh3_mid_2'];
$peh3_mid_ave=$_POST['peh3_mid_ave'];
$eapp_mid_1=$_POST['eapp_mid_1'];
$eapp_mid_2=$_POST['eapp_mid_2'];
$eapp_mid_ave=$_POST['eapp_mid_ave'];
$practical2_mid_1=$_POST['practical2_mid_1'];
$practical2_mid_2=$_POST['practical2_mid_2'];
$practical2_mid_ave=$_POST['practical2_mid_ave'];
$fpl_mid_1=$_POST['fpl_mid_1'];
$fpl_mid_2=$_POST['fpl_mid_2'];
$fpl_mid_ave=$_POST['fpl_mid_ave'];
$fundamentals1_mid_1=$_POST['fundamentals1_mid_1'];
$fundamentals1_mid_2=$_POST['fundamentals1_mid_2'];
$fundamentals1_mid_ave=$_POST['fundamentals1_mid_ave'];
$business_mid_1=$_POST['business_mid_1'];
$business_mid_2=$_POST['business_mid_2'];
$business_mid_ave=$_POST['business_mid_ave'];
$average = $_POST['1st_average_12'];

$sql = "UPDATE abm_table SET  iphp_mid_1 = '$iphp_mid_1', iphp_mid_2 = '$iphp_mid_2', iphp_mid_ave = '$iphp_mid_ave',ucsp_mid_1 = '$ucsp_mid_1', ucsp_mid_2 = '$ucsp_mid_2', ucsp_mid_ave = '$ucsp_mid_ave',  peh3_mid_1 = '$peh3_mid_1', peh3_mid_2 = '$peh3_mid_2', peh3_mid_ave = '$peh3_mid_ave', eapp_mid_1 = '$eapp_mid_1', eapp_mid_2 = '$eapp_mid_2', eapp_mid_ave = '$eapp_mid_ave', practical2_mid_1 = '$practical2_mid_1', practical2_mid_2 = '$practical2_mid_2', practical2_mid_ave = '$practical2_mid_ave',fpl_mid_1 = '$fpl_mid_1', fpl_mid_2 = '$fpl_mid_2', fpl_mid_ave = '$fpl_mid_ave',fundamentals1_mid_1 = '$fundamentals1_mid_1', fundamentals1_mid_2 = '$fundamentals1_mid_2', fundamentals1_mid_ave = '$fundamentals1_mid_ave',business_mid_1 = '$business_mid_1', business_mid_2 = '$business_mid_2', business_mid_ave = '$business_mid_ave', 1st_average_12 = '$average' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 

$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades.php?lrn='. $lrn);
?> 
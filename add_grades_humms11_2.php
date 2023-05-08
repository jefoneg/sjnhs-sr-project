<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$reading_mid_1 = $_POST['reading_mid_1'];
$reading_mid_2 = $_POST['reading_mid_2'];
$reading_mid_ave = $_POST['reading_mid_ave'];
$reading_final_1 = $_POST['reading_final_1'];
$reading_final_2 = $_POST['reading_final_2'];
$reading_final_ave = $_POST['reading_final_ave'];
$pptp_mid_1 = $_POST['pptp_mid_1'];
$pptp_mid_2 = $_POST['pptp_mid_2'];
$pptp_mid_ave = $_POST['pptp_mid_ave'];
$pptp_final_1 = $_POST['pptp_final_1'];
$pptp_final_2 = $_POST['pptp_final_2'];
$pptp_final_ave = $_POST['pptp_final_ave'];
$statistic_mid_1 = $_POST['statistic_mid_1'];
$statistic_mid_2 = $_POST['statistic_mid_2'];
$statistic_mid_ave = $_POST['statistic_mid_ave'];
$statistic_final_1 = $_POST['statistic_final_1'];
$statistic_final_2 = $_POST['statistic_final_2'];
$statistic_final_ave = $_POST['statistic_final_ave'];
$contemporary_mid_1 = $_POST['contemporary_mid_1'];
$contemporary_mid_2 = $_POST['contemporary_mid_2'];
$contemporary_mid_ave = $_POST['contemporary_mid_ave'];
$contemporary_final_1 = $_POST['contemporary_final_1'];
$contemporary_final_2 = $_POST['contemporary_final_2'];
$contemporary_final_ave = $_POST['contemporary_final_ave'];
$peh2_mid_1 = $_POST['peh2_mid_1'];
$peh2_mid_2 = $_POST['peh2_mid_2'];
$peh2_mid_ave = $_POST['peh2_mid_ave'];
$peh2_final_1 = $_POST['peh2_final_1'];
$peh2_final_2 = $_POST['peh2_final_2'];
$peh2_final_ave = $_POST['peh2_final_ave'];
$practical_mid_1 = $_POST['practical_mid_1'];
$practical_mid_2 = $_POST['practical_mid_2'];
$practical_mid_ave = $_POST['practical_mid_ave'];
$practical_final_1 = $_POST['practical_final_1'];
$practical_final_2 = $_POST['practical_final_2'];
$practical_final_ave = $_POST['practical_final_ave'];
$entrep_mid_1 = $_POST['entrep_mid_1'];
$entrep_mid_2 = $_POST['entrep_mid_2'];
$entrep_mid_ave = $_POST['entrep_mid_ave'];
$entrep_final_1 = $_POST['entrep_final_1'];
$entrep_final_2 = $_POST['entrep_final_2'];
$entrep_final_ave = $_POST['entrep_final_ave'];
$humanities_mid_1 = $_POST['humanities_mid_1'];
$humanities_mid_2 = $_POST['humanities_mid_2'];
$humanities_mid_ave = $_POST['humanities_mid_ave'];
$humanities_final_1 = $_POST['humanities_final_1'];
$humanities_final_2 = $_POST['humanities_final_2'];
$humanities_final_ave = $_POST['humanities_final_ave'];
$social_mid_1 = $_POST['social_mid_1'];
$social_mid_2 = $_POST['social_mid_2'];
$social_mid_ave = $_POST['social_mid_ave'];
$social_final_1 = $_POST['social_final_1'];
$social_final_2 = $_POST['social_final_2'];
$social_final_ave = $_POST['social_final_ave'];




$sql = "UPDATE humms_table SET reading_mid_1 = '$reading_mid_1', reading_mid_2 = '$reading_mid_2', reading_mid_ave = '$reading_mid_ave', reading_final_1 = '$reading_final_1', reading_final_2 = '$reading_final_2', reading_final_ave = '$reading_final_ave',pptp_mid_1 = '$pptp_mid_1', pptp_mid_2 = '$pptp_mid_2', pptp_mid_ave = '$pptp_mid_ave', pptp_final_1 = '$pptp_final_1', pptp_final_2 = '$pptp_final_2', pptp_final_ave = '$pptp_final_ave',statistic_mid_1 = '$statistic_mid_1', statistic_mid_2 = '$statistic_mid_2', statistic_mid_ave = '$statistic_mid_ave', statistic_final_1 = '$statistic_final_1', statistic_final_2 = '$statistic_final_2', statistic_final_ave = '$statistic_final_ave',contemporary_mid_1 = '$contemporary_mid_1', contemporary_mid_2 = '$contemporary_mid_2', contemporary_mid_ave = '$contemporary_mid_ave', contemporary_final_1 = '$contemporary_final_1', contemporary_final_2 = '$contemporary_final_2', contemporary_final_ave = '$contemporary_final_ave',peh2_mid_1 = '$peh2_mid_1', peh2_mid_2 = '$peh2_mid_2', peh2_mid_ave = '$peh2_mid_ave', peh2_final_1 = '$peh2_final_1', peh2_final_2 = '$peh2_final_2', peh2_final_ave = '$peh2_final_ave',practical_mid_1 = '$practical_mid_1', practical_mid_2 = '$practical_mid_2', practical_mid_ave = '$practical_mid_ave', practical_final_1 = '$practical_final_1', practical_final_2 = '$practical_final_2', practical_final_ave = '$practical_final_ave',entrep_mid_1 = '$entrep_mid_1', entrep_mid_2 = '$entrep_mid_2', entrep_mid_ave = '$entrep_mid_ave', entrep_final_1 = '$entrep_final_1', entrep_final_2 = '$entrep_final_2', entrep_final_ave = '$entrep_final_ave',humanities_mid_1 = '$humanities_mid_1', humanities_mid_2 = '$humanities_mid_2', humanities_mid_ave = '$humanities_mid_ave', humanities_final_1 = '$humanities_final_1', humanities_final_2 = '$humanities_final_2', humanities_final_ave = '$humanities_final_ave',social_mid_1 = '$social_mid_1', social_mid_2 = '$social_mid_2', social_mid_ave = '$social_mid_ave', social_final_1 = '$social_final_1', social_final_2 = '$social_final_2', social_final_ave = '$social_final_ave' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 
$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades_teacher.php?lrn='. $lrn);
?>
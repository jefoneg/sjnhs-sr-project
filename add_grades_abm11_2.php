<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$reading_mid_1 = $_POST['reading_mid_1'];
$reading_mid_2 = $_POST['reading_mid_2'];
$reading_mid_ave = $_POST['reading_mid_ave'];
$pptp_mid_1 = $_POST['pptp_mid_1'];
$pptp_mid_2 = $_POST['pptp_mid_2'];
$pptp_mid_ave = $_POST['pptp_mid_ave'];
$statistic_mid_1 = $_POST['statistic_mid_1'];
$statistic_mid_2 = $_POST['statistic_mid_2'];
$statistic_mid_ave = $_POST['statistic_mid_ave'];
$contemporary_mid_1 = $_POST['contemporary_mid_1'];
$contemporary_mid_2 = $_POST['contemporary_mid_2'];
$contemporary_mid_ave = $_POST['contemporary_mid_ave'];
$peh2_mid_1 = $_POST['peh2_mid_1'];
$peh2_mid_2 = $_POST['peh2_mid_2'];
$peh2_mid_ave = $_POST['peh2_mid_ave'];
$practical_mid_1 = $_POST['practical_mid_1'];
$practical_mid_2 = $_POST['practical_mid_2'];
$practical_mid_ave = $_POST['practical_mid_ave'];
$entrep_mid_1 = $_POST['entrep_mid_1'];
$entrep_mid_2 = $_POST['entrep_mid_2'];
$entrep_mid_ave = $_POST['entrep_mid_ave'];
$fundamentals_mid_1 = $_POST['fundamentals_mid_1'];
$fundamentals_mid_2 = $_POST['fundamentals_mid_2'];
$fundamentals_mid_ave = $_POST['fundamentals_mid_ave'];
$principles_mid_1 = $_POST['principles_mid_1'];
$principles_mid_2 = $_POST['principles_mid_2'];
$principles_mid_ave = $_POST['principles_mid_ave'];
$average = $_POST['2nd_average'];




$sql = "UPDATE abm_table SET reading_mid_1 = '$reading_mid_1', reading_mid_2 = '$reading_mid_2', reading_mid_ave = '$reading_mid_ave',pptp_mid_1 = '$pptp_mid_1', pptp_mid_2 = '$pptp_mid_2', pptp_mid_ave = '$pptp_mid_ave',statistic_mid_1 = '$statistic_mid_1', statistic_mid_2 = '$statistic_mid_2', statistic_mid_ave = '$statistic_mid_ave',contemporary_mid_1 = '$contemporary_mid_1', contemporary_mid_2 = '$contemporary_mid_2', contemporary_mid_ave = '$contemporary_mid_ave',peh2_mid_1 = '$peh2_mid_1', peh2_mid_2 = '$peh2_mid_2', peh2_mid_ave = '$peh2_mid_ave',practical_mid_1 = '$practical_mid_1', practical_mid_2 = '$practical_mid_2', practical_mid_ave = '$practical_mid_ave',entrep_mid_1 = '$entrep_mid_1', entrep_mid_2 = '$entrep_mid_2', entrep_mid_ave = '$entrep_mid_ave',fundamentals_mid_1 = '$fundamentals_mid_1', fundamentals_mid_2 = '$fundamentals_mid_2', fundamentals_mid_ave = '$fundamentals_mid_ave',principles_mid_1 = '$principles_mid_1', principles_mid_2 = '$principles_mid_2', principles_mid_ave = '$principles_mid_ave', 2nd_average = '$average' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 
$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades_teacher.php?lrn='. $lrn);
?>
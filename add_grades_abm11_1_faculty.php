<?php
session_start();
ob_start();
include ('conn.php');
$lrn=$_GET['lrn'];

$oral_communication_mid_1 = $_POST['oral_communication_mid_1'];
$oral_communication_mid_2 = $_POST['oral_communication_mid_2'];
$oral_communication_mid_ave =$_POST['oral_communication_mid_ave'];
$kpwkp_mid_1 = $_POST['kpwkp_mid_1'];
$kpwkp_mid_2 = $_POST['kpwkp_mid_2'];
$kpwkp_mid_ave = $_POST['kpwkp_mid_ave'];
$genmath_mid_1 = $_POST['genmath_mid_1'];
$genmath_mid_2 = $_POST['genmath_mid_2'];
$genmath_mid_ave = $_POST['genmath_mid_ave'];
$personal_mid_development_1 = $_POST['personal_mid_development_1'];
$personal_mid_development_2 = $_POST['personal_mid_development_2'];
$personal_mid_development_ave = $_POST['personal_mid_development_ave'];
$els_mid_1 = $_POST['els_mid_1'];
$els_mid_2 = $_POST['els_mid_2'];
$els_mid_ave = $_POST['els_mid_ave'];
$peh_mid_1 = $_POST['peh_mid_1'];
$peh_mid_2 = $_POST['peh_mid_2'];
$peh_mid_ave = $_POST['peh_mid_ave'];
$empowerment_tech_mid_1 = $_POST['empowerment_tech_mid_1'];
$empowerment_tech_mid_2 = $_POST['empowerment_tech_mid_2'];
$empowerment_tech_mid_ave = $_POST['empowerment_tech_mid_ave'];
$organization_mid_1 = $_POST['organization_mid_1'];
$organization_mid_2 = $_POST['organization_mid_2'];
$organization_mid_ave = $_POST['organization_mid_ave'];
$century_literature_mid_1 = $_POST['century_literature_mid_1'];
$century_literature_mid_2 = $_POST['century_literature_mid_2'];
$century_literature_mid_ave = $_POST['century_literature_mid_ave'];
$average = $_POST['1st_average'];

$sql = "UPDATE abm_table SET oral_communication_mid_1 = '$oral_communication_mid_1', oral_communication_mid_2 = '$oral_communication_mid_2', oral_communication_mid_ave = '$oral_communication_mid_ave', kpwkp_mid_1 = '$kpwkp_mid_1', kpwkp_mid_2 = '$kpwkp_mid_2', kpwkp_mid_ave = '$kpwkp_mid_ave', genmath_mid_1 = '$genmath_mid_1', genmath_mid_2 = '$genmath_mid_2', genmath_mid_ave = '$genmath_mid_ave', personal_mid_development_1 = '$personal_mid_development_1', personal_mid_development_2 = '$personal_mid_development_2', personal_mid_development_ave = '$personal_mid_development_ave', els_mid_1 = '$els_mid_1', els_mid_2 = '$els_mid_2', els_mid_ave = '$els_mid_ave', peh_mid_1 = '$peh_mid_1', peh_mid_2 = '$peh_mid_2', peh_mid_ave = '$peh_mid_ave', empowerment_tech_mid_1 = '$empowerment_tech_mid_1', empowerment_tech_mid_2 = '$empowerment_tech_mid_2', empowerment_tech_mid_ave = '$empowerment_tech_mid_ave',organization_mid_1 = '$organization_mid_1', organization_mid_2 = '$organization_mid_2', organization_mid_ave = '$organization_mid_ave', century_literature_mid_1 = '$century_literature_mid_1', century_literature_mid_2 = '$century_literature_mid_2', century_literature_mid_ave = '$century_literature_mid_ave', 1st_average = '$average' WHERE lrn = '$lrn'";
mysqli_query($conn,$sql); 

$_SESSION['success'] = "Successfully Added";
header('location: student_add_grades.php?lrn='. $lrn);
?>
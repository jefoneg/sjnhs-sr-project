<?php
include ('conn.php');
$id=$_GET['id'];

$oralcom_mid1 = $_POST['oral_communication_mid_1'];
$oralcom_mid2 = $_POST['oral_communication_mid_2'];
$oralcom_mid_ave =$_POST['oral_communication_mid_ave'];
$oralcom_final1 = $_POST['oral_communication_final_1'];
$oralcom_final2 = $_POST['oral_communication_final_2'];
$oralcom_final_ave = $_POST['oral_communication_final_ave'];
$kpwkp_mid1 = $_POST['kpwkp_mid_1'];
$kpwkp_mid2 = $_POST['kpwkp_mid_2'];
$kpwk_mid_ave = $_POST['kpwkp_mid_ave'];
$kpwkp_final1 = $_POST['kpwkp_final_1'];
$kpwkp_final2 = $_POST['kpwkp_final_2'];
$kpwk_final_ave = $_POST['kpwkp_final_ave'];
$genmath_mid1 = $_POST['genmath_mid_1'];
$genmath_mid2 = $_POST['genmath_mid_2'];
$genmath_mid_ave = $_POST['genmath_mid_ave'];
$genmath_final1 = $_POST['genmath_final_1'];
$genmath_final2 = $_POST['genmath_final_2'];
$genmath_final_ave = $_POST['genmath_final_ave'];
$personal_dev_mid1 = $_POST['personal_mid_development_1'];
$personal_dev_mid2 = $_POST['personal_mid_development_2'];
$personal_dev_mid_ave = $_POST['personal_mid_development_ave'];
$personal_dev_final1 = $_POST['personal_final_development_1'];
$personal_dev_final2 = $_POST['personal_final_development_2'];
$personal_dev_final_ave = $_POST['personal_final_development_ave'];
$els_mid1 = $_POST['els_mid_1'];
$els_mid2 = $_POST['els_mid_2'];
$els_mid_ave = $_POST['els_mid_ave'];
$els_final1 = $_POST['els_final_1'];
$els_final2 = $_POST['els_final_2'];
$els_final_ave = $_POST['els_final_ave'];
$peh_mid1 = $_POST['peh_mid_1'];
$peh_mid2 = $_POST['peh_mid_2'];
$peh_mid_ave = $_POST['peh_mid_ave'];
$peh_final1 = $_POST['peh_final_1'];
$peh_final2 = $_POST['peh_final_2'];
$peh_final_ave = $_POST['peh_final_ave'];
$empowerment_mid1 = $_POST['empowerment_tech_mid_1'];
$empowerment_mid2 = $_POST['empowerment_tech_mid_2'];
$empowerment_mid_ave = $_POST['empowerment_tech_mid_ave'];
$empowerment_final1 = $_POST['empowerment_tech_final_1'];
$empowerment_final2 = $_POST['empowerment_tech_final_2'];
$empowerment_final_ave = $_POST['empowerment_tech_final_ave'];
$css_mid1 = $_POST['css_mid_1'];
$css_mid2 = $_POST['css_mid_2'];
$css_mid_ave = $_POST['css_mid_ave'];
$css_final1 = $_POST['css_final_1'];
$css_final2 = $_POST['css_final_2'];
$css_final_ave = $_POST['css_final_ave'];


$sql = "INSERT INTO student_tbl (oral_communication_mid_1,oral_communication_mid_2,oral_communication_mid_ave,oral_communication_final_1,oral_communication_final_2,oral_communication_final_ave,kpwkp_mid_1,kpwkp_mid_2,kpwkp_mid_ave,kpwkp_final_1,kpwkp_final_2,kpwkp_final_ave,genmath_mid_1,genmath_mid_2,genmath_mid_ave,genmath_final_1,genmath_final_2,genmath_final_ave,personal_mid_development_1,personal_mid_development_2,personal_mid_development_ave,personal_final_development_1,personal_final_development_2personal_final_development_ave,els_mid_1,els_mid_2,els_mid_ave,els_final_1,els_final_2,els_final_ave,peh_mid_1,peh_mid_2,peh_mid_ave,peh_final_1,peh_final_2,peh_final_ave,empowerment_tech_mid_1,empowerment_tech_mid_2,empowerment_tech_mid_ave,empowerment_tech_final_1,empowerment_tech_final_2,empowerment_tech_final_ave,css_mid_1,css_mid_2,css_mid_ave,css_final_1,css_final_2,css_final_ave)
        VALUES ('$oralcom_mid1','$oralcom_mid2','$oralcom_mid_ave','$oralcom_final1','$oralcom_final2','$oralcom_final_ave','$kpwkp_mid1','$kpwkp_mid2,'$kpwkp_mid_ave','$kpwkp_final1','$kpwkp_final2,'$kpwkp_final_ave','$genmath_mid1','$genmath_mid2','$genmath_mid_ave','$genmath_final1','$genmath_final2','$genmath_final_ave','$personal_dev_mid1','$personal_dev_mid2','$personal_dev_mid_ave','$personal_dev_final1','$personal_dev_final2','$personal_dev_final_ave','$els_mid1','$els_mid2','$els_mid_ave','$els_final1','$els_final2','$els_final_ave','$peh_mid1','$peh_mid2','$peh_mid_ave','$peh_final1','$peh_final2','$peh_final_ave','$empowerment_mid1','$empowerment_mid2','$empowerment_mid_ave','$empowerment_final1','$empowerment_final2','$empowerment_final_ave','$css_mid1','$css_mid2','$css_mid_ave','$css_final1','$css_final2','$css_final_ave',)";
mysqli_query($conn,$sql);

header('location: student_add_grades.php?id='. $id);
?>
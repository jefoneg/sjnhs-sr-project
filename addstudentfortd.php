<?php
session_start();
ob_start();
include('conn.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];
$userfile = $_FILES['userfile']['name'];
$oralcom_mid1 = $_POST['oral_communication_mid_1'];
$oralcom_mid2 = $_POST['oral_communication_mid_2'];
$oralcom_mid_ave =$_POST['oral_communication_mid_ave'];
$oralcom_final1 = $_POST['oral_communication_final_1'];
$oralcom_final2 = $_POST['oral_communication_final_2'];
$oralcom_final_ave = $_POST['oral_communication_final_ave'];
$kpwkp_mid1 = $_POST['kpwkp_mid_1'];
$kpwkp_mid2 = $_POST['kpwkp_mid_2'];
$kpwkp_mid_ave = $_POST['kpwkp_mid_ave'];
$kpwkp_final1 = $_POST['kpwkp_final_1'];
$kpwkp_final2 = $_POST['kpwkp_final_2'];
$kpwkp_final_ave = $_POST['kpwkp_final_ave'];
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
$organization_management_mid1 = $_POST['organization_management_mid_1'];
$organization_management_mid2 = $_POST['organization_management_mid_2'];
$organization_management_mid_ave = $_POST['organization_management_mid_ave'];
$organization_management_final1 = $_POST['organization_management_final_1'];
$organization_management_final2 = $_POST['organization_management_final_2'];
$organization_management_final_ave = $_POST['organization_management_final_ave'];
$iwrb_mid1 = $_POST['iwrb_mid_1'];
$iwrb_mid2 = $_POST['iwrb_mid_2'];
$iwrb_mid_ave = $_POST['iwrb_mid_ave'];
$iwrb_final1 = $_POST['iwrb_final_1'];
$iwrb_final2 = $_POST['iwrb_final_2'];
$iwrb_final_ave = $_POST['iwrb_final_ave'];
$pre_cal_mid1 = $_POST['pre_cal_mid_1'];
$pre_cal_mid2 = $_POST['pre_cal_mid_2'];
$pre_cal_mid_ave = $_POST['pre_cal_mid_ave'];
$pre_cal_final1 = $_POST['pre_cal_final_1'];
$pre_cal_final2 = $_POST['pre_cal_final_2'];
$pre_cal_final_ave = $_POST['pre_cal_final_ave'];
$cookery_mid1 = $_POST['cookery_mid_1'];
$cookery_mid2 = $_POST['cookery_mid_2'];
$cookery_mid_ave = $_POST['cookery_mid_ave'];
$cookery_final1 = $_POST['cookery_final_1'];
$cookery_final2 = $_POST['cookery_final_2'];
$cookery_final_ave = $_POST['cookery_final_ave'];
$eim_mid1 = $_POST['eim_mid_1'];
$eim_mid2 = $_POST['eim_mid_2'];
$eim_mid_ave = $_POST['eim_mid_ave'];
$eim_final1 = $_POST['eim_final_1'];
$eim_final2 = $_POST['eim_final_2'];
$eim_final_ave = $_POST['eim_final_ave'];
$century_literature_mid_1 = $_POST['century_literature_mid_1'];
$century_literature_mid_2 = $_POST['century_literature_mid_2'];
$century_literature_mid_ave = $_POST['century_literature_mid_ave'];
$century_literature_final_1 = $_POST['century_literature_final_1'];
$century_literature_final_2 = $_POST['century_literature_final_2'];
$century_literature_final_ave = $_POST['century_literature_final_ave'];
$reading_writing_mid_1 = $_POST['reading_writing_mid_1'];
$reading_writing_mid_2 = $_POST['reading_writing_mid_2'];
$reading_writing_mid_ave = $_POST['reading_writing_mid_ave'];
$reading_writing_final_1 = $_POST['reading_writing_final_1'];
$reading_writing_final_2 = $_POST['reading_writing_final_2'];
$reading_writing_final_ave = $_POST['reading_writing_final_ave'];
$ppttp_mid_1 = $_POST['ppttp_mid_1'];
$ppttp_mid_2 = $_POST['ppttp_mid_2'];
$ppttp_mid_ave = $_POST['ppttp_mid_ave'];
$ppttp_final_1 = $_POST['ppttp_final_1'];
$ppttp_final_2 = $_POST['ppttp_final_2'];
$ppttp_final_ave = $_POST['ppttp_final_ave'];
$ppttp_final_ave = $_POST['ppttp_final_ave'];
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
$pr1_mid_1 = $_POST['pr1_mid_1'];
$pr1_mid_2 = $_POST['pr1_mid_2'];
$pr1_mid_ave = $_POST['pr1_mid_ave'];
$pr1_final_1 = $_POST['pr1_final_1'];
$pr1_final_2 = $_POST['pr1_final_2'];
$pr1_final_ave = $_POST['pr1_final_ave'];
$entrep_mid_1 = $_POST['entrep_mid_1'];
$entrep_mid_2 = $_POST['entrep_mid_2'];
$entrep_mid_ave = $_POST['entrep_mid_ave'];
$entrep_final_1 = $_POST['entrep_final_1'];
$entrep_final_2 = $_POST['entrep_final_2'];
$entrep_final_ave = $_POST['entrep_final_ave'];
$fundamentals_abm1_mid_1 = $_POST['fundamentals_abm1_mid_1'];
$fundamentals_abm1_mid_2 = $_POST['fundamentals_abm1_mid_2'];
$fundamentals_abm1_mid_ave = $_POST['fundamentals_abm1_mid_ave'];
$fundamentals_abm1_final_1 = $_POST['fundamentals_abm1_final_1'];
$fundamentals_abm1_final_2 = $_POST['fundamentals_abm1_final_2'];
$fundamentals_abm1_final_ave = $_POST['fundamentals_abm1_final_ave'];
$humanities1_mid_1 = $_POST['humanities1_mid_1'];
$humanities1_mid_2 = $_POST['humanities1_mid_2'];
$humanities1_mid_ave = $_POST['humanities1_mid_ave'];
$humanities1_final_1 = $_POST['humanities1_final_1'];
$humanities1_final_2 = $_POST['humanities1_final_2'];
$humanities1_final_ave = $_POST['humanities1_final_ave'];
$basiccal_mid_1 = $_POST['basiccal_mid_1'];
$basiccal_mid_2 = $_POST['basiccal_mid_2'];
$basiccal_mid_ave = $_POST['basiccal_mid_ave'];
$basiccal_final_1 = $_POST['basiccal_final_1'];
$basiccal_final_2 = $_POST['basiccal_final_2'];
$basiccal_final_ave = $_POST['basiccal_final_ave'];
$cookery2_mid_1 = $_POST['cookery2_mid_1'];
$cookery2_mid_2 = $_POST['cookery2_mid_2'];
$cookery2_mid_ave = $_POST['cookery2_mid_ave'];
$cookery2_final_1 = $_POST['cookery2_final_1'];
$cookery2_final_2 = $_POST['cookery2_final_2'];
$cookery2_final_ave = $_POST['cookery2_final_ave'];
$eim2_mid_1 = $_POST['eim2_mid_1'];
$eim2_mid_2 = $_POST['eim2_mid_2'];
$eim2_mid_ave = $_POST['eim2_mid_ave'];
$eim2_final_1 = $_POST['eim2_final_1'];
$eim2_final_2 = $_POST['eim2_final_2'];
$eim2_final_ave = $_POST['eim2_final_ave'];
$css2_mid_1 = $_POST['css2_mid_1'];
$css2_mid_2 = $_POST['css2_mid_2'];
$css2_mid_ave = $_POST['css2_mid_ave'];
$css2_final_1 = $_POST['css2_final_1'];
$css2_final_2 = $_POST['css2_final_2'];
$css2_final_ave = $_POST['css2_final_ave'];
$pm_mid_1 = $_POST['pm_mid_1'];
$pm_mid_2 = $_POST['pm_mid_2'];
$pm_mid_ave = $_POST['pm_mid_ave'];
$pm_final_1 = $_POST['pm_final_1'];
$pm_final_2 = $_POST['pm_final_2'];
$pm_final_ave = $_POST['pm_final_ave'];
$ss_mid_1 = $_POST['ss_mid_1'];
$ss_mid_2 = $_POST['ss_mid_2'];
$ss_mid_ave = $_POST['ss_mid_ave'];
$ss_final_1 = $_POST['ss_final_1'];
$ss_final_2 = $_POST['ss_final_2'];
$ss_final_ave = $_POST['ss_final_ave'];
$genbio1_mid_1 = $_POST['genbio1_mid_1'];
$genbio1_mid_2 = $_POST['genbio1_mid_2'];
$genbio1_mid_ave = $_POST['genbio1_mid_ave'];
$genbio1_final_1 = $_POST['genbio1_final_1'];
$genbio1_final_2 = $_POST['genbio1_final_2'];
$genbio1_final_ave = $_POST['genbio1_final_ave'];
$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $query = "INSERT INTO student_tbl(image,firstname,lastname,section,teacher_fname,teacher_lname,oral_communication_mid_1,oral_communication_mid_2,oral_communication_mid_ave,oral_communication_final_1,oral_communication_final_2,oral_communication_final_ave,
    kpwkp_mid_1,kpwkp_mid_2,kpwkp_mid_ave,kpwkp_final_1,kpwkp_final_2,kpwkp_final_ave,genmath_mid_1,genmath_mid_2,genmath_mid_ave,genmath_final_1,genmath_final_2,genmath_final_ave,personal_mid_development_1,personal_mid_development_2,personal_mid_development_ave,
    personal_final_development_1,personal_final_development_2,personal_final_development_ave,els_mid_1,els_mid_2,els_mid_ave,els_final_1,els_final_2,els_final_ave,peh_mid_1,peh_mid_2,peh_mid_ave,peh_final_1,peh_final_2,peh_final_ave,empowerment_tech_mid_1,
    empowerment_tech_mid_2,empowerment_tech_mid_ave,empowerment_tech_final_1,empowerment_tech_final_2,empowerment_tech_final_ave,css_mid_1,css_mid_2,css_mid_ave,css_final_1,css_final_2,css_final_ave,organization_management_mid_1,organization_management_mid_2,
    organization_management_mid_ave,organization_management_final_1,organization_management_final_2,organization_management_final_ave,iwrb_mid_1,iwrb_mid_2,iwrb_mid_ave,iwrb_final_1,iwrb_final_2,iwrb_final_ave,pre_cal_mid_1,pre_cal_mid_2,pre_cal_mid_ave,pre_cal_final_1,
    pre_cal_final_2,pre_cal_final_ave,cookery_mid_1,cookery_mid_2,cookery_mid_ave,cookery_final_1,cookery_final_2,cookery_final_ave,eim_mid_1,eim_mid_2,eim_mid_ave,eim_final_1,eim_final_2,eim_final_ave,century_literature_mid_1,century_literature_mid_2,century_literature_mid_ave,century_literature_final_1,century_literature_final_2,century_literature_final_ave,
    reading_writing_mid_1,reading_writing_mid_2,reading_writing_mid_ave,reading_writing_final_1,reading_writing_final_2,reading_writing_final_ave,ppttp_mid_1,ppttp_mid_2,ppttp_mid_ave,ppttp_final_1,ppttp_final_2,ppttp_final_ave,statistic_mid_1,statistic_mid_2,statistic_mid_ave,statistic_final_1,statistic_final_2,statistic_final_ave,
    contemporary_mid_1,contemporary_mid_2,contemporary_mid_ave,contemporary_final_1,contemporary_final_2,contemporary_final_ave,peh2_mid_1,peh2_mid_2,peh2_mid_ave,peh2_final_1,peh2_final_2,peh2_final_ave,pr1_mid_1,pr1_mid_2,pr1_mid_ave,pr1_final_1,pr1_final_2,pr1_final_ave,entrep_mid_1,entrep_mid_2,entrep_mid_ave,entrep_final_1,entrep_final_2,entrep_final_ave,
    fundamentals_abm1_mid_1,fundamentals_abm1_mid_2,fundamentals_abm1_mid_ave,fundamentals_abm1_final_1,fundamentals_abm1_final_2,fundamentals_abm1_final_ave,humanities1_mid_1,humanities1_mid_2,humanities1_mid_ave,humanities1_final_1,humanities1_final_2,humanities1_final_ave,basiccal_mid_1,basiccal_mid_2,basiccal_mid_ave,basiccal_final_1,basiccal_final_2,basiccal_final_ave,
    cookery2_mid_1,cookery2_mid_2,cookery2_mid_ave,cookery2_final_1,cookery2_final_2,cookery2_final_ave,eim2_mid_1,eim2_mid_2,eim2_mid_ave,eim2_final_1,eim2_final_2,eim2_final_ave,css2_mid_1,css2_mid_2,css2_mid_ave,css2_final_1,css2_final_2,css2_final_ave,pm_mid_1,pm_mid_2,pm_mid_ave,pm_final_1,pm_final_2,pm_final_ave,ss_mid_1,ss_mid_2,ss_mid_ave,ss_final_1,ss_final_2,ss_final_ave
    ,genbio1_mid_1,genbio1_mid_2,genbio1_mid_ave,genbio1_final_1,genbio1_final_2,genbio1_final_ave) VALUES ('$userfile','$firstname','$lastname','$section','$teacher_fname','$teacher_lname','$oralcom_mid1',
    '$oralcom_mid2','$oralcom_mid_ave','$oralcom_final1','$oralcom_final2','$oralcom_final_ave','$kpwkp_mid1','$kpwkp_mid2','$kpwkp_mid_ave','$kpwkp_final1','$kpwkp_final2','$kpwkp_final_ave','$genmath_mid1','$genmath_mid2','$genmath_mid_ave','$genmath_final1','$genmath_final2','$genmath_final_ave','$personal_dev_mid1',
    '$personal_dev_mid2','$personal_dev_mid_ave','$personal_dev_final1','$personal_dev_final2','$personal_dev_final_ave','$els_mid1','$els_mid2','$els_mid_ave','$els_final1','$els_final1','$els_final_ave','$peh_mid1','$peh_mid2','$peh_mid_ave','$peh_final1','$peh_final2','$peh_final_ave','$empowerment_mid1','$empowerment_mid2','$empowerment_mid_ave',
    '$empowerment_final1','$empowerment_final2','$empowerment_final_ave','$css_mid1','$css_mid2','$css_mid_ave','$css_final1','$css_final2','$css_final_ave','$organization_management_mid1','$organization_management_mid2','$organization_management_mid_ave','$organization_management_final1','$organization_management_final2','$organization_management_final_ave',
    '$iwrb_mid1','$iwrb_mid2','$iwrb_mid_ave','$iwrb_final1','$iwrb_final2','$iwrb_final_ave','$pre_cal_mid1','$pre_cal_mid2','$pre_cal_mid_ave','$pre_cal_final1','$pre_cal_final2','$pre_cal_final_ave','$cookery_mid1','$cookery_mid2','$cookery_mid_ave','$cookery_final1','$cookery_final2','$cookery_final_ave','$eim_mid1','$eim_mid2','$eim_mid_ave','$eim_final1',
    '$eim_final2','$eim_final_ave','$century_literature_mid_1','$century_literature_mid_2','$century_literature_mid_ave','$century_literature_final_1','$century_literature_final_2','$century_literature_final_ave','$reading_writing_mid_1','$reading_writing_mid_2','$reading_writing_mid_ave','$reading_writing_final_1','$reading_writing_final_2','$reading_writing_final_ave',
    '$ppttp_mid_1','$ppttp_mid_2','$ppttp_mid_ave','$ppttp_final_1','$ppttp_final_2','$ppttp_final_ave','$statistic_mid_1','$statistic_mid_2','$statistic_mid_ave','$statistic_final_1','$statistic_final_2','$statistic_final_ave','$contemporary_mid_1','$contemporary_mid_2','$contemporary_mid_ave','$contemporary_final_1','$contemporary_final_2','$contemporary_final_ave','$peh2_mid_1',
    '$peh2_mid_2','$peh2_mid_ave','$peh2_final_1','$peh2_final_2','$peh2_final_ave','$pr1_mid_1','$pr1_mid_2','$pr1_mid_ave','$pr1_final_1','$pr1_final_2','$pr1_final_ave','$entrep_mid_1','$entrep_mid_2','$entrep_mid_ave','$entrep_final_1','$entrep_final_2','$entrep_final_ave','$fundamentals_abm1_mid_1','$fundamentals_abm1_mid_2','$fundamentals_abm1_mid_ave','$fundamentals_abm1_final_1',
    '$fundamentals_abm1_final_2','$fundamentals_abm1_final_ave','$humanities1_mid_1','$humanities1_mid_2','$humanities1_mid_ave','$humanities1_final_1','$humanities1_final_2','$humanities1_final_ave','$basiccal_mid_1','$basiccal_mid_2','$basiccal_mid_ave','$basiccal_final_1','$basiccal_final_2','$basiccal_final_ave','$cookery2_mid_1','$cookery2_mid_2','$cookery2_mid_ave','$cookery2_final_1',
    '$cookery2_final_2','$cookery2_final_ave','$eim2_mid_1','$eim2_mid_2','$eim2_mid_ave','$eim2_final_1','$eim2_final_2','$eim2_final_ave','$css2_mid_1','$css2_mid_2','$css2_mid_ave','$css2_final_1','$css2_final_2','$css2_final_ave','$pm_mid_1','$pm_mid_2','$pm_mid_ave','$pm_final_1','$pm_final_2','$pm_final_ave','$ss_mid_1','$ss_mid_2','$ss_mid_ave','$ss_final_1',
    '$ss_final_2','$ss_final_ave','$genbio1_mid_1','$genbio1_mid_2','$genbio1_mid_ave','$genbio1_final_1','$genbio1_final_2','$genbio1_final_ave')";
    mysqli_query($conn,$query);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Sucessfully added!";
    header('location: teacher_dashboard.php');
} else {
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Error";
    header('location: teacher_dashboard.php');
}
?>
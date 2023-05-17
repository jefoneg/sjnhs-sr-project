<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <script src="jquery/jquery.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <title>SJNHS-IS | Print SF-10</title>
    <link rel="icon" type="image/png" sizes="48x48" href="../images/sjnhs_logo.png">
</head>
<?php
include "styles/style.php";
?>
<style>
    .bandpaper {
        background-color: white;
        font-size: 11px;

        padding-top: 10px;
        color: black;
        font-weight: normal;
    }

    .heading {
        width: 100%;

    }

    .heading td {
        padding: 0px;
    }

    .icon {
        width: 75px;
        height: 75px;
        border-radius: 50%;
    }

    .personal-info {
        width: 100%;
    }

    .personal-info td {
        text-align: left;
        font-weight: bold;
    }

    .container {
        padding: 10px 150px;
    }

    .up {
        text-transform: uppercase;
    }

    .b-bot {
        border-bottom: 1px solid black;
        padding: 0px;
        padding-left: 5px;
    }

    .tbl {
        width: 100%;
    }

    .tbl td {
        padding: 0px;
        text-align: left;
    }

    .tbl1 td {
        border: 1px solid black;
    }

    .card {}

    @media print {
        .container {
            width: 100%;
            padding: 10px 10px;
        }

        .card {
            width: 50%;
            float: left;
        }
    }
</style>
<body>
<?php 
                                $conn=mysqli_connect("localhost", "root", "", "sjnhs_db");
								if(mysqli_connect_errno()){
									echo "Connection Fail".mysqli_connect_error();
								}
                              $lrn = $_GET['lrn'];
                              $gradeqry = "SELECT * FROM ict_table WHERE lrn = '$lrn' AND strand = 'ICT';";
                              $gradeqry .= "SELECT * FROM he_table WHERE lrn = '$lrn' AND strand = 'HE';";
                              $gradeqry .= "SELECT * FROM stem_table WHERE lrn = '$lrn' AND strand = 'STEM';";
                              $gradeqry .= "SELECT * FROM humms_table WHERE lrn = '$lrn' AND strand = 'HUMSS';";
                              $gradeqry .= "SELECT * FROM ia_table WHERE lrn = '$lrn' AND strand = 'IA';";
                              $gradeqry .= "SELECT * FROM abm_table WHERE lrn = '$lrn' AND strand = 'ABM';";
                              if(mysqli_multi_query($conn,$gradeqry)){
                                  do{
                                      if($result = mysqli_store_result($conn)){
                              while($gradeqryfetch = mysqli_fetch_array($result)){
                                if ($gradeqryfetch['strand'] == 'HUMSS'){
									echo '   
    <div class="container">
        <div class="row bandpaper">
            <div class="col-sm-12">
                <table class="personal-info" border=0 style="margin: 0; padding: 0;">
                    <tr>
                        <td style="width:60px; margin: 0; padding: 0;">Page 2</td>
                        <td style="width:220px; margin: 0; padding: 0;">
                            <span style = "text-transform: uppercase;">'.$gradeqryfetch['lastname'].','.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].'</span>
                        </td>
                        <td style="width:60px;text-align: right; margin: 0; padding: 0;">Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;margin-top: 0.1em;">
            </div>
            <div class="col-sm-12" style="margin-top: -1.8em;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="1ST" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="HUMANITIES AND SOCIAL SCIENCES" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Introduction to Philosophy of the Human Person</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['iphp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Understanding Culture Society & Politics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['ucsp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 3</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">English for Academic & Professional Purpose</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['eapp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Practical Research 2</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['practical2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['fpl_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '		
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Discipline Ideas in Applied Sciences</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['discipline_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['discipline_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['discipline_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['discipline_mid_ave']  >= 75 && $gradeqryfetch['discipline_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['discipline_mid_ave']  >= 0 && $gradeqryfetch['discipline_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['discipline_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '	
                                </tr>	
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Creative Fiction
                    </td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fiction_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fiction_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fiction_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['fiction_mid_ave']  >= 75 && $gradeqryfetch['fiction_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['fiction_mid_ave']  >= 0 && $gradeqryfetch['fiction_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['fiction_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '		
                </tr>
                <tr>
                <td style="padding-left:4px;text-align:center;">Specialized</td>
                <td style="padding-left:4px;font-size: 11px;">General Philippine Politics and Governance</td>
                <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['politics_mid_1'].'</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['politics_mid_2'].'</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['politics_mid_ave'].'</td>
                    ';
                        }
                        if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['politics_mid_ave']  >= 75 && $gradeqryfetch['politics_mid_ave'] <= 100){
                            echo'
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                            ';
                        }
                        else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['politics_mid_ave']  >= 0 && $gradeqryfetch['politics_mid_ave'] <= 74){
                        echo '
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                        ';
                    }
                        else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['politics_mid_ave'] == ""){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                            ';
                        }
                        if($gradeqryfetch['strand'] == 'HUMSS'){
                            echo '		
            </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['1st_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
					<tr>
					<td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
						<td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
						<td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
						<td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
						<td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
						<td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
						<td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
					</tr>
				</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12" style="margin-top:3px;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="2ND" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="HUMANITIES AND SOCIAL SCIENCES" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Media & Information Literacy</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['mil_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Science</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['ps_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 4</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Inquiries, Investigation and Immersion</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['immersion_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Specialized</td>
                        <td style="padding-left:4px;font-size: 11px;">Trends, Network, Critical Thinking in the 21st Century</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['tnc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['tnc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['tnc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['tnc_mid_ave']  >= 75 && $gradeqryfetch['tnc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['tnc_mid_ave']  >= 0 && $gradeqryfetch['tnc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['tnc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Specialized</td>
                        <td style="padding-left:4px;font-size: 11px;">Community Engagement, Solidarity Citizenship</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['csc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['csc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['csc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['csc_mid_ave']  >= 75 && $gradeqryfetch['csc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['csc_mid_ave']  >= 0 && $gradeqryfetch['csc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['csc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '		
                    </tr>
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['wrcc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['2nd_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HUMSS'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                <tr>
                <td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
                    <td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                    <td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
                    <td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
                    <td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
                    <td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
                    <td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
            </table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
                    <td color="#000000"></td>
                </div>
                <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="HUMANITIES AND SOCIAL SCIENCES" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:150px; font-weight: bold;font-size: 11px;">Awards/Honor Received:</td>
                        <td style="width:200px; text-indent: -3.5em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                        <td style="width:200px; font-weight: bold;font-size: 11px;text-indent: -2em;">Date of SHS Graduation (MM/DD/YYYY):</td>
                        <td style="width:100px; text-indent: -3em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Certified By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;text-indent:-23em;">Place School Seal Here:</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 card" style="margin-top:3px;padding-left:0px;padding-right:2px;">
                    <table class="personal-info" border=0>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;text-indent:1em;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;font-size: 9px;text-align: left;text-indent: -0em;font-weight:normal;">Signature of School Head over Printed Name</td>
                            <td style="font-size: 9px;text-align: center;text-indent: -8em;font-weight:normal;">Date</td>
                        </tr>
                    </table>
                    <div class="col-sm-12" style="padding:1px; width: 450px; height: 200px;">
                        <div class="col-sm-12" style="padding:1px;border:1px solid black;">
                            <p style="margin-bottom: 0;"><strong>NOTE:</strong></p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.</p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.</p>
                            <p style="font-style: italic; margin-top: 0; text-align: justify;">Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office.</p>
                        </div>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
                                <td style="width:300px; text-indent: -1em;font-size: 11px;">
                                    <input type="text" class="input-line b-bot up" value="" />
                                </td>
                            </tr>
                        </table>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Date Issued (MM/DD/YYYY):</td>
                                <td style="width:40px;font-size: 11px;text-indent: -13em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 card" style="margin-top:5px;padding-left:0px;padding-right:2px;width:270px;height:202px;margin-left:90px;">
                    <div class="col-sm-12" style="padding:1px;border:1px solid black;background-color:white;width:100%;height:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    	';
}
                                if ($gradeqryfetch['strand'] == 'STEM'){
									echo '   
    <div class="container">
        <div class="row bandpaper">
            <div class="col-sm-12">
                <table class="personal-info" border=0 style="margin: 0; padding: 0;">
                    <tr>
                        <td style="width:60px; margin: 0; padding: 0;">Page 2</td>
                        <td style="width:220px; margin: 0; padding: 0;">
                            <span style = "text-transform: uppercase;">'.$gradeqryfetch['lastname'].','.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].'</span>
                        </td>
                        <td style="width:60px;text-align: right; margin: 0; padding: 0;">Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;margin-top: 0.1em;">
            </div>
            <div class="col-sm-12" style="margin-top: -1.8em;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="1ST" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Introduction to Philosophy of the Human Person</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['iphp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Understanding Culture Society & Politics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['ucsp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 3</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">English for Academic & Professional Purpose</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['eapp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Practical Research 2</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['practical2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['fpl_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '		
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">General Physics (1)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['physics_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['physics_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['physics_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['physics_mid_ave']  >= 75 && $gradeqryfetch['physics_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['physics_mid_ave']  >= 0 && $gradeqryfetch['physics_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['physics_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '	
                                </tr>	
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">General Chemistry (1)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['chemistry_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['chemistry_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['chemistry_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['chemistry_mid_ave']  >= 75 && $gradeqryfetch['chemistry_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['chemistry_mid_ave']  >= 0 && $gradeqryfetch['chemistry_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['chemistry_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '		
                </tr>
                <tr>
                <td style="padding-left:4px;text-align:center;">Specialized</td>
                <td style="padding-left:4px;font-size: 11px;">General Biology (2)</td>
                <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['biology1_mid_1'].'</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['biology1_mid_2'].'</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['biology1_mid_ave'].'</td>
                    ';
                        }
                        if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['biology1_mid_ave']  >= 75 && $gradeqryfetch['biology1_mid_ave'] <= 100){
                            echo'
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                            ';
                        }
                        else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['biology1_mid_ave']  >= 0 && $gradeqryfetch['biology1_mid_ave'] <= 74){
                        echo '
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                        ';
                    }
                        else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['biology1_mid_ave'] == ""){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                            ';
                        }
                        if($gradeqryfetch['strand'] == 'STEM'){
                            echo '		
            </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['1st_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
					<tr>
					<td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
						<td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
						<td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
						<td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
						<td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
						<td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
						<td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
					</tr>
				</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12" style="margin-top:3px;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="2ND" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Media & Information Literacy</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['mil_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Science</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['ps_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 4</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Inquiries, Investigation and Immersion</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['immersion_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Specialized</td>
                        <td style="padding-left:4px;font-size: 11px;">General Physics (2)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['physics1_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['physics1_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['physics1_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['physics1_mid_ave']  >= 75 && $gradeqryfetch['physics1_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['physics1_mid_ave']  >= 0 && $gradeqryfetch['physics1_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['physics1_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Specialized</td>
                        <td style="padding-left:4px;font-size: 11px;">General Chemistry (2)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['chemistry1_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['chemistry1_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['chemistry1_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['chemistry1_mid_ave']  >= 75 && $gradeqryfetch['chemistry1_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['chemistry1_mid_ave']  >= 0 && $gradeqryfetch['chemistry1_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['chemistry1_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '		
                    </tr>
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['wrcc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['2nd_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'STEM'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                <tr>
                <td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
                    <td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                    <td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
                    <td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
                    <td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
                    <td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
                    <td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
            </table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
                    <td color="#000000"></td>
                </div>
                <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:150px; font-weight: bold;font-size: 11px;">Awards/Honor Received:</td>
                        <td style="width:200px; text-indent: -3.5em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                        <td style="width:200px; font-weight: bold;font-size: 11px;text-indent: -2em;">Date of SHS Graduation (MM/DD/YYYY):</td>
                        <td style="width:100px; text-indent: -3em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Certified By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;text-indent:-23em;">Place School Seal Here:</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 card" style="margin-top:3px;padding-left:0px;padding-right:2px;">
                    <table class="personal-info" border=0>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;text-indent:1em;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;font-size: 9px;text-align: left;text-indent: -0em;font-weight:normal;">Signature of School Head over Printed Name</td>
                            <td style="font-size: 9px;text-align: center;text-indent: -8em;font-weight:normal;">Date</td>
                        </tr>
                    </table>
                    <div class="col-sm-12" style="padding:1px; width: 450px; height: 200px;">
                        <div class="col-sm-12" style="padding:1px;border:1px solid black;">
                            <p style="margin-bottom: 0;"><strong>NOTE:</strong></p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.</p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.</p>
                            <p style="font-style: italic; margin-top: 0; text-align: justify;">Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office.</p>
                        </div>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
                                <td style="width:300px; text-indent: -1em;font-size: 11px;">
                                    <input type="text" class="input-line b-bot up" value="" />
                                </td>
                            </tr>
                        </table>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Date Issued (MM/DD/YYYY):</td>
                                <td style="width:40px;font-size: 11px;text-indent: -13em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 card" style="margin-top:5px;padding-left:0px;padding-right:2px;width:270px;height:202px;margin-left:90px;">
                    <div class="col-sm-12" style="padding:1px;border:1px solid black;background-color:white;width:100%;height:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    	';
}
                                if ($gradeqryfetch['strand'] == 'HE'){
									echo '   
    <div class="container">
        <div class="row bandpaper">
            <div class="col-sm-12">
                <table class="personal-info" border=0 style="margin: 0; padding: 0;">
                    <tr>
                        <td style="width:60px; margin: 0; padding: 0;">Page 2</td>
                        <td style="width:220px; margin: 0; padding: 0;">
                            <span style = "text-transform: uppercase;">'.$gradeqryfetch['lastname'].','.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].'</span>
                        </td>
                        <td style="width:60px;text-align: right; margin: 0; padding: 0;">Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;margin-top: 0.1em;">
            </div>
            <div class="col-sm-12" style="margin-top: -1.8em;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="1ST" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / HOME ECONOMICS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Introduction to Philosophy of the Human Person</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['iphp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Understanding Culture Society & Politics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['ucsp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 3</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">English for Academic & Professional Purpose</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['eapp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Practical Research 2</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['practical2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['fpl_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '		
                    </tr>
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Housekeeping</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['housekeeping_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['housekeeping_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['housekeeping_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['housekeeping_mid_ave']  >= 75 && $gradeqryfetch['housekeeping_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['housekeeping_mid_ave']  >= 0 && $gradeqryfetch['housekeeping_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['housekeeping_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['1st_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
					<tr>
					<td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
						<td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
						<td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
						<td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
						<td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
						<td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
						<td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
					</tr>
				</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12" style="margin-top:3px;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="2ND" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / HOME ECONOMICS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Media & Information Literacy</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['mil_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Science</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['ps_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 4</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Inquiries, Investigation and Immersion</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['immersion_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '			
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;"> Bread & Pastry </td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['bp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['bp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['bp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['bp_mid_ave']  >= 75 && $gradeqryfetch['bp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['bp_mid_ave']  >= 0 && $gradeqryfetch['bp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['bp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '		
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['wrcc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['2nd_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'HE'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                <tr>
                <td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
                    <td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                    <td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
                    <td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
                    <td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
                    <td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
                    <td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
            </table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
                    <td color="#000000"></td>
                </div>
                <table class="personal-info" border=0>
                <tr>
                    <td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
                    <td style="width:1000px; text-indent: -1em;">
                        <input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / HOME ECONOMICS" />
                    </td>
                    <td style="width:50px; text-indent: 1em;">SECTION:</td>
                    <td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:150px; font-weight: bold;font-size: 11px;">Awards/Honor Received:</td>
                        <td style="width:200px; text-indent: -3.5em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                        <td style="width:200px; font-weight: bold;font-size: 11px;text-indent: -2em;">Date of SHS Graduation (MM/DD/YYYY):</td>
                        <td style="width:100px; text-indent: -3em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Certified By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;text-indent:-23em;">Place School Seal Here:</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 card" style="margin-top:3px;padding-left:0px;padding-right:2px;">
                    <table class="personal-info" border=0>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;text-indent:1em;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;font-size: 9px;text-align: left;text-indent: -0em;font-weight:normal;">Signature of School Head over Printed Name</td>
                            <td style="font-size: 9px;text-align: center;text-indent: -8em;font-weight:normal;">Date</td>
                        </tr>
                    </table>
                    <div class="col-sm-12" style="padding:1px; width: 450px; height: 200px;">
                        <div class="col-sm-12" style="padding:1px;border:1px solid black;">
                            <p style="margin-bottom: 0;"><strong>NOTE:</strong></p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.</p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.</p>
                            <p style="font-style: italic; margin-top: 0; text-align: justify;">Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office.</p>
                        </div>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
                                <td style="width:300px; text-indent: -1em;font-size: 11px;">
                                    <input type="text" class="input-line b-bot up" value="" />
                                </td>
                            </tr>
                        </table>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Date Issued (MM/DD/YYYY):</td>
                                <td style="width:40px;font-size: 11px;text-indent: -13em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 card" style="margin-top:5px;padding-left:0px;padding-right:2px;width:270px;height:202px;margin-left:90px;">
                    <div class="col-sm-12" style="padding:1px;border:1px solid black;background-color:white;width:100%;height:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    	';
}
                                if ($gradeqryfetch['strand'] == 'IA'){
									echo '   
    <div class="container">
        <div class="row bandpaper">
            <div class="col-sm-12">
                <table class="personal-info" border=0 style="margin: 0; padding: 0;">
                    <tr>
                        <td style="width:60px; margin: 0; padding: 0;">Page 2</td>
                        <td style="width:220px; margin: 0; padding: 0;">
                            <span style = "text-transform: uppercase;">'.$gradeqryfetch['lastname'].','.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].'</span>
                        </td>
                        <td style="width:60px;text-align: right; margin: 0; padding: 0;">Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;margin-top: 0.1em;">
            </div>
            <div class="col-sm-12" style="margin-top: -1.8em;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="1ST" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / INDUSTRIAL ARTS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Introduction to Philosophy of the Human Person</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['iphp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Understanding Culture Society & Politics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['ucsp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 3</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">English for Academic & Professional Purpose</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eapp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Practical Research 2</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['practical2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['fpl_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '		
                    </tr>
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Electrical Installation and Maintenance (3)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim3_mid_ave']  >= 75 && $gradeqryfetch['eim3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim3_mid_ave']  >= 0 && $gradeqryfetch['eim3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['1st_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
                        <input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
					<tr>
					<td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
						<td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
						<td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
						<td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
						<td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
						<td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
						<td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
					</tr>
				</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12" style="margin-top:3px;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="2ND" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / INDUSTRIAL ARTS" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Media & Information Literacy</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['mil_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Science</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['ps_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 4</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Inquiries, Investigation and Immersion</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['immersion_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '			
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Electrical Installation and Maintenance (4)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim4_mid_ave']  >= 75 && $gradeqryfetch['eim4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim4_mid_ave']  >= 0 && $gradeqryfetch['eim4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '		
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['wrcc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['2nd_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'IA'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                <tr>
                <td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
                    <td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                    <td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
                    <td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
                    <td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
                    <td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
                    <td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
            </table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
                    <td color="#000000"></td>
                </div>
                <table class="personal-info" border=0>
                <tr>
                    <td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
                    <td style="width:1000px; text-indent: -1em;">
                        <input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / INDUSTRIAL ARTS" />
                    </td>
                    <td style="width:50px; text-indent: 1em;">SECTION:</td>
                    <td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:150px; font-weight: bold;font-size: 11px;">Awards/Honor Received:</td>
                        <td style="width:200px; text-indent: -3.5em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                        <td style="width:200px; font-weight: bold;font-size: 11px;text-indent: -2em;">Date of SHS Graduation (MM/DD/YYYY):</td>
                        <td style="width:100px; text-indent: -3em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Certified By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;text-indent:-23em;">Place School Seal Here:</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 card" style="margin-top:3px;padding-left:0px;padding-right:2px;">
                    <table class="personal-info" border=0>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;text-indent:1em;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;font-size: 9px;text-align: left;text-indent: -0em;font-weight:normal;">Signature of School Head over Printed Name</td>
                            <td style="font-size: 9px;text-align: center;text-indent: -8em;font-weight:normal;">Date</td>
                        </tr>
                    </table>
                    <div class="col-sm-12" style="padding:1px; width: 450px; height: 200px;">
                        <div class="col-sm-12" style="padding:1px;border:1px solid black;">
                            <p style="margin-bottom: 0;"><strong>NOTE:</strong></p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.</p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.</p>
                            <p style="font-style: italic; margin-top: 0; text-align: justify;">Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office.</p>
                        </div>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
                                <td style="width:300px; text-indent: -1em;font-size: 11px;">
                                    <input type="text" class="input-line b-bot up" value="" />
                                </td>
                            </tr>
                        </table>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Date Issued (MM/DD/YYYY):</td>
                                <td style="width:40px;font-size: 11px;text-indent: -13em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 card" style="margin-top:5px;padding-left:0px;padding-right:2px;width:270px;height:202px;margin-left:90px;">
                    <div class="col-sm-12" style="padding:1px;border:1px solid black;background-color:white;width:100%;height:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    	';
}
                                if ($gradeqryfetch['strand'] == 'ICT'){
									echo '   
    <div class="container">
        <div class="row bandpaper">
            <div class="col-sm-12">
                <table class="personal-info" border=0 style="margin: 0; padding: 0;">
                    <tr>
                        <td style="width:60px; margin: 0; padding: 0;">Page 2</td>
                        <td style="width:220px; margin: 0; padding: 0;">
                            <span style = "text-transform: uppercase;">'.$gradeqryfetch['lastname'].','.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].'</span>
                        </td>
                        <td style="width:60px;text-align: right; margin: 0; padding: 0;">Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;margin-top: 0.1em;">
            </div>
            <div class="col-sm-12" style="margin-top: -1.8em;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="1ST" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / INFORMATION AND COMMUNICATIONS TECHNOLOGY" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Introduction to Philosophy of the Human Person</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['iphp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Understanding Culture Society & Politics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['ucsp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 3</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">English for Academic & Professional Purpose</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['eapp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Practical Research 2</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['practical2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['fpl_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '		
                    </tr>
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Computer System Servicing (3)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css3_mid_ave']  >= 75 && $gradeqryfetch['css3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css3_mid_ave']  >= 0 && $gradeqryfetch['css3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['1st_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
					<tr>
					<td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
						<td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
						<td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
						<td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
						<td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
						<td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
						<td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
					</tr>
				</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12" style="margin-top:3px;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="2ND" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / INFORMATION AND COMMUNICATIONS TECHNOLOGY" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Media & Information Literacy</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['mil_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Science</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['ps_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 4</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Inquiries, Investigation and Immersion</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['immersion_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '			
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Computer System Servicing (4)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css4_mid_ave']  >= 75 && $gradeqryfetch['css4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css4_mid_ave']  >= 0 && $gradeqryfetch['css4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '		
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['wrcc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['2nd_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ICT'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                <tr>
                <td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
                    <td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                    <td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
                    <td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
                    <td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
                    <td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
                    <td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
            </table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
                    <td color="#000000"></td>
                </div>
                <table class="personal-info" border=0>
                <tr>
                    <td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
                    <td style="width:1000px; text-indent: -1em;">
                        <input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD / INFORMATION AND COMMUNICATIONS TECHNOLOGY" />
                    </td>
                    <td style="width:50px; text-indent: 1em;">SECTION:</td>
                    <td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:150px; font-weight: bold;font-size: 11px;">Awards/Honor Received:</td>
                        <td style="width:200px; text-indent: -3.5em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                        <td style="width:200px; font-weight: bold;font-size: 11px;text-indent: -2em;">Date of SHS Graduation (MM/DD/YYYY):</td>
                        <td style="width:100px; text-indent: -3em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Certified By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;text-indent:-23em;">Place School Seal Here:</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 card" style="margin-top:3px;padding-left:0px;padding-right:2px;">
                    <table class="personal-info" border=0>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;text-indent:1em;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;font-size: 9px;text-align: left;text-indent: -0em;font-weight:normal;">Signature of School Head over Printed Name</td>
                            <td style="font-size: 9px;text-align: center;text-indent: -8em;font-weight:normal;">Date</td>
                        </tr>
                    </table>
                    <div class="col-sm-12" style="padding:1px; width: 450px; height: 200px;">
                        <div class="col-sm-12" style="padding:1px;border:1px solid black;">
                            <p style="margin-bottom: 0;"><strong>NOTE:</strong></p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.</p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.</p>
                            <p style="font-style: italic; margin-top: 0; text-align: justify;">Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office.</p>
                        </div>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
                                <td style="width:300px; text-indent: -1em;font-size: 11px;">
                                    <input type="text" class="input-line b-bot up" value="" />
                                </td>
                            </tr>
                        </table>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Date Issued (MM/DD/YYYY):</td>
                                <td style="width:40px;font-size: 11px;text-indent: -13em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 card" style="margin-top:5px;padding-left:0px;padding-right:2px;width:270px;height:202px;margin-left:90px;">
                    <div class="col-sm-12" style="padding:1px;border:1px solid black;background-color:white;width:100%;height:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    	';
}
								if ($gradeqryfetch['strand'] == 'ABM'){
									echo '   
    <div class="container">
        <div class="row bandpaper">
            <div class="col-sm-12">
                <table class="personal-info" border=0 style="margin: 0; padding: 0;">
                    <tr>
                        <td style="width:60px; margin: 0; padding: 0;">Page 2</td>
                        <td style="width:220px; margin: 0; padding: 0;">
                            <span style = "text-transform: uppercase;">'.$gradeqryfetch['lastname'].','.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].'</span>
                        </td>
                        <td style="width:60px;text-align: right; margin: 0; padding: 0;">Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;margin-top: 0.1em;">
            </div>
            <div class="col-sm-12" style="margin-top: -1.8em;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="1ST" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="ACCOUNTANCY, BUSINESS AND MANAGEMENT" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Introduction to Philosophy of the Human Person</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['iphp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['iphp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Understanding Culture Society & Politics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ucsp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['ucsp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 3</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh3_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh3_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">English for Academic & Professional Purpose</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eapp_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['eapp_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Practical Research 2</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['practical2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fpl_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fpl_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Fundamentals of ABM (2)</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fundamentals1_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fundamentals1_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fundamentals1_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fundamentals1_mid_ave']  >= 75 && $gradeqryfetch['fundamentals1_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fundamentals1_mid_ave']  >= 0 && $gradeqryfetch['fundamentals1_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fundamentals1_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Business Mathematics</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business_mid_ave']  >= 75 && $gradeqryfetch['business_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business_mid_ave']  >= 0 && $gradeqryfetch['business_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['1st_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
					<tr>
					<td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
						<td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
						<td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
						<td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
						<td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
						<td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
						<td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
						<td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
					</tr>
				</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12" style="margin-top:3px;">
            <table class="personal-info" border=0>
			<tr>
				<td style="width:80px; font-weight: bold;">SCHOOL:</td>
				<td style="width:600px;text-indent: -2em;">
					<input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" />
				</td>
				<td style="width:80px;text-indent: -2em;">SCHOOL ID:</td>
				<td style="width:200px;text-indent: -2em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
				<td style="width:130px;text-align:left;text-indent: -1em;">GRADE LEVEL:</td>
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="12" /></td>
				<td style="width:20px;text-align:left;text-indent: -1em;">SY:</td>
				<td style="width:120px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="2019-2020" /></td>
				<td style="width:15px;text-align:left;">SEM:</td>
				<td style="width:100px;"><input type="text" class="input-line b-bot up" value="2ND" /></td>
			</tr>
		</table>
        <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="ACCOUNTANCY, BUSINESS AND MANAGEMENT" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td colspan=2 style="text-align:center;font-weight:bold;font-size: 11px;">Quarter</td>
                            <td rowspan=2 style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td rowspan=2 style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">1ST</td>
                            <td style="width:30px;text-align:center;font-weight:bold;font-size: 11px;">2ND</td>
                        </tr>
                        <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Media & Information Literacy</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['mil_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['mil_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Science</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['ps_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['ps_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Core</td>
                        <td style="padding-left:4px;font-size: 11px;">Physical Education & Health (P.E) 4</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh4_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh4_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Applied</td>
                        <td style="padding-left:4px;font-size: 11px;">Inquiries, Investigation and Immersion</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['immersion_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['immersion_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '			
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Specialized</td>
                        <td style="padding-left:4px;font-size: 11px;">Business Finance</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business1_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business1_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business1_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business1_mid_ave']  >= 75 && $gradeqryfetch['business1_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business1_mid_ave']  >= 0 && $gradeqryfetch['business1_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business1_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                    </tr>
                    <tr>
                        <td style="padding-left:4px;text-align:center;">Specialized</td>
                        <td style="padding-left:4px;font-size: 11px;">Applied Economics</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['economics_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['economics_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['economics_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['economics_mid_ave']  >= 75 && $gradeqryfetch['economics_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['economics_mid_ave']  >= 0 && $gradeqryfetch['economics_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['economics_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                    </tr>
                <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Business Ethics and Social Responsibility</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business2_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business2_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['business2_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business2_mid_ave']  >= 75 && $gradeqryfetch['business2_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business2_mid_ave']  >= 0 && $gradeqryfetch['business2_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['business2_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                    <tr>
                    <td style="padding-left:4px;text-align:center;">Specialized</td>
                    <td style="padding-left:4px;font-size: 11px;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
                    <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_1'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_2'].'</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['wrcc_mid_ave'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['wrcc_mid_ave'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '		
                </tr>
                <tr>
                        <td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
                        <td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average_12'].'</td>
                        ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
                                echo'
                                <td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
                                ';
                            }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
                            echo '
                            <td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
                            ';
                        }
                            else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['2nd_average_12'] == ""){
                                echo '
                                <td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
                                ';
                            }
                            if($gradeqryfetch['strand'] == 'ABM'){
                                echo '
                                </tr>		
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
						<td style="width:800px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Prepared By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;">Certified True and Correct By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;">Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px;text-align: center;text-indent: 1em;font-weight:normal;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 9px;text-align: right;text-indent: 6.5em;font-weight:normal;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                <tr>
                <td style="width:100px; font-weight: bold;font-size: 11px;">REMEDIAL CLASSES</td>
                    <td style="width:120px;font-size: 11px;font-weight: bold;text-indent: -2em;">Conducted from (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -1em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                    <td style="width:100px;text-align:left;font-size: 11px;text-indent: -1em;">to (MM/DD/YYYY):</td>
                    <td style="width:60px;font-size: 11px;text-indent: -3em;"><input type="text" class="input-line b-bot up" value="11" /></td>
                    <td style="width:15px;text-align:left;font-size: 11px;text-indent:-2em;">SCHOOL:</td>
                    <td style="width:180px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="SAN JUAN NATIONAL HIGH SCHOOL" /></td>
                    <td style="width:70px;text-align:left;font-size: 11px;text-indent: 2em;">SCHOOL ID:</td>
                    <td style="width:60px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
                </tr>
            </table>
                <div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
                    <div class="cross"> </div>
                    <table class="tbl tbl1">
                        <tr>
                            <td style="width:80px;text-align:center;font-weight:bold;font-size: 9px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
                            <td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
                            <td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-left:4px;"><br /></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"></td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                            <td style="padding-left:4px;text-align:center;font-size: 11px;"> </td>
                        </tr>
                    </table>
                </div>
                <table class="personal-info" border=0>
					<tr>
						<td style="width:100px; font-weight: bold;font-size: 11px;">Name of Teacher/Adviser:</td>
						<td style="width:450px; text-indent: -0.2em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td style="width:60px; font-weight: bold;font-size: 11px; text-indent: 1em;">Signature:</td>
						<td style="width:120px; text-indent: -0.1em;font-size: 11px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
                    <td color="#000000"></td>
                </div>
                <table class="personal-info" border=0>
		<tr>
			<td style="width:90px; font-weight: bold;">TRACK/STRAND:</td>
			<td style="width:1000px; text-indent: -1em;">
				<input type="text" class="input-line b-bot up" value="ACCOUNTANCY, BUSINESS AND MANAGEMENT" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:150px; font-weight: bold;font-size: 11px;">Awards/Honor Received:</td>
                        <td style="width:200px; text-indent: -3.5em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                        <td style="width:200px; font-weight: bold;font-size: 11px;text-indent: -2em;">Date of SHS Graduation (MM/DD/YYYY):</td>
                        <td style="width:100px; text-indent: -3em;font-size: 11px;">
                            <input type="text" class="input-line b-bot up" value="" />
                        </td>
                    </tr>
                </table>
                <table class="personal-info" border=0>
                    <tr>
                        <td style="width:40px; font-weight: bold;font-size: 11px;">Certified By:</td>
                        <td style="width:40px; font-weight: bold;text-align: center;font-size: 11px;text-indent:-23em;">Place School Seal Here:</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 card" style="margin-top:3px;padding-left:0px;padding-right:2px;">
                    <table class="personal-info" border=0>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;text-indent:1em;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                        <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                        <td style="width:1%;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;font-size: 9px;text-align: left;text-indent: -0em;font-weight:normal;">Signature of School Head over Printed Name</td>
                            <td style="font-size: 9px;text-align: center;text-indent: -8em;font-weight:normal;">Date</td>
                        </tr>
                    </table>
                    <div class="col-sm-12" style="padding:1px; width: 450px; height: 200px;">
                        <div class="col-sm-12" style="padding:1px;border:1px solid black;">
                            <p style="margin-bottom: 0;"><strong>NOTE:</strong></p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.</p>
                            <p style="font-style: italic; margin-top: 0; margin-bottom: 0; text-align: justify;">If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.</p>
                            <p style="font-style: italic; margin-top: 0; text-align: justify;">Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office.</p>
                        </div>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Remarks:</td>
                                <td style="width:300px; text-indent: -1em;font-size: 11px;">
                                    <input type="text" class="input-line b-bot up" value="" />
                                </td>
                            </tr>
                        </table>
                        <table class="personal-info" border=0>
                            <tr>
                                <td style="width:40px; font-weight: bold;font-size: 11px;">Date Issued (MM/DD/YYYY):</td>
                                <td style="width:40px;font-size: 11px;text-indent: -13em;"><input type="text" class="input-line b-bot up" value="303481" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 card" style="margin-top:5px;padding-left:0px;padding-right:2px;width:270px;height:202px;margin-left:90px;">
                    <div class="col-sm-12" style="padding:1px;border:1px solid black;background-color:white;width:100%;height:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    	';
}
}
}
mysqli_free_result($result);
}while(mysqli_next_result($conn));
}
?>
</body>

</html>
<script>
    //window.print();
</script>
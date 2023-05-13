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
								if ($gradeqryfetch['strand'] == 'IA'){
									echo '    
	<div class="container">
		<div class="row bandpaper">
			<div class="col-sm-12">
			<h6 style = "text-align: right;font-weight: bold;margin-bottom: -1.5em;">SF10-SHS</h6>
				<table class="heading" border=0>
					<tr>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon.jpg" class="icon" /></td>
						<td class="ctr" style = "font-size: 16px;">Republic of the Philippines</td>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon-1.jpg" class="icon" /></td>
					</tr>
					<tr>
						<td class="ctr" style = "font-size: 16px;">Department of Education</td>
					</tr>
					<tr>
						<td class="ctr" style="font-size:18px;width:500px;font-weight:bold;">SENIOR HIGH SCHOOL STUDENT PERMANENT RECORD</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">LEARNER"S INFORMATION</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="personal-info" border=0>
					<tr>
						<td style="width:60px;">LAST NAME:</td>
						<td style="width:220px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lastname'].'" />
						</td>
						<td style="width:60px;">FIRST NAME:</td>
						<td style="width:220px;"><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['firstname'].'" /></td>
						<td style="width:105px;text-align:right;">MIDDLE NAME:</td>
						<td><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['middlename'].'" /></td>
					</tr>
				</table>
				<table class="personal-info" border=0 style="margin-top:5px;">
					<tr>
						<td style="width:10px;">LRN:</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lrn'].'" />
						</td>
						<td style="width:150px;text-align:right;">Date of Birth (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['birth'].'" />
						</td>
						<td style="width:20px;text-align:right;">Sex:</td>
						<td style="width:50px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['sex'].'" />
						</td>
						<td style="width:200px;text-align: right;">Date of SHS Submission (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					eligibilty for shs enrolment
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px; text-indent: -0.6em;">High School Completer*</td>
						<td style="width:60px;text-align:left; text-indent: -7em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -7em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Junior High School Completer</td>
						<td style="width:60px;text-align:left; text-indent: -9em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -9em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:250px;">Date of Graduation/Completion (MM/DD/YYYY):</td>
						<td style="width:150px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" 04/02/2025" />
						</td>
						<td style="width:100px; text-indent: -1em;">School Name:</td>
						<td style="width:390px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td style="width:140px;text-indent: 1em;"> School Address:</td>
						<td style="width:430px;text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="SAN JOSE, SAN JUAN, SOUTHERN LEYTE" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px;">PEPT Passer**</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">ALS A&E Passer***</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Others (Pls. Specify):</td>
						<td style="width:200px;text-align: left; text-indent: -0.5em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:300px;">Date of Examination/Assessment (MM/DD/YYYY):</td>
						<td style="width:100px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" " />
						</td>
						<td style="width:250px; text-indent: -3em;">Name and Address of Communitiy Learning Center:</td>
						<td style="width:250px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					scholastic record
				</div>
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
							<td style="padding-left:4px;font-size: 11px;">Oral Communication</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">General Mathematics</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['genmath_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Earth & Life Science</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['els_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Personal Development</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['personal_mid_development_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '		
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">21st Century Literature from the Philippines & the World</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['century_literature_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '		
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Physical Education and Health (P.E.) 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '		
					</tr>
					<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Empowerment Technologies</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '		
									</tr>
									<tr>
									<td style="padding-left:4px;text-align:center;">Applied</td>
									<td style="padding-left:4px;font-size: 11px;">Electrical Installation and Maintenance (1)</td>
									<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim_mid_1'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim_mid_2'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim_mid_ave'].'</td>
										';
											}
											if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim_mid_ave']  >= 75 && $gradeqryfetch['eim_mid_ave'] <= 100){
												echo'
												<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
												';
											}
											else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim_mid_ave']  >= 0 && $gradeqryfetch['eim_mid_ave'] <= 74){
											echo '
											<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
											';
										}
											else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim_mid_ave'] == ""){
												echo '
												<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
												';
											}
											if($gradeqryfetch['strand'] == 'IA'){
												echo '		
									<tr>
					<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['1st_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
							<td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
						</tr
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
						<td style="padding-left:4px;font-size: 11px;"> Reading and Writing Skills</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['reading_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['pptp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Contemporary Arts from the Region </td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['contemporary_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Statistics and Probability</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['statistic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Physical Education and Health (P.E.) 2</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['peh2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;"> Practical Research 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['practical_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Entrepreneurship</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['entrep_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Electrical Installation and Maintenance (2)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['eim2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim2_mid_ave']  >= 75 && $gradeqryfetch['eim2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim2_mid_ave']  >= 0 && $gradeqryfetch['eim2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['eim2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA'){
									echo '	
						</tr>
						<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['2nd_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
		</div>
	</div>
	';
}								
								if ($gradeqryfetch['strand'] == 'STEM'){
									echo '    
	<div class="container">
		<div class="row bandpaper">
			<div class="col-sm-12">
			<h6 style = "text-align: right;font-weight: bold;margin-bottom: -1.5em;">SF10-SHS</h6>
				<table class="heading" border=0>
					<tr>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon.jpg" class="icon" /></td>
						<td class="ctr" style = "font-size: 16px;">Republic of the Philippines</td>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon-1.jpg" class="icon" /></td>
					</tr>
					<tr>
						<td class="ctr" style = "font-size: 16px;">Department of Education</td>
					</tr>
					<tr>
						<td class="ctr" style="font-size:18px;width:500px;font-weight:bold;">SENIOR HIGH SCHOOL STUDENT PERMANENT RECORD</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">LEARNER"S INFORMATION</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="personal-info" border=0>
					<tr>
						<td style="width:60px;">LAST NAME:</td>
						<td style="width:220px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lastname'].'" />
						</td>
						<td style="width:60px;">FIRST NAME:</td>
						<td style="width:220px;"><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['firstname'].'" /></td>
						<td style="width:105px;text-align:right;">MIDDLE NAME:</td>
						<td><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['middlename'].'" /></td>
					</tr>
				</table>
				<table class="personal-info" border=0 style="margin-top:5px;">
					<tr>
						<td style="width:10px;">LRN:</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lrn'].'" />
						</td>
						<td style="width:150px;text-align:right;">Date of Birth (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['birth'].'" />
						</td>
						<td style="width:20px;text-align:right;">Sex:</td>
						<td style="width:50px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['sex'].'" />
						</td>
						<td style="width:200px;text-align: right;">Date of SHS Submission (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					eligibilty for shs enrolment
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px; text-indent: -0.6em;">High School Completer*</td>
						<td style="width:60px;text-align:left; text-indent: -7em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -7em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Junior High School Completer</td>
						<td style="width:60px;text-align:left; text-indent: -9em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -9em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:250px;">Date of Graduation/Completion (MM/DD/YYYY):</td>
						<td style="width:150px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" 04/02/2025" />
						</td>
						<td style="width:100px; text-indent: -1em;">School Name:</td>
						<td style="width:390px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td style="width:140px;text-indent: 1em;"> School Address:</td>
						<td style="width:430px;text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="SAN JOSE, SAN JUAN, SOUTHERN LEYTE" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px;">PEPT Passer**</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">ALS A&E Passer***</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Others (Pls. Specify):</td>
						<td style="width:200px;text-align: left; text-indent: -0.5em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:300px;">Date of Examination/Assessment (MM/DD/YYYY):</td>
						<td style="width:100px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" " />
						</td>
						<td style="width:250px; text-indent: -3em;">Name and Address of Communitiy Learning Center:</td>
						<td style="width:250px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					scholastic record
				</div>
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
							<td style="padding-left:4px;font-size: 11px;">Oral Communication</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">General Mathematics</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['genmath_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Earth & Life Science</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['els_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Personal Development</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['personal_mid_development_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '		
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">21st Century Literature from the Philippines & the World</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['century_literature_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '		
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Physical Education and Health (P.E.) 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '		
					</tr>
					<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Empowerment Technologies</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '		
									</tr>
									<tr>
									<td style="padding-left:4px;text-align:center;">Applied</td>
									<td style="padding-left:4px;font-size: 11px;">Pre-calculus</td>
									<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['precal_mid_1'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['precal_mid_2'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['precal_mid_ave'].'</td>
										';
											}
											if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['precal_mid_ave']  >= 75 && $gradeqryfetch['precal_mid_ave'] <= 100){
												echo'
												<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
												';
											}
											else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['precal_mid_ave']  >= 0 && $gradeqryfetch['precal_mid_ave'] <= 74){
											echo '
											<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
											';
										}
											else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['precal_mid_ave'] == ""){
												echo '
												<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
												';
											}
											if($gradeqryfetch['strand'] == 'STEM'){
												echo '		
									<tr>
					<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['1st_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
							<td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
						</tr
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
						<td style="padding-left:4px;font-size: 11px;"> Reading and Writing Skills</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['reading_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['pptp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Contemporary Arts from the Region </td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['contemporary_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Statistics and Probability</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['statistic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Physical Education and Health (P.E.) 2</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['peh2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;"> Practical Research 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['practical_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Entrepreneurship</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['entrep_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Basic Calculos</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['basic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['basic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['basic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['basic_mid_ave']  >= 75 && $gradeqryfetch['basic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['basic_mid_ave']  >= 0 && $gradeqryfetch['basic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['basic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> General Biology (1)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['biology_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['biology_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['biology_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['biology_mid_ave']  >= 75 && $gradeqryfetch['biology_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['biology_mid_ave']  >= 0 && $gradeqryfetch['biology_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['biology_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM'){
									echo '	
						</tr>
						<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['2nd_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
		</div>
	</div>
	';
}								
								if ($gradeqryfetch['strand'] == 'HUMSS'){
									echo '    
	<div class="container">
		<div class="row bandpaper">
			<div class="col-sm-12">
			<h6 style = "text-align: right;font-weight: bold;margin-bottom: -1.5em;">SF10-SHS</h6>
				<table class="heading" border=0>
					<tr>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon.jpg" class="icon" /></td>
						<td class="ctr" style = "font-size: 16px;">Republic of the Philippines</td>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon-1.jpg" class="icon" /></td>
					</tr>
					<tr>
						<td class="ctr" style = "font-size: 16px;">Department of Education</td>
					</tr>
					<tr>
						<td class="ctr" style="font-size:18px;width:500px;font-weight:bold;">SENIOR HIGH SCHOOL STUDENT PERMANENT RECORD</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">LEARNER"S INFORMATION</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="personal-info" border=0>
					<tr>
						<td style="width:60px;">LAST NAME:</td>
						<td style="width:220px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lastname'].'" />
						</td>
						<td style="width:60px;">FIRST NAME:</td>
						<td style="width:220px;"><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['firstname'].'" /></td>
						<td style="width:105px;text-align:right;">MIDDLE NAME:</td>
						<td><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['middlename'].'" /></td>
					</tr>
				</table>
				<table class="personal-info" border=0 style="margin-top:5px;">
					<tr>
						<td style="width:10px;">LRN:</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lrn'].'" />
						</td>
						<td style="width:150px;text-align:right;">Date of Birth (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['birth'].'" />
						</td>
						<td style="width:20px;text-align:right;">Sex:</td>
						<td style="width:50px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['sex'].'" />
						</td>
						<td style="width:200px;text-align: right;">Date of SHS Submission (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					eligibilty for shs enrolment
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px; text-indent: -0.6em;">High School Completer*</td>
						<td style="width:60px;text-align:left; text-indent: -7em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -7em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Junior High School Completer</td>
						<td style="width:60px;text-align:left; text-indent: -9em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -9em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:250px;">Date of Graduation/Completion (MM/DD/YYYY):</td>
						<td style="width:150px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" 04/02/2025" />
						</td>
						<td style="width:100px; text-indent: -1em;">School Name:</td>
						<td style="width:390px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td style="width:140px;text-indent: 1em;"> School Address:</td>
						<td style="width:430px;text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="SAN JOSE, SAN JUAN, SOUTHERN LEYTE" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px;">PEPT Passer**</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">ALS A&E Passer***</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Others (Pls. Specify):</td>
						<td style="width:200px;text-align: left; text-indent: -0.5em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:300px;">Date of Examination/Assessment (MM/DD/YYYY):</td>
						<td style="width:100px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" " />
						</td>
						<td style="width:250px; text-indent: -3em;">Name and Address of Communitiy Learning Center:</td>
						<td style="width:250px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					scholastic record
				</div>
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
							<td style="padding-left:4px;font-size: 11px;">Oral Communication</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">General Mathematics</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['genmath_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Earth & Life Science</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['els_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Personal Development</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['personal_mid_development_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '		
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">21st Century Literature from the Philippines & the World</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['century_literature_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '		
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Physical Education and Health (P.E.) 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '		
					</tr>
					<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Empowerment Technologies</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '		
									</tr>
									<tr>
									<td style="padding-left:4px;text-align:center;">Applied</td>
									<td style="padding-left:4px;font-size: 11px;">Introduction to World Religion and Belief System</td>
									<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['introduction_mid_1'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['introduction_mid_2'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['introduction_mid_ave'].'</td>
										';
											}
											if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['introduction_mid_ave']  >= 75 && $gradeqryfetch['introduction_mid_ave'] <= 100){
												echo'
												<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
												';
											}
											else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['introduction_mid_ave']  >= 0 && $gradeqryfetch['introduction_mid_ave'] <= 74){
											echo '
											<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
											';
										}
											else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['introduction_mid_ave'] == ""){
												echo '
												<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
												';
											}
											if($gradeqryfetch['strand'] == 'HUMSS'){
												echo '		
									<tr>
					<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['1st_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
							<td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
						</tr
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
						<td style="padding-left:4px;font-size: 11px;"> Reading and Writing Skills</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['reading_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['pptp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Contemporary Arts from the Region </td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['contemporary_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Statistics and Probability</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['statistic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Physical Education and Health (P.E.) 2</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['peh2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;"> Practical Research 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['practical_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Entrepreneurship</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['entrep_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Humanities 1 (Creative Writing)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['humanities_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['humanities_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['humanities_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['humanities_mid_ave']  >= 75 && $gradeqryfetch['humanities_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['humanities_mid_ave']  >= 0 && $gradeqryfetch['humanities_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['humanities_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Social Science (Philippine Politics & Governance)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['social_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['social_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['social_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['social_mid_ave']  >= 75 && $gradeqryfetch['social_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['social_mid_ave']  >= 0 && $gradeqryfetch['social_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['social_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS'){
									echo '	
						</tr>
						<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['2nd_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
		</div>
	</div>
	';
}								
								if ($gradeqryfetch['strand'] == 'HE'){
									echo '    
	<div class="container">
		<div class="row bandpaper">
			<div class="col-sm-12">
			<h6 style = "text-align: right;font-weight: bold;margin-bottom: -1.5em;">SF10-SHS</h6>
				<table class="heading" border=0>
					<tr>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon.jpg" class="icon" /></td>
						<td class="ctr" style = "font-size: 16px;">Republic of the Philippines</td>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon-1.jpg" class="icon" /></td>
					</tr>
					<tr>
						<td class="ctr" style = "font-size: 16px;">Department of Education</td>
					</tr>
					<tr>
						<td class="ctr" style="font-size:18px;width:500px;font-weight:bold;">SENIOR HIGH SCHOOL STUDENT PERMANENT RECORD</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">LEARNER"S INFORMATION</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="personal-info" border=0>
					<tr>
						<td style="width:60px;">LAST NAME:</td>
						<td style="width:220px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lastname'].'" />
						</td>
						<td style="width:60px;">FIRST NAME:</td>
						<td style="width:220px;"><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['firstname'].'" /></td>
						<td style="width:105px;text-align:right;">MIDDLE NAME:</td>
						<td><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['middlename'].'" /></td>
					</tr>
				</table>
				<table class="personal-info" border=0 style="margin-top:5px;">
					<tr>
						<td style="width:10px;">LRN:</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lrn'].'" />
						</td>
						<td style="width:150px;text-align:right;">Date of Birth (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['birth'].'" />
						</td>
						<td style="width:20px;text-align:right;">Sex:</td>
						<td style="width:50px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['sex'].'" />
						</td>
						<td style="width:200px;text-align: right;">Date of SHS Submission (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					eligibilty for shs enrolment
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px; text-indent: -0.6em;">High School Completer*</td>
						<td style="width:60px;text-align:left; text-indent: -7em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -7em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Junior High School Completer</td>
						<td style="width:60px;text-align:left; text-indent: -9em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -9em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:250px;">Date of Graduation/Completion (MM/DD/YYYY):</td>
						<td style="width:150px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" 04/02/2025" />
						</td>
						<td style="width:100px; text-indent: -1em;">School Name:</td>
						<td style="width:390px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td style="width:140px;text-indent: 1em;"> School Address:</td>
						<td style="width:430px;text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="SAN JOSE, SAN JUAN, SOUTHERN LEYTE" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px;">PEPT Passer**</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">ALS A&E Passer***</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Others (Pls. Specify):</td>
						<td style="width:200px;text-align: left; text-indent: -0.5em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:300px;">Date of Examination/Assessment (MM/DD/YYYY):</td>
						<td style="width:100px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" " />
						</td>
						<td style="width:250px; text-indent: -3em;">Name and Address of Communitiy Learning Center:</td>
						<td style="width:250px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					scholastic record
				</div>
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
							<td style="padding-left:4px;font-size: 11px;">Oral Communication</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">General Mathematics</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['genmath_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Earth & Life Science</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['els_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Personal Development</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['personal_mid_development_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '		
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">21st Century Literature from the Philippines & the World</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['century_literature_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '		
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Physical Education and Health (P.E.) 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '		
					</tr>
					<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Empowerment Technologies</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '		
									</tr>
									<tr>
									<td style="padding-left:4px;text-align:center;">Applied</td>
									<td style="padding-left:4px;font-size: 11px;">Cookery (1)</td>
									<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['cookery_mid_1'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['cookery_mid_2'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['cookery_mid_ave'].'</td>
										';
											}
											if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['cookery_mid_ave']  >= 75 && $gradeqryfetch['cookery_mid_ave'] <= 100){
												echo'
												<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
												';
											}
											else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['cookery_mid_ave']  >= 0 && $gradeqryfetch['cookery_mid_ave'] <= 74){
											echo '
											<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
											';
										}
											else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['cookery_mid_ave'] == ""){
												echo '
												<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
												';
											}
											if($gradeqryfetch['strand'] == 'HE'){
												echo '		
									<tr>
					<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['1st_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
							<td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
						</tr
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
						<td style="padding-left:4px;font-size: 11px;"> Reading and Writing Skills</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['reading_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['pptp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Contemporary Arts from the Region </td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['contemporary_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Statistics and Probability</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['statistic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Physical Education and Health (P.E.) 2</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['peh2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;"> Practical Research 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['practical_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Entrepreneurship</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['entrep_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Cookery (2)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['cookery2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['cookery2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['cookery2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['cookery2_mid_ave']  >= 75 && $gradeqryfetch['cookery2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['cookery2_mid_ave']  >= 0 && $gradeqryfetch['cookery2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['cookery2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE'){
									echo '	
						</tr>
						<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['2nd_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
		</div>
	</div>
	';
}	
								if ($gradeqryfetch['strand'] == 'ICT'){
									echo '    
	<div class="container">
		<div class="row bandpaper">
			<div class="col-sm-12">
			<h6 style = "text-align: right;font-weight: bold;margin-bottom: -1.5em;">SF10-SHS</h6>
				<table class="heading" border=0>
					<tr>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon.jpg" class="icon" /></td>
						<td class="ctr" style = "font-size: 16px;">Republic of the Philippines</td>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon-1.jpg" class="icon" /></td>
					</tr>
					<tr>
						<td class="ctr" style = "font-size: 16px;">Department of Education</td>
					</tr>
					<tr>
						<td class="ctr" style="font-size:18px;width:500px;font-weight:bold;">SENIOR HIGH SCHOOL STUDENT PERMANENT RECORD</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">LEARNER"S INFORMATION</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="personal-info" border=0>
					<tr>
						<td style="width:60px;">LAST NAME:</td>
						<td style="width:220px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lastname'].'" />
						</td>
						<td style="width:60px;">FIRST NAME:</td>
						<td style="width:220px;"><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['firstname'].'" /></td>
						<td style="width:105px;text-align:right;">MIDDLE NAME:</td>
						<td><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['middlename'].'" /></td>
					</tr>
				</table>
				<table class="personal-info" border=0 style="margin-top:5px;">
					<tr>
						<td style="width:10px;">LRN:</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lrn'].'" />
						</td>
						<td style="width:150px;text-align:right;">Date of Birth (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['birth'].'" />
						</td>
						<td style="width:20px;text-align:right;">Sex:</td>
						<td style="width:50px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['sex'].'" />
						</td>
						<td style="width:200px;text-align: right;">Date of SHS Submission (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					eligibilty for shs enrolment
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px; text-indent: -0.6em;">High School Completer*</td>
						<td style="width:60px;text-align:left; text-indent: -7em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -7em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Junior High School Completer</td>
						<td style="width:60px;text-align:left; text-indent: -9em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -9em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:250px;">Date of Graduation/Completion (MM/DD/YYYY):</td>
						<td style="width:150px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" 04/02/2025" />
						</td>
						<td style="width:100px; text-indent: -1em;">School Name:</td>
						<td style="width:390px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td style="width:140px;text-indent: 1em;"> School Address:</td>
						<td style="width:430px;text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="SAN JOSE, SAN JUAN, SOUTHERN LEYTE" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px;">PEPT Passer**</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">ALS A&E Passer***</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Others (Pls. Specify):</td>
						<td style="width:200px;text-align: left; text-indent: -0.5em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:300px;">Date of Examination/Assessment (MM/DD/YYYY):</td>
						<td style="width:100px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" " />
						</td>
						<td style="width:250px; text-indent: -3em;">Name and Address of Communitiy Learning Center:</td>
						<td style="width:250px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					scholastic record
				</div>
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
							<td style="padding-left:4px;font-size: 11px;">Oral Communication</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">General Mathematics</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['genmath_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Earth & Life Science</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['els_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Personal Development</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['personal_mid_development_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '		
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">21st Century Literature from the Philippines & the World</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['century_literature_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '		
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Physical Education and Health (P.E.) 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '		
					</tr>
					<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Empowerment Technologies</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '		
									</tr>
									<tr>
									<td style="padding-left:4px;text-align:center;">Applied</td>
									<td style="padding-left:4px;font-size: 11px;">Computer System Servicing (1)</td>
									<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css1_mid_1'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css1_mid_2'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css1_mid_ave'].'</td>
										';
											}
											if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css1_mid_ave']  >= 75 && $gradeqryfetch['css1_mid_ave'] <= 100){
												echo'
												<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
												';
											}
											else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css1_mid_ave']  >= 0 && $gradeqryfetch['css1_mid_ave'] <= 74){
											echo '
											<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
											';
										}
											else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css1_mid_ave'] == ""){
												echo '
												<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
												';
											}
											if($gradeqryfetch['strand'] == 'ICT'){
												echo '		
									<tr>
					<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['1st_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
							<td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
						</tr
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
				<input type="text" class="input-line b-bot up" value="TECHNICAL- VOCATIONAL-LIVELIHOOD /INFORMATION AND COMMUNICATIONS TECHNOLOGY" />
			</td>
			<td style="width:50px; text-indent: 1em;">SECTION:</td>
			<td style="width: 300px;font-size: 11px;"><input type="text" class="input-line b-bot up" value="12312312" /></td>
		</tr>
		</table>
				<div class="col-sm-12" style="padding:0px;border:1px solid black;border-top:0px solid black;">
					<div class="cross"> </div>
					<table class="tbl tbl1">
						<tr>
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
						<td style="padding-left:4px;font-size: 11px;"> Reading and Writing Skills</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['reading_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['pptp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Contemporary Arts from the Region </td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['contemporary_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Statistics and Probability</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['statistic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Physical Education and Health (P.E.) 2</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['peh2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;"> Practical Research 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['practical_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Entrepreneurship</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['entrep_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Computer System Servicing (2)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['css2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css2_mid_ave']  >= 75 && $gradeqryfetch['css2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css2_mid_ave']  >= 0 && $gradeqryfetch['css2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['css2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT'){
									echo '	
						</tr>
						<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['2nd_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
		</div>
	</div>
	';
}								
								if ($gradeqryfetch['strand'] == 'ABM'){
									echo '    
	<div class="container">
		<div class="row bandpaper">
			<div class="col-sm-12">
			<h6 style = "text-align: right;font-weight: bold;margin-bottom: -1.5em;">SF10-SHS</h6>
				<table class="heading" border=0>
					<tr>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon.jpg" class="icon" /></td>
						<td class="ctr" style = "font-size: 16px;">Republic of the Philippines</td>
						<td rowspan=4 style="text-align:center;"><img src="icons/deped-icon-1.jpg" class="icon" /></td>
					</tr>
					<tr>
						<td class="ctr" style = "font-size: 16px;">Department of Education</td>
					</tr>
					<tr>
						<td class="ctr" style="font-size:18px;width:500px;font-weight:bold;">SENIOR HIGH SCHOOL STUDENT PERMANENT RECORD</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">LEARNER"S INFORMATION</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="personal-info" border=0>
					<tr>
						<td style="width:60px;">LAST NAME:</td>
						<td style="width:220px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lastname'].'" />
						</td>
						<td style="width:60px;">FIRST NAME:</td>
						<td style="width:220px;"><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['firstname'].'" /></td>
						<td style="width:105px;text-align:right;">MIDDLE NAME:</td>
						<td><input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['middlename'].'" /></td>
					</tr>
				</table>
				<table class="personal-info" border=0 style="margin-top:5px;">
					<tr>
						<td style="width:10px;">LRN:</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['lrn'].'" />
						</td>
						<td style="width:150px;text-align:right;">Date of Birth (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['birth'].'" />
						</td>
						<td style="width:20px;text-align:right;">Sex:</td>
						<td style="width:50px;">
							<input type="text" class="input-line b-bot up" value="'.$gradeqryfetch['sex'].'" />
						</td>
						<td style="width:200px;text-align: right;">Date of SHS Submission (MM/DD/YYYY):</td>
						<td style="width:100px;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					eligibilty for shs enrolment
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:3px;">
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px; text-indent: -0.6em;">High School Completer*</td>
						<td style="width:60px;text-align:left; text-indent: -7em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -7em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Junior High School Completer</td>
						<td style="width:60px;text-align:left; text-indent: -9em;">General Ave:</td>
						<td style="width:50px;text-align: left; text-indent: -9em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:250px;">Date of Graduation/Completion (MM/DD/YYYY):</td>
						<td style="width:150px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" 04/02/2025" />
						</td>
						<td style="width:100px; text-indent: -1em;">School Name:</td>
						<td style="width:390px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td style="width:140px;text-indent: 1em;"> School Address:</td>
						<td style="width:430px;text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="SAN JOSE, SAN JUAN, SOUTHERN LEYTE" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td><input type="checkbox" style="padding:0px;margin-top:3px;	"></td>
						<td style="line-height:9px;">PEPT Passer**</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">ALS A&E Passer***</td>
						<td style="width:60px;text-align:left; text-indent: 1em;">Rating:</td>
						<td style="width:50px;text-align: left; text-indent: -1em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
						<td><input type="checkbox" style="padding:0px;margin-top:3px; 	"></td>
						<td style="line-height:9px;">Others (Pls. Specify):</td>
						<td style="width:200px;text-align: left; text-indent: -0.5em;">
							<input type="text" class="input-line b-bot up" value="" />
						</td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="width:300px;">Date of Examination/Assessment (MM/DD/YYYY):</td>
						<td style="width:100px;text-indent: -3em;">
							<input type="text" class="input-line b-bot up" value=" " />
						</td>
						<td style="width:250px; text-indent: -3em;">Name and Address of Communitiy Learning Center:</td>
						<td style="width:250px; text-indent: -0.5em; font-weight: bold;">
							<input type="text" class="input-line b-bot up" value="San Juan National High School" />
						</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
						<td></td>
					</tr>
				</table>
				<table class="tbl" border=0>
					<tr>
						<td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 up" style="border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;">
					scholastic record
				</div>
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
							<td style="padding-left:4px;font-size: 11px;">Oral Communication</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">General Mathematics</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['genmath_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['genmath_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Earth & Life Science</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['els_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['els_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '			
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">Personal Development</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['personal_mid_development_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['personal_mid_development_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '		
						</tr>
						<tr>
							<td style="padding-left:4px;text-align:center;">Core</td>
							<td style="padding-left:4px;font-size: 11px;">21st Century Literature from the Philippines & the World</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['century_literature_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['century_literature_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '		
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Physical Education and Health (P.E.) 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '		
					</tr>
					<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Empowerment Technologies</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '		
									</tr>
									<tr>
									<td style="padding-left:4px;text-align:center;">Applied</td>
									<td style="padding-left:4px;font-size: 11px;">Organization & Management (1)</td>
									<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['organization_mid_1'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['organization_mid_2'].'</td>
										<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['organization_mid_ave'].'</td>
										';
											}
											if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['organization_mid_ave']  >= 75 && $gradeqryfetch['organization_mid_ave'] <= 100){
												echo'
												<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
												';
											}
											else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['organization_mid_ave']  >= 0 && $gradeqryfetch['organization_mid_ave'] <= 74){
											echo '
											<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
											';
										}
											else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['organization_mid_ave'] == ""){
												echo '
												<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
												';
											}
											if($gradeqryfetch['strand'] == 'ABM'){
												echo '		
									<tr>
					<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['1st_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['1st_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
							<td style="text-align:center;font-weight:bold;font-size: 11px;">SUBJECTS</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">SEM FINAL GRADE</td>
							<td style="width:60px;text-align:center;font-weight:bold;font-size: 11px;">REMEDIAL CLASS MARK</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">RECOMPUTED FINAL GRADE</td>
							<td style="width:50px;text-align:center;font-weight:bold;font-size: 11px;">ACTION TAKEN</td>
						</tr
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
				<td style="width:120px; text-indent: -2em; "><input type="text" class="input-line b-bot up" value="11" /></td>
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
							<td rowspan=2 style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
						<td style="padding-left:4px;font-size: 11px;"> Reading and Writing Skills</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['reading_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['reading_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['pptp_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['pptp_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;">Contemporary Arts from the Region </td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['contemporary_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['contemporary_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Statistics and Probability</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['statistic_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['statistic_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Core</td>
						<td style="padding-left:4px;font-size: 11px;"> Physical Education and Health (P.E.) 2</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['peh2_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['peh2_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;"> Practical Research 1</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['practical_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['practical_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Applied</td>
						<td style="padding-left:4px;font-size: 11px;">Entrepreneurship</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['entrep_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['entrep_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Fundamentals of ABM (1)</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fundamentals_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fundamentals_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['fundamentals_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fundamentals_mid_ave']  >= 75 && $gradeqryfetch['fundamentals_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fundamentals_mid_ave']  >= 0 && $gradeqryfetch['fundamentals_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['fundamentals_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
						<td style="padding-left:4px;text-align:center;">Specialized</td>
						<td style="padding-left:4px;font-size: 11px;"> Principles of Marketing</td>
						<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['principles_mid_1'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['principles_mid_2'].'</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['principles_mid_ave'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['principles_mid_ave']  >= 75 && $gradeqryfetch['principles_mid_ave'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['principles_mid_ave']  >= 0 && $gradeqryfetch['principles_mid_ave'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['principles_mid_ave'] == ""){
									echo '
									<td style="padding-left:4px;font-size: 11px;text-align:center;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM'){
									echo '	
						</tr>
						<tr>
							<td colspan="4" style="padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;">Genral Ave. for the Semester:</td>
							<td style="padding-left:4px;font-size: 11px;text-align:center;">'.$gradeqryfetch['2nd_average'].'</td>
							';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
									echo'
									<td style="padding-left:4px;font-size: 11px;text-align:center;">PASSED</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
								echo '
								<td style="padding-left:4px;font-size: 11px;text-align:center;">FAILED</td>
								';
							}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['2nd_average'] == ""){
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
							<td style="width:80px;text-align:center;font-weight:bold;font-size: 11px;">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
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
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
	<title>SJNHS IS | Print SF-9</title>
	<link rel="icon" type="image/png" sizes="48x48" href="../images/sjnhs_logo.png">
</head>

<?php
include 'styles/style.php';
?>
<style>
	.bandpaper {
		background-color: white;
		font-size: 11px;
		font-family: 'times new roman';
		color: black;
		font-weight: normal;
		height: 820px;
	}

	.pd20 {
		padding: 20px;
	}

	.page {}

	td {
		padding: 0px;
		padding-left: 5px;
	}

	.up {
		text-transform: uppercase;
		font-weight: normal;
	}

	.table4 {
		color: black;
		font-family: calibri;
	}

	.table4 td,
	.table4 th {
		width: 50px;

	}

	.table4 th,
	.table4 td {
		background-color: transparent;
		border: 1px solid black;
	}

	.table4 th {
		text-align: center;
		padding-top: 10px;
		padding-bottom: 10px;
	}

	.table4 td {
		font-weight: normal;
		text-align: center;
		color: black;
	}

	.table4 td:first-child {
		width: 50px;
		font-weight: bold;
		font-size: 12px;
		text-align: center;
		color: black;
	}

	.table5 {

		color: black;
		font-family: calibri;
	}

	.table5 td {
		background-color: transparent;
		border: 1px solid black;
		padding: 4px;
	}

	.table5 td {
		font-weight: bold;
		text-align: center;
		color: black;
	}

	.table5 td:first-child {
		text-align: left;
		color: black;
	}

	.table6 td {
		padding: 5px;
		text-align: center;
		width: 80px;
		border: 1px solid rgba(0, 0, 0, 0.4);
	}

	.table6 td:first-child {
		font-weight: bold;
		text-align: left;
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
								if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">Accountancy, Business and Management</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to Philosophy of the Human Person</td>
								<td>'.$gradeqryfetch['iphp_mid_1'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_2'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">Understanding Culture Society & Politics</td>
								<td>'.$gradeqryfetch['ucsp_mid_1'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_2'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh3_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">English for Academic & Professional Purpose</td>
								<td>'.$gradeqryfetch['eapp_mid_1'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_2'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Practical Research 2</td>
								<td>'.$gradeqryfetch['practical2_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
								<td>'.$gradeqryfetch['fpl_mid_1'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_2'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Fundamentals of ABM (2)</td>
								<td>'.$gradeqryfetch['fundamentals1_mid_1'].'</td>
								<td>'.$gradeqryfetch['fundamentals1_mid_2'].'</td>
								<td>'.$gradeqryfetch['fundamentals1_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fundamentals1_mid_ave']  >= 75 && $gradeqryfetch['fundamentals1_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fundamentals1_mid_ave']  >= 0 && $gradeqryfetch['fundamentals1_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fundamentals1_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Business Mathematics</td>
								<td>'.$gradeqryfetch['business_mid_1'].'</td>
								<td>'.$gradeqryfetch['business_mid_2'].'</td>
								<td>'.$gradeqryfetch['business_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business_mid_ave']  >= 75 && $gradeqryfetch['business_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business_mid_ave']  >= 0 && $gradeqryfetch['business_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Media & Information Literacy</td>
								<td>'.$gradeqryfetch['mil_mid_1'].'</td>
								<td>'.$gradeqryfetch['mil_mid_2'].'</td>
								<td>'.$gradeqryfetch['mil_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Science</td>
								<td>'.$gradeqryfetch['ps_mid_1'].'</td>
								<td>'.$gradeqryfetch['ps_mid_2'].'</td>
								<td>'.$gradeqryfetch['ps_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh4_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Inquiries, Investigation and Immersion</td>
								<td>'.$gradeqryfetch['immersion_mid_1'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_2'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Business Finance</td>
								<td>'.$gradeqryfetch['business1_mid_1'].'</td>
								<td>'.$gradeqryfetch['business1_mid_2'].'</td>
								<td>'.$gradeqryfetch['business1_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business1_mid_ave']  >= 75 && $gradeqryfetch['business1_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business1_mid_ave']  >= 0 && $gradeqryfetch['business1_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business1_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Applied Economics</td>
								<td>'.$gradeqryfetch['economics_mid_1'].'</td>
								<td>'.$gradeqryfetch['economics_mid_2'].'</td>
								<td>'.$gradeqryfetch['economics_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['economics_mid_ave']  >= 75 && $gradeqryfetch['economics_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['economics_mid_ave']  >= 0 && $gradeqryfetch['economics_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['economics_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
							<td style="font-weight:normal;"> Business Ethics and Social Responsibility</td>
							<td>'.$gradeqryfetch['business2_mid_1'].'</td>
							<td>'.$gradeqryfetch['business2_mid_2'].'</td>
							<td>'.$gradeqryfetch['business2_mid_ave'].'</td>
							';
						}
						if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business2_mid_ave']  >= 75 && $gradeqryfetch['business2_mid_ave'] <= 100){
							echo'
						<td style="font-weight:normal;">Passed</td>
						';
						}
						else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business2_mid_ave']  >= 0 && $gradeqryfetch['business2_mid_ave'] <= 74){
						echo '
							<td style="font-weight:normal;">Failed</td>
							';
						}
						else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['business2_mid_ave'] == ""){
							echo '
							<td style="font-weight:normal;"></td>
							';
						}
						if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
							echo '
						</tr>
							<tr>
								<td style="font-weight:normal;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
								<td>'.$gradeqryfetch['wrcc_mid_1'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_2'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">Humanities and Social Sciences</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;"/></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to Philosophy of the Human Person</td>
								<td>'.$gradeqryfetch['iphp_mid_1'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_2'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">Understanding Culture Society & Politics</td>
								<td>'.$gradeqryfetch['ucsp_mid_1'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_2'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh3_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">English for Academic & Professional Purpose</td>
								<td>'.$gradeqryfetch['eapp_mid_1'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_2'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Practical Research 2</td>
								<td>'.$gradeqryfetch['practical2_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
								<td>'.$gradeqryfetch['fpl_mid_1'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_2'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Discipline Ideas in Applied Sciences</td>
								<td>'.$gradeqryfetch['discipline_mid_1'].'</td>
								<td>'.$gradeqryfetch['discipline_mid_2'].'</td>
								<td>'.$gradeqryfetch['discipline_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['discipline_mid_ave']  >= 75 && $gradeqryfetch['discipline_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['discipline_mid_ave']  >= 0 && $gradeqryfetch['discipline_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['discipline_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Creative Fiction</td>
								<td>'.$gradeqryfetch['fiction_mid_1'].'</td>
								<td>'.$gradeqryfetch['fiction_mid_2'].'</td>
								<td>'.$gradeqryfetch['fiction_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fiction_mid_ave']  >= 75 && $gradeqryfetch['fiction_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fiction_mid_ave']  >= 0 && $gradeqryfetch['fiction_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fiction_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">General Philippine Politics and Governance</td>
								<td>'.$gradeqryfetch['politics_mid_1'].'</td>
								<td>'.$gradeqryfetch['politics_mid_2'].'</td>
								<td>'.$gradeqryfetch['politics_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['politics_mid_ave']  >= 75 && $gradeqryfetch['politics_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['politics_mid_ave']  >= 0 && $gradeqryfetch['politics_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['politics_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Media & Information Literacy</td>
								<td>'.$gradeqryfetch['mil_mid_1'].'</td>
								<td>'.$gradeqryfetch['mil_mid_2'].'</td>
								<td>'.$gradeqryfetch['mil_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Science</td>
								<td>'.$gradeqryfetch['ps_mid_1'].'</td>
								<td>'.$gradeqryfetch['ps_mid_2'].'</td>
								<td>'.$gradeqryfetch['ps_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh4_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Inquiries, Investigation and Immersion</td>
								<td>'.$gradeqryfetch['immersion_mid_1'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_2'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Trends, Network, Critical Thinking in the 21st Century</td>
								<td>'.$gradeqryfetch['tnc_mid_1'].'</td>
								<td>'.$gradeqryfetch['tnc_mid_2'].'</td>
								<td>'.$gradeqryfetch['tnc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['tnc_mid_ave']  >= 75 && $gradeqryfetch['tnc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['tnc_mid_ave']  >= 0 && $gradeqryfetch['tnc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['tnc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Community Engagement, Solidarity Citizenship</td>
								<td>'.$gradeqryfetch['csc_mid_1'].'</td>
								<td>'.$gradeqryfetch['csc_mid_2'].'</td>
								<td>'.$gradeqryfetch['csc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['csc_mid_ave']  >= 75 && $gradeqryfetch['csc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['csc_mid_ave']  >= 0 && $gradeqryfetch['csc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['csc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
								<td>'.$gradeqryfetch['wrcc_mid_1'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_2'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">Science, Technology, Engineering and Mathematics</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to Philosophy of the Human Person</td>
								<td>'.$gradeqryfetch['iphp_mid_1'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_2'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">Understanding Culture Society & Politics</td>
								<td>'.$gradeqryfetch['ucsp_mid_1'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_2'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh3_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">English for Academic & Professional Purpose</td>
								<td>'.$gradeqryfetch['eapp_mid_1'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_2'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Practical Research 2</td>
								<td>'.$gradeqryfetch['practical2_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
								<td>'.$gradeqryfetch['fpl_mid_1'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_2'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">General Physics (1)</td>
								<td>'.$gradeqryfetch['physics_mid_1'].'</td>
								<td>'.$gradeqryfetch['physics_mid_2'].'</td>
								<td>'.$gradeqryfetch['physics_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['physics_mid_ave']  >= 75 && $gradeqryfetch['physics_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['physics_mid_ave']  >= 0 && $gradeqryfetch['physics_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['physics_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">General Chemistry (1)</td>
								<td>'.$gradeqryfetch['chemistry_mid_1'].'</td>
								<td>'.$gradeqryfetch['chemistry_mid_2'].'</td>
								<td>'.$gradeqryfetch['chemistry_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['chemistry_mid_ave']  >= 75 && $gradeqryfetch['chemistry_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['chemistry_mid_ave']  >= 0 && $gradeqryfetch['chemistry_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['chemistry_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">General Biology (2)</td>
								<td>'.$gradeqryfetch['biology1_mid_1'].'</td>
								<td>'.$gradeqryfetch['biology1_mid_2'].'</td>
								<td>'.$gradeqryfetch['biology1_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['biology1_mid_ave']  >= 75 && $gradeqryfetch['biology1_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['biology1_mid_ave']  >= 0 && $gradeqryfetch['biology1_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['biology1_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Media & Information Literacy</td>
								<td>'.$gradeqryfetch['mil_mid_1'].'</td>
								<td>'.$gradeqryfetch['mil_mid_2'].'</td>
								<td>'.$gradeqryfetch['mil_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Science</td>
								<td>'.$gradeqryfetch['ps_mid_1'].'</td>
								<td>'.$gradeqryfetch['ps_mid_2'].'</td>
								<td>'.$gradeqryfetch['ps_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh4_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Inquiries, Investigation and Immersion</td>
								<td>'.$gradeqryfetch['immersion_mid_1'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_2'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">General Physics (2)</td>
								<td>'.$gradeqryfetch['physics1_mid_1'].'</td>
								<td>'.$gradeqryfetch['physics1_mid_2'].'</td>
								<td>'.$gradeqryfetch['physics1_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['physics1_mid_ave']  >= 75 && $gradeqryfetch['physics1_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['physics1_mid_ave']  >= 0 && $gradeqryfetch['physics1_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['physics1_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">General Chemistry (2)</td>
								<td>'.$gradeqryfetch['chemistry1_mid_1'].'</td>
								<td>'.$gradeqryfetch['chemistry1_mid_2'].'</td>
								<td>'.$gradeqryfetch['chemistry1_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['chemistry1_mid_ave']  >= 75 && $gradeqryfetch['chemistry1_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['chemistry1_mid_ave']  >= 0 && $gradeqryfetch['chemistry1_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['chemistry1_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
								<td>'.$gradeqryfetch['wrcc_mid_1'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_2'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">TVL/Home Economics</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to Philosophy of the Human Person</td>
								<td>'.$gradeqryfetch['iphp_mid_1'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_2'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">Understanding Culture Society & Politics</td>
								<td>'.$gradeqryfetch['ucsp_mid_1'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_2'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh3_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">English for Academic & Professional Purpose</td>
								<td>'.$gradeqryfetch['eapp_mid_1'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_2'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Practical Research 2</td>
								<td>'.$gradeqryfetch['practical2_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
								<td>'.$gradeqryfetch['fpl_mid_1'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_2'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;"> Housekeeping</td>
								<td>'.$gradeqryfetch['housekeeping_mid_1'].'</td>
								<td>'.$gradeqryfetch['housekeeping_mid_2'].'</td>
								<td>'.$gradeqryfetch['housekeeping_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['housekeeping_mid_ave']  >= 75 && $gradeqryfetch['housekeeping_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['housekeeping_mid_ave']  >= 0 && $gradeqryfetch['housekeeping_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['housekeeping_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Media & Information Literacy</td>
								<td>'.$gradeqryfetch['mil_mid_1'].'</td>
								<td>'.$gradeqryfetch['mil_mid_2'].'</td>
								<td>'.$gradeqryfetch['mil_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Science</td>
								<td>'.$gradeqryfetch['ps_mid_1'].'</td>
								<td>'.$gradeqryfetch['ps_mid_2'].'</td>
								<td>'.$gradeqryfetch['ps_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh4_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Inquiries, Investigation and Immersion</td>
								<td>'.$gradeqryfetch['immersion_mid_1'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_2'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;"> Bread & Pastry</td>
								<td>'.$gradeqryfetch['bp_mid_1'].'</td>
								<td>'.$gradeqryfetch['bp_mid_2'].'</td>
								<td>'.$gradeqryfetch['bp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['bp_mid_ave']  >= 75 && $gradeqryfetch['bp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['bp_mid_ave']  >= 0 && $gradeqryfetch['bp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['bp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
								<td>'.$gradeqryfetch['wrcc_mid_1'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_2'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">TVL/Information and Communications Technology</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to Philosophy of the Human Person</td>
								<td>'.$gradeqryfetch['iphp_mid_1'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_2'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">Understanding Culture Society & Politics</td>
								<td>'.$gradeqryfetch['ucsp_mid_1'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_2'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh3_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">English for Academic & Professional Purpose</td>
								<td>'.$gradeqryfetch['eapp_mid_1'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_2'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Practical Research 2</td>
								<td>'.$gradeqryfetch['practical2_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
								<td>'.$gradeqryfetch['fpl_mid_1'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_2'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;"> Housekeeping</td>
								<td>'.$gradeqryfetch['css3_mid_1'].'</td>
								<td>'.$gradeqryfetch['css3_mid_2'].'</td>
								<td>'.$gradeqryfetch['css3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['css3_mid_ave']  >= 75 && $gradeqryfetch['css3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['css3_mid_ave']  >= 0 && $gradeqryfetch['css3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['css3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Media & Information Literacy</td>
								<td>'.$gradeqryfetch['mil_mid_1'].'</td>
								<td>'.$gradeqryfetch['mil_mid_2'].'</td>
								<td>'.$gradeqryfetch['mil_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Science</td>
								<td>'.$gradeqryfetch['ps_mid_1'].'</td>
								<td>'.$gradeqryfetch['ps_mid_2'].'</td>
								<td>'.$gradeqryfetch['ps_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh4_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Inquiries, Investigation and Immersion</td>
								<td>'.$gradeqryfetch['immersion_mid_1'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_2'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;"> Computer System Servicing (4)</td>
								<td>'.$gradeqryfetch['css4_mid_1'].'</td>
								<td>'.$gradeqryfetch['css4_mid_2'].'</td>
								<td>'.$gradeqryfetch['css4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['css4_mid_ave']  >= 75 && $gradeqryfetch['css4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['css4_mid_ave']  >= 0 && $gradeqryfetch['css4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['css4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
								<td>'.$gradeqryfetch['wrcc_mid_1'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_2'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">TVL/Industrial Arts</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to Philosophy of the Human Person</td>
								<td>'.$gradeqryfetch['iphp_mid_1'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_2'].'</td>
								<td>'.$gradeqryfetch['iphp_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 75 && $gradeqryfetch['iphp_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave']  >= 0 && $gradeqryfetch['iphp_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['iphp_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">Understanding Culture Society & Politics</td>
								<td>'.$gradeqryfetch['ucsp_mid_1'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_2'].'</td>
								<td>'.$gradeqryfetch['ucsp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 75 && $gradeqryfetch['ucsp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave']  >= 0 && $gradeqryfetch['ucsp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ucsp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh3_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 75 && $gradeqryfetch['peh3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave']  >= 0 && $gradeqryfetch['peh3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">English for Academic & Professional Purpose</td>
								<td>'.$gradeqryfetch['eapp_mid_1'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_2'].'</td>
								<td>'.$gradeqryfetch['eapp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 75 && $gradeqryfetch['eapp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave']  >= 0 && $gradeqryfetch['eapp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eapp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Practical Research 2</td>
								<td>'.$gradeqryfetch['practical2_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 75 && $gradeqryfetch['practical2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave']  >= 0 && $gradeqryfetch['practical2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['practical2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;"> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</td>
								<td>'.$gradeqryfetch['fpl_mid_1'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_2'].'</td>
								<td>'.$gradeqryfetch['fpl_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 75 && $gradeqryfetch['fpl_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave']  >= 0 && $gradeqryfetch['fpl_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['fpl_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Electrical Installation and Maintenance (3)</td>
								<td>'.$gradeqryfetch['eim3_mid_1'].'</td>
								<td>'.$gradeqryfetch['eim3_mid_2'].'</td>
								<td>'.$gradeqryfetch['eim3_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eim3_mid_ave']  >= 75 && $gradeqryfetch['eim3_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eim3_mid_ave']  >= 0 && $gradeqryfetch['eim3_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eim3_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 75 && $gradeqryfetch['1st_average_12'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12']  >= 0 && $gradeqryfetch['1st_average_12'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['1st_average_12'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Media & Information Literacy</td>
								<td>'.$gradeqryfetch['mil_mid_1'].'</td>
								<td>'.$gradeqryfetch['mil_mid_2'].'</td>
								<td>'.$gradeqryfetch['mil_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 75 && $gradeqryfetch['mil_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave']  >= 0 && $gradeqryfetch['mil_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['mil_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Science</td>
								<td>'.$gradeqryfetch['ps_mid_1'].'</td>
								<td>'.$gradeqryfetch['ps_mid_2'].'</td>
								<td>'.$gradeqryfetch['ps_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 75 && $gradeqryfetch['ps_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave']  >= 0 && $gradeqryfetch['ps_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['ps_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh4_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 75 && $gradeqryfetch['peh4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave']  >= 0 && $gradeqryfetch['peh4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['peh4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Inquiries, Investigation and Immersion</td>
								<td>'.$gradeqryfetch['immersion_mid_1'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_2'].'</td>
								<td>'.$gradeqryfetch['immersion_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 75 && $gradeqryfetch['immersion_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave']  >= 0 && $gradeqryfetch['immersion_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['immersion_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Electrical Installation and Maintenance (4)</td>
								<td>'.$gradeqryfetch['eim4_mid_1'].'</td>
								<td>'.$gradeqryfetch['eim4_mid_2'].'</td>
								<td>'.$gradeqryfetch['eim4_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eim4_mid_ave']  >= 75 && $gradeqryfetch['eim4_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eim4_mid_ave']  >= 0 && $gradeqryfetch['eim4_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['eim4_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Work Immersion/Research/Career Advocacy/Culminating Activity</td>
								<td>'.$gradeqryfetch['wrcc_mid_1'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_2'].'</td>
								<td>'.$gradeqryfetch['wrcc_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 75 && $gradeqryfetch['wrcc_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave']  >= 0 && $gradeqryfetch['wrcc_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['wrcc_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average_12'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 75 && $gradeqryfetch['2nd_average_12'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12']  >= 0 && $gradeqryfetch['2nd_average_12'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12' && $gradeqryfetch['2nd_average_12'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '12'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">TVL/Industrial Arts</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Oral Communication</td>
								<td>'.$gradeqryfetch['oral_communication_mid_1'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_2'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">General Mathematics</td>
								<td>'.$gradeqryfetch['genmath_mid_1'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_2'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Earth & Life Science</td>
								<td>'.$gradeqryfetch['els_mid_1'].'</td>
								<td>'.$gradeqryfetch['els_mid_2'].'</td>
								<td>'.$gradeqryfetch['els_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
								<td>'.$gradeqryfetch['kpwkp_mid_1'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_2'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">21st Century Literature from the Philippines & the World</td>
								<td>'.$gradeqryfetch['century_literature_mid_1'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_2'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Personal Development</td>
								<td>'.$gradeqryfetch['personal_mid_development_1'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_2'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Empowerment Technologies</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Electrical Installation and Maintenance (1)</td>
								<td>'.$gradeqryfetch['eim_mid_1'].'</td>
								<td>'.$gradeqryfetch['eim_mid_2'].'</td>
								<td>'.$gradeqryfetch['eim_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['eim_mid_ave']  >= 75 && $gradeqryfetch['eim_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['eim_mid_ave']  >= 0 && $gradeqryfetch['eim_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['eim_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Reading & Writing</td>
								<td>'.$gradeqryfetch['reading_mid_1'].'</td>
								<td>'.$gradeqryfetch['reading_mid_2'].'</td>
								<td>'.$gradeqryfetch['reading_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Pagbasa at Pagsusuri ng Iba`t Tekso Tungo sa Pananaliksik</td>
								<td>'.$gradeqryfetch['pptp_mid_1'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_2'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Statistic & Probability</td>
								<td>'.$gradeqryfetch['statistic_mid_1'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_2'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Contemporary Arts from the Region</td>
								<td>'.$gradeqryfetch['contemporary_mid_1'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_2'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<<td>'.$gradeqryfetch['peh2_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Practical Research 1</td>
								<td>'.$gradeqryfetch['practical_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Entrepreneurship</td>
								<td>'.$gradeqryfetch['entrep_mid_1'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_2'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Electrical Installation and Maintenance (2)</td>
								<td>'.$gradeqryfetch['eim2_mid_1'].'</td>
								<td>'.$gradeqryfetch['eim2_mid_2'].'</td>
								<td>'.$gradeqryfetch['eim2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['eim2_mid_ave']  >= 75 && $gradeqryfetch['eim2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['eim2_mid_ave']  >= 0 && $gradeqryfetch['eim2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['eim2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'IA' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">TVL/Home Economics</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Oral Communication</td>
								<td>'.$gradeqryfetch['oral_communication_mid_1'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_2'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">General Mathematics</td>
								<td>'.$gradeqryfetch['genmath_mid_1'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_2'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Earth & Life Science</td>
								<td>'.$gradeqryfetch['els_mid_1'].'</td>
								<td>'.$gradeqryfetch['els_mid_2'].'</td>
								<td>'.$gradeqryfetch['els_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
								<td>'.$gradeqryfetch['kpwkp_mid_1'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_2'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">21st Century Literature from the Philippines & the World</td>
								<td>'.$gradeqryfetch['century_literature_mid_1'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_2'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Personal Development</td>
								<td>'.$gradeqryfetch['personal_mid_development_1'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_2'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Empowerment Technologies</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Cookery (1)</td>
								<td>'.$gradeqryfetch['cookery_mid_1'].'</td>
								<td>'.$gradeqryfetch['cookery_mid_2'].'</td>
								<td>'.$gradeqryfetch['cookery_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['cookery_mid_ave']  >= 75 && $gradeqryfetch['cookery_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['cookery_mid_ave']  >= 0 && $gradeqryfetch['cookery_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['cookery_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Reading & Writing</td>
								<td>'.$gradeqryfetch['reading_mid_1'].'</td>
								<td>'.$gradeqryfetch['reading_mid_2'].'</td>
								<td>'.$gradeqryfetch['reading_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Pagbasa at Pagsusuri ng Iba`t Tekso Tungo sa Pananaliksik</td>
								<td>'.$gradeqryfetch['pptp_mid_1'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_2'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Statistic & Probability</td>
								<td>'.$gradeqryfetch['statistic_mid_1'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_2'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Contemporary Arts from the Region</td>
								<td>'.$gradeqryfetch['contemporary_mid_1'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_2'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<<td>'.$gradeqryfetch['peh2_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Practical Research 1</td>
								<td>'.$gradeqryfetch['practical_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Entrepreneurship</td>
								<td>'.$gradeqryfetch['entrep_mid_1'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_2'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Cookery (2)</td>
								<td>'.$gradeqryfetch['cookery2_mid_1'].'</td>
								<td>'.$gradeqryfetch['cookery2_mid_2'].'</td>
								<td>'.$gradeqryfetch['cookery2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['cookery2_mid_ave']  >= 75 && $gradeqryfetch['cookery2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['cookery2_mid_ave']  >= 0 && $gradeqryfetch['cookery2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['cookery2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HE' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">TVL/Information and Communications Technology</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Oral Communication</td>
								<td>'.$gradeqryfetch['oral_communication_mid_1'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_2'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">General Mathematics</td>
								<td>'.$gradeqryfetch['genmath_mid_1'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_2'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Earth & Life Science</td>
								<td>'.$gradeqryfetch['els_mid_1'].'</td>
								<td>'.$gradeqryfetch['els_mid_2'].'</td>
								<td>'.$gradeqryfetch['els_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
								<td>'.$gradeqryfetch['kpwkp_mid_1'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_2'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">21st Century Literature from the Philippines & the World</td>
								<td>'.$gradeqryfetch['century_literature_mid_1'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_2'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Personal Development</td>
								<td>'.$gradeqryfetch['personal_mid_development_1'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_2'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Empowerment Technologies</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Computer System Servicing (1)</td>
								<td>'.$gradeqryfetch['css1_mid_1'].'</td>
								<td>'.$gradeqryfetch['css1_mid_2'].'</td>
								<td>'.$gradeqryfetch['css1_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['css1_mid_ave']  >= 75 && $gradeqryfetch['css1_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['css1_mid_ave']  >= 0 && $gradeqryfetch['css1_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['css1_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Reading & Writing</td>
								<td>'.$gradeqryfetch['reading_mid_1'].'</td>
								<td>'.$gradeqryfetch['reading_mid_2'].'</td>
								<td>'.$gradeqryfetch['reading_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Pagbasa at Pagsusuri ng Iba`t Tekso Tungo sa Pananaliksik</td>
								<td>'.$gradeqryfetch['pptp_mid_1'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_2'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Statistic & Probability</td>
								<td>'.$gradeqryfetch['statistic_mid_1'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_2'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Contemporary Arts from the Region</td>
								<td>'.$gradeqryfetch['contemporary_mid_1'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_2'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<<td>'.$gradeqryfetch['peh2_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Practical Research 1</td>
								<td>'.$gradeqryfetch['practical_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Entrepreneurship</td>
								<td>'.$gradeqryfetch['entrep_mid_1'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_2'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Computer System Servicing (2)</td>
								<td>'.$gradeqryfetch['css2_mid_1'].'</td>
								<td>'.$gradeqryfetch['css2_mid_2'].'</td>
								<td>'.$gradeqryfetch['css2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['css2_mid_ave']  >= 75 && $gradeqryfetch['css2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['css2_mid_ave']  >= 0 && $gradeqryfetch['css2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['css2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ICT' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">Humanities and Social Sciences</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Oral Communication</td>
								<td>'.$gradeqryfetch['oral_communication_mid_1'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_2'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">General Mathematics</td>
								<td>'.$gradeqryfetch['genmath_mid_1'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_2'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Earth & Life Science</td>
								<td>'.$gradeqryfetch['els_mid_1'].'</td>
								<td>'.$gradeqryfetch['els_mid_2'].'</td>
								<td>'.$gradeqryfetch['els_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
								<td>'.$gradeqryfetch['kpwkp_mid_1'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_2'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">21st Century Literature from the Philippines & the World</td>
								<td>'.$gradeqryfetch['century_literature_mid_1'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_2'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Personal Development</td>
								<td>'.$gradeqryfetch['personal_mid_development_1'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_2'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Empowerment Technologies</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Introduction to World Religion and Belief System</td>
								<td>'.$gradeqryfetch['introduction_mid_1'].'</td>
								<td>'.$gradeqryfetch['introduction_mid_2'].'</td>
								<td>'.$gradeqryfetch['introduction_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['introduction_mid_ave']  >= 75 && $gradeqryfetch['introduction_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['introduction_mid_ave']  >= 0 && $gradeqryfetch['introduction_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['introduction_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Reading & Writing</td>
								<td>'.$gradeqryfetch['reading_mid_1'].'</td>
								<td>'.$gradeqryfetch['reading_mid_2'].'</td>
								<td>'.$gradeqryfetch['reading_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Pagbasa at Pagsusuri ng Iba`t Tekso Tungo sa Pananaliksik</td>
								<td>'.$gradeqryfetch['pptp_mid_1'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_2'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Statistic & Probability</td>
								<td>'.$gradeqryfetch['statistic_mid_1'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_2'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Contemporary Arts from the Region</td>
								<td>'.$gradeqryfetch['contemporary_mid_1'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_2'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<<td>'.$gradeqryfetch['peh2_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Practical Research 1</td>
								<td>'.$gradeqryfetch['practical_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Entrepreneurship</td>
								<td>'.$gradeqryfetch['entrep_mid_1'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_2'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Humanities 1 (Creative Writing)</td>
								<td>'.$gradeqryfetch['humanities_mid_1'].'</td>
								<td>'.$gradeqryfetch['humanities_mid_2'].'</td>
								<td>'.$gradeqryfetch['humanities_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['humanities_mid_ave']  >= 75 && $gradeqryfetch['humanities_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['humanities_mid_ave']  >= 0 && $gradeqryfetch['humanities_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['humanities_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
							<td style="font-weight:normal;">Social Science (Philippine Politics & Governance)</td>
							<td>'.$gradeqryfetch['social_mid_1'].'</td>
								<td>'.$gradeqryfetch['social_mid_2'].'</td>
								<td>'.$gradeqryfetch['social_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['social_mid_ave']  >= 75 && $gradeqryfetch['social_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['social_mid_ave']  >= 0 && $gradeqryfetch['social_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['social_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
						</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'HUMSS' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">Science, Technology, Engineering, and Mathematics</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Oral Communication</td>
								<td>'.$gradeqryfetch['oral_communication_mid_1'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_2'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">General Mathematics</td>
								<td>'.$gradeqryfetch['genmath_mid_1'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_2'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Earth & Life Science</td>
								<td>'.$gradeqryfetch['els_mid_1'].'</td>
								<td>'.$gradeqryfetch['els_mid_2'].'</td>
								<td>'.$gradeqryfetch['els_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
								<td>'.$gradeqryfetch['kpwkp_mid_1'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_2'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">21st Century Literature from the Philippines & the World</td>
								<td>'.$gradeqryfetch['century_literature_mid_1'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_2'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Personal Development</td>
								<td>'.$gradeqryfetch['personal_mid_development_1'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_2'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Empowerment Technologies</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Pre-calculus</td>
								<td>'.$gradeqryfetch['precal_mid_1'].'</td>
								<td>'.$gradeqryfetch['precal_mid_2'].'</td>
								<td>'.$gradeqryfetch['precal_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['precal_mid_ave']  >= 75 && $gradeqryfetch['precal_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['precal_mid_ave']  >= 0 && $gradeqryfetch['precal_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['precal_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Reading & Writing</td>
								<td>'.$gradeqryfetch['reading_mid_1'].'</td>
								<td>'.$gradeqryfetch['reading_mid_2'].'</td>
								<td>'.$gradeqryfetch['reading_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Pagbasa at Pagsusuri ng Iba`t Tekso Tungo sa Pananaliksik</td>
								<td>'.$gradeqryfetch['pptp_mid_1'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_2'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Statistic & Probability</td>
								<td>'.$gradeqryfetch['statistic_mid_1'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_2'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Contemporary Arts from the Region</td>
								<td>'.$gradeqryfetch['contemporary_mid_1'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_2'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<<td>'.$gradeqryfetch['peh2_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Practical Research 1</td>
								<td>'.$gradeqryfetch['practical_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Entrepreneurship</td>
								<td>'.$gradeqryfetch['entrep_mid_1'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_2'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Basic Calculos</td>
								<td>'.$gradeqryfetch['basic_mid_1'].'</td>
								<td>'.$gradeqryfetch['basic_mid_2'].'</td>
								<td>'.$gradeqryfetch['basic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['basic_mid_ave']  >= 75 && $gradeqryfetch['basic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['basic_mid_ave']  >= 0 && $gradeqryfetch['basic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['basic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
							<td style="font-weight:normal;">General Biology (1)</td>
							<td>'.$gradeqryfetch['biology_mid_1'].'</td>
								<td>'.$gradeqryfetch['biology_mid_2'].'</td>
								<td>'.$gradeqryfetch['biology_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['biology_mid_ave']  >= 75 && $gradeqryfetch['biology_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['biology_mid_ave']  >= 0 && $gradeqryfetch['biology_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['biology_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
						</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'STEM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}
								if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11'){
									echo '    
	<div class="container-fluid">
		<div class="row " style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<h5 style="text-indent:225px;" style="font-size:16px;"><strong>REPORT ON ATTENDANCE</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table4">
							<tr>
								<th style="font-weight:normal;">Month</th>
								<th style="font-weight:normal;">Sep.</th>
								<th style="font-weight:normal;">Oct.</th>
								<th style="font-weight:normal;">Nov.</th>
								<th style="font-weight:normal;">Dec.</th>
								<th style="font-weight:normal;">Jan.</th>
								<th style="font-weight:normal;">Feb.</th>
								<th style="font-weight:normal;">Mar.</th>
								<th style="font-weight:normal;">Apr.</th>
								<th style="font-weight:normal;">May</th>
								<th style="font-weight:normal;">June</th>
								<th style="font-weight:normal;">July</th>
								<th style="font-weight:normal;">Total</th>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of School Days</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Present </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-style:italic;font-weight:normal;">No. of Days Absent </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5 style="text-indent:150px;"><strong>PARENT/ GAURDIAN"S SIGNATURE</strong></h5>
						<table>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FIRST QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">SECOND QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">THIRD QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
							<tr>
								<td style="width:150px;padding:15px 5px; padding-bottom:0px;">FOURTH QUARTER</td>
								<td><input type="text" class="input-line" style="width:250px;border-bottom:2px solid black;" /></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 15px;">
				<div class="row ">
					<div class="col-sm-12">
						<i>DepEd SF9-SHS</i>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-3 text-right">
						<img src="images/icons/deped-icon.jpg ?>" style="width:75px; height:75px;border-radius:50%;" />
					</div>
					<div class="col-sm-6 ctr" style="line-height:14px;font-size:11px;">
						<center>
							<table class="ctr">
								<tr>
									<td> Republic of the Philippines</td>
								</tr>
								<tr>
									<td>Department of Education</td>
								</tr>
								<tr>
									<td>Region VIII</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>Division of Southern Leyte</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>San Juan District</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td style="border-bottom:1px solid black; line-height: 0px;">
										<h5><strong>SAN JUAN NATIONAL HIGH SCHOOL</strong></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SCHOOL ID: <strong>303481</strong></h5>
									</td>
								</tr>
							</table>
						</center>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;">
							<tr>
								<td style="width:20%;font-size:12px;">Name:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename'].' '.$gradeqryfetch['lastname'].'</td>	
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Age:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Sex:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['sex'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">Grade:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['year'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">Section:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;text-transform: uppercase;font-size:12px;">'.$gradeqryfetch['section'].'</td>
							</tr>
							<tr>
								<td style="width:15%;font-size:12px;">LRN:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;">'.$gradeqryfetch['lrn'].'</td>
								<td style="width:20%;padding-left:10px;font-size:12px;">School Year:</td>
								<td style="width:30%;border-bottom:1px solid;font-weight:bold;font-size:12px;"></td>
							</tr>
							<tr>
								<td style="width:20%;font-size:12px;">Track/Strand:</td>
								<td colspan=3 style="border-bottom:1px solid;font-weight:bold;font-size:12px;">Accountancy, Business and Management</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-11" style="font-style:italic;font-size:10px;">
						Dear Parent:
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">This report card shows the ability and progress your child has made in the different learning areas as well as his/her core values.</p>
						<p style="text-indent:40px;text-align:justify;font-style:italic;font-size:10px;">The school welcomes you should you desire to know more about your child"s progress.</p>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr col-sm-offset-6 ">
						<table style="width:100%;">
						<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;"></td>
							</tr>
							<tr>
								<td style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-5 ctr ">
						<table style="width:100%;">
							<tr>
								<td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;font-size:11px;">RINA LIGAYA D. MERQUITA</td>
							</tr>
							<tr>
								<td style="font-size:10px;">PRINCIPAL II</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<strong style="font-size:10px;">CERTIFICATE OF TRANSFER</strong>
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-11">
						<table style="width:100%;font-size:10px;">
							<tr>
								<td style="width:25%;font-size:10px;">Admitted&nbsp;to&nbsp;Grade:</td>
								<td style="width:25%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
								<td style="width:15%;font-size:10px;">Section: </td>
								<td style="width:35%;"><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=2 style="font-size:10px;">Eligibility for Admission to Grade:</td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-size:10px;" /></td>
							</tr>
							<tr>
								<td colspan=4 style="font-size:10px;">Approved:</td>
							</tr>
						<tr>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;text-align: center;" value = "RINA LIGAYA D. MERQUITA"/></td>
								<td colspan=2><input type="text" class="input-line" style="border-bottom:1px solid black;font-weight:bold;text-transform: uppercase;font-size:10px;" /></td>	
							</tr>
							<tr>
								<td colspan=2 class="ctr" style="font-size:10px;">PRINCIPAL II</td>
								<td colspan=2 class="ctr" style="font-size:10px;">Adviser</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<div class="row ">
					<div class="col-sm-12 ctr ">
						Cancellation of Eligibility to Transfer
					</div>
				</div>
				<div class="row ">
					<div class="col-sm-12 ctr ">
						<table>
							<tr>
								<td style="text-align:left;">Admitted&nbsp;in:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
							</tr>
							<tr>
								<td style="text-align:left;">Date:</td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;" /></td>
								<td style="width:100px;"></td>
								<td><input type="text" class="input-line" style="border-bottom:1px solid black;;width:200px;font-weight:bold;text-transform: uppercase;text-align: center;" value = "RINA LIGAYA D. MERQUITA" /></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan=3></td>
								<td class="ctr">PRINCIPAL II<br />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- BACK PAGE -->
		<div class="row" style="padding:15px 25px;">
			<div class="bandpaper col-sm-6" style="padding:20px 25px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<h5 style="font-size:11px;"><strong>FIRST SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
					<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">1</td>
								<td style="width:50px;">2</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Oral Communication</td>
								<td>'.$gradeqryfetch['oral_communication_mid_1'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_2'].'</td>
								<td>'.$gradeqryfetch['oral_communication_mid_ave'].'</td>
								';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 75 && $gradeqryfetch['oral_communication_mid_ave'] <= 100){
									echo'
								<td style="font-weight:normal;">Passed</td>
								';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave']  >= 0 && $gradeqryfetch['oral_communication_mid_ave'] <= 74){
								echo '
									<td style="font-weight:normal;">Failed</td>
									';
								}
								else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['oral_communication_mid_ave'] == ""){
									echo '
									<td style="font-weight:normal;"></td>
									';
								}
								if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
									echo '
									
							</tr>
							<tr>
								<td style="font-weight:normal;">General Mathematics</td>
								<td>'.$gradeqryfetch['genmath_mid_1'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_2'].'</td>
								<td>'.$gradeqryfetch['genmath_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 75 && $gradeqryfetch['genmath_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave']  >= 0 && $gradeqryfetch['genmath_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['genmath_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Earth & Life Science</td>
								<td>'.$gradeqryfetch['els_mid_1'].'</td>
								<td>'.$gradeqryfetch['els_mid_2'].'</td>
								<td>'.$gradeqryfetch['els_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 75 && $gradeqryfetch['els_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave']  >= 0 && $gradeqryfetch['els_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['els_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Kumunikasyon at Pananaliksik sa Wika at Kulturang Filipino</td>
								<td>'.$gradeqryfetch['kpwkp_mid_1'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_2'].'</td>
								<td>'.$gradeqryfetch['kpwkp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 75 && $gradeqryfetch['kpwkp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave']  >= 0 && $gradeqryfetch['kpwkp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['kpwkp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">21st Century Literature from the Philippines & the World</td>
								<td>'.$gradeqryfetch['century_literature_mid_1'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_2'].'</td>
								<td>'.$gradeqryfetch['century_literature_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 75 && $gradeqryfetch['century_literature_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave']  >= 0 && $gradeqryfetch['century_literature_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['century_literature_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Personal Development</td>
								<td>'.$gradeqryfetch['personal_mid_development_1'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_2'].'</td>
								<td>'.$gradeqryfetch['personal_mid_development_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 75 && $gradeqryfetch['personal_mid_development_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave']  >= 0 && $gradeqryfetch['personal_mid_development_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['personal_mid_development_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<td>'.$gradeqryfetch['peh_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 75 && $gradeqryfetch['peh_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave']  >= 0 && $gradeqryfetch['peh_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Empowerment Technologies</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_1'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_2'].'</td>
								<td>'.$gradeqryfetch['empowerment_tech_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 75 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave']  >= 0 && $gradeqryfetch['empowerment_tech_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['empowerment_tech_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Organization & Management</td>
								<td>'.$gradeqryfetch['organization_mid_1'].'</td>
								<td>'.$gradeqryfetch['organization_mid_2'].'</td>
								<td>'.$gradeqryfetch['organization_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['organization_mid_ave']  >= 75 && $gradeqryfetch['organization_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['organization_mid_ave']  >= 0 && $gradeqryfetch['organization_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['organization_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['1st_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 75 && $gradeqryfetch['1st_average'] <= 100){
								echo'
							<td style="font-weight: bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average']  >= 0 && $gradeqryfetch['1st_average'] <= 74){
							echo '
								<td style="font-weight: bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['1st_average'] == ""){
								echo '
								<td style="font-weight: bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Modular(Print)</td>
							</tr>
						</table>
					</div>
				</div>
				<h5 style="font-size:11px;"><strong>SECOND SEMESTER</strong></h5>
				<div class="row">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr style="font-weight:bold;">
								<td rowspan=2 style="width:250px;text-align:center;">Subject</td>
								<td colspan=2 style="width:50px;">Quarter</td>
								<td rowspan=2 style="width:50px;">Final Grade</td>
								<td rowspan=2 style="width:50px;">Remarks</td>
							</tr>
							<tr style="font-weight:bold;">
							</tr>
							<tr>
								<td></td>
								<td style="width:50px;">3</td>
								<td style="width:50px;">4</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Core Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Reading & Writing</td>
								<td>'.$gradeqryfetch['reading_mid_1'].'</td>
								<td>'.$gradeqryfetch['reading_mid_2'].'</td>
								<td>'.$gradeqryfetch['reading_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 75 && $gradeqryfetch['reading_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave']  >= 0 && $gradeqryfetch['reading_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['reading_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Pagbasa at Pagsusuri ng Iba`t Tekso Tungo sa Pananaliksik</td>
								<td>'.$gradeqryfetch['pptp_mid_1'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_2'].'</td>
								<td>'.$gradeqryfetch['pptp_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 75 && $gradeqryfetch['pptp_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave']  >= 0 && $gradeqryfetch['pptp_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['pptp_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Statistic & Probability</td>
								<td>'.$gradeqryfetch['statistic_mid_1'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_2'].'</td>
								<td>'.$gradeqryfetch['statistic_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 75 && $gradeqryfetch['statistic_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave']  >= 0 && $gradeqryfetch['statistic_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['statistic_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Contemporary Arts from the Region</td>
								<td>'.$gradeqryfetch['contemporary_mid_1'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_2'].'</td>
								<td>'.$gradeqryfetch['contemporary_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 75 && $gradeqryfetch['contemporary_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave']  >= 0 && $gradeqryfetch['contemporary_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['contemporary_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Physical Education & Health</td>
								<<td>'.$gradeqryfetch['peh2_mid_1'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_2'].'</td>
								<td>'.$gradeqryfetch['peh2_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 75 && $gradeqryfetch['peh2_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave']  >= 0 && $gradeqryfetch['peh2_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['peh2_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Applied Subjects</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Practical Research 1</td>
								<td>'.$gradeqryfetch['practical_mid_1'].'</td>
								<td>'.$gradeqryfetch['practical_mid_2'].'</td>
								<td>'.$gradeqryfetch['practical_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 75 && $gradeqryfetch['practical_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave']  >= 0 && $gradeqryfetch['practical_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['practical_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:normal;">Entrepreneurship</td>
								<td>'.$gradeqryfetch['entrep_mid_1'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_2'].'</td>
								<td>'.$gradeqryfetch['entrep_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 75 && $gradeqryfetch['entrep_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave']  >= 0 && $gradeqryfetch['entrep_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['entrep_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="font-weight:bold;font-style:italic;">Specialization</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="font-weight:normal;">Fundamentals of ABM 1</td>
								<td>'.$gradeqryfetch['fundamentals_mid_1'].'</td>
								<td>'.$gradeqryfetch['fundamentals_mid_2'].'</td>
								<td>'.$gradeqryfetch['fundamentals_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['fundamentals_mid_ave']  >= 75 && $gradeqryfetch['fundamentals_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['fundamentals_mid_ave']  >= 0 && $gradeqryfetch['fundamentals_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['fundamentals_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
							<td style="font-weight:normal;">Principles of Marketing</td>
							<td>'.$gradeqryfetch['principles_mid_1'].'</td>
								<td>'.$gradeqryfetch['principles_mid_2'].'</td>
								<td>'.$gradeqryfetch['principles_mid_ave'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['principles_mid_ave']  >= 75 && $gradeqryfetch['principles_mid_ave'] <= 100){
								echo'
							<td style="font-weight:normal;">Passed</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['principles_mid_ave']  >= 0 && $gradeqryfetch['principles_mid_ave'] <= 74){
							echo '
								<td style="font-weight:normal;">Failed</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['principles_mid_ave'] == ""){
								echo '
								<td style="font-weight:normal;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
						</tr>
							<tr>
								<td style="text-align: right;">General Average</td>
								<td colspan="2"></td>
								<td>'.$gradeqryfetch['2nd_average'].'</td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 75 && $gradeqryfetch['2nd_average'] <= 100){
								echo'
							<td style="font-weight:bold;">PROMOTED</td>
							';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average']  >= 0 && $gradeqryfetch['2nd_average'] <= 74){
							echo '
								<td style="font-weight:bold;">FAILED</td>
								';
							}
							else if ($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11' && $gradeqryfetch['2nd_average'] == ""){
								echo '
								<td style="font-weight:bold;"></td>
								';
							}
							if($gradeqryfetch['strand'] == 'ABM' && $gradeqryfetch['year'] == '11'){
								echo '
							</tr>
							<tr>
								<td style="text-align: left;height: 20px;font-size:8px;">Learning Modality:</td>
								<td colspan="4" style="font-weight:normal;text-align:center;">Blended(Modular,Print)/Face to Face</td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="bandpaper col-sm-6" style="padding:20px 55px;">
				<br />
				<center>
					<h5 style="font-size:11px;"><strong>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</strong></h5>
				</center>
				<br />
				<div class="row ">
					<div class="col-sm-12">
						<table class="table5" style="width:100%;">
							<tr>
								<td rowspan=2 style="text-align:center;width:120px;font-weight:normal;"> CORE VALUES </td>
								<td rowspan=2 style="font-weight:normal;"> BEHAVIOR STATEMENT </td>
								<td colspan=4 style="font-weight:normal;"> QUARTER </td>
							</tr>
							<tr>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>1</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>2</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>3</center>
								</td>
								<td style="text-align:left;width:40px;font-weight:normal;">
									<center>4</center>
								</td>
							</tr>
							<tr>
								<td rowspan=1 style="font-weight:normal;">1. Maka-Diyos</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Expresses one"s spiritual beliefs while respecting the spiritual belief of others.</td>
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
							<td rowspan=2 style="font-weight:normal;">2. Makatao</td>
							<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
								Shows adherence to ethical principles by upholding the truth in all undertakings.
							</td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							<td class="up"></td>
							</tr>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Is sensitive to individual, social and cultural differences; resist stereotyping people.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-weight:normal;">3. Makakalikasan</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Cares for the environment and utilizes resources wisely, judiciously, and economically.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td rowspan=2 style="font-weight:normal;">4. Makabansa</td>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrates pride in being a Filipino, exercises the right and responsibilities of a Filipino citizen.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							<tr>
								<td style="font-size:10px;width:250px;text-align:left; padding:10px 8px;font-weight:normal;">
									Demonstrate appropriate behavior in carrying out activities in the school, community and couNtry.
								</td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
								<td class="up"></td>
							</tr>
						</table>
						<br />
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-size:12px;">Observed Values</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Non-numerical Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">AO</td>
									<td style="border:none;font-weight:normal;">Always Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SO</td>
									<td style="border:none;font-weight:normal;">Sometimes Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">RO</td>
									<td style="border:none;font-weight:normal;">Rarely Observed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">Not Observed</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:150px;font-size:12px;">Homeroom Guidance</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;">Marking</td>
									<td style="border:none;font-weight:bold;">Descriptive Rating</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">DC</td>
									<td style="border:none;font-weight:normal;">Developed and Commendable</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">SD</td>
									<td style="border:none;font-weight:normal;">Sufficiently Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">D</td>
									<td style="border:none;font-weight:normal;">Developed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NI</td>
									<td style="border:none;font-weight:normal;">Needs Improvement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">NO</td>
									<td style="border:none;font-weight:normal;">No Chance to Observe</td>
								</tr>
							</table>
						</center>
						<center>
							<table>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:200px;font-size:12px;">Learner Progress and Achievement</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;width:100px;font-style:italic;">Descriptors</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Grading Scale</td>
									<td style="border:none;font-weight:bold;font-style:italic;text-align:center;">Remarks</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Outstanding</td>
									<td style="border:none;font-weight:normal;">90-100</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Very Satisfactory</td>
									<td style="border:none;font-weight:normal;">85-89</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Satisfactory</td>
									<td style="border:none;font-weight:normal;">80-84</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Fairly Satisfactory</td>
									<td style="border:none;font-weight:normal;">75-79</td>
									<td style="border:none;font-weight:normal;">Passed</td>
								</tr>
								<tr>
									<td style="border:none;width:70px;font-weight:bold;text-align:center;font-weight:normal;">Did Not Meet Expectation</td>
									<td style="border:none;font-weight:normal;">below 75</td>
									<td style="border:none;font-weight:normal;">Failed</td>
								</tr>
							</table>
						</center>
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
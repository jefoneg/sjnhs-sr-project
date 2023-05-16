<?php session_start();

  if(!isset($_SESSION['teacherusername'])){
    header('location:index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en"> 

    <title>SJNHS-IS | Dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="300;url=logout.php" />
      
    <link rel="icon" type="image/png" sizes="48x48" href="assets/images/sjnhs_logo.png">
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <!--//col-->
		            
		            <div class="app-utilities col-auto">
			            <!--//app-utility-item-->
			            <div class="app-utility-item">
				            <a href="settings.php" title="Settings">
					            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg>
					        </a>
					    </div><!--//app-utility-item-->
			            
			            <div class="app-utility-item app-user-dropdown dropdown">
						<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img class="img-profile rounded-circle" src="assets/images/users/<?php echo $_SESSION['teacherprofile'];?>" alt="user profile" width="70px" height="70px"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="settings.php">Account</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="logout.php">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="admin_dashboard.php"><img class="logo-icon me-2" src="assets/images/sjnhs_logo.png" alt="logo"><span class="logo-text">SJNHS - IS</span></a>
	
		        </div><!--//app-branding-->  
		        
                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="teacher_dashboard.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Student`s Dashboard</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->				    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="settings.php">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
	  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Settings</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
					    </ul><!--//footer-menu-->
				    </nav>
			    </div><!--//app-sidepanel-footer-->
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Student Grades</h1>
			    
			    <!--//app-card-->
			    <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        <!--//col-->
					       
                            <?php 
                              include 'conn.php';
                              $lrn = $_GET['lrn'];
                              $gradeqry = "SELECT * FROM ict_table WHERE lrn = '$lrn' AND strand = 'ICT';";
                              $gradeqry .= "SELECT * FROM he_table WHERE lrn = '$lrn' AND strand = 'HE';";
                              $gradeqry .= "SELECT * FROM stem_table WHERE lrn = '$lrn' AND strand = 'STEM';";
                              $gradeqry .= "SELECT * FROM humms_table WHERE lrn = '$lrn' AND strand = 'HUMMS';";
                              $gradeqry .= "SELECT * FROM ia_table WHERE lrn = '$lrn' AND strand = 'IA';";
                              $gradeqry .= "SELECT * FROM abm_table WHERE lrn = '$lrn' AND strand = 'ABM';";
                              if(mysqli_multi_query($conn,$gradeqry)){
                                  do{
                                      if($result = mysqli_store_result($conn)){
                              while($gradeqryfetch = mysqli_fetch_array($result)){
                                ?>

                                   <div class="col-12 col-lg-auto text-center text-lg-start">
                                   <h5 class="notification-title mb-1">Name: <?php echo ucwords ($gradeqryfetch['lastname'].', '.$gradeqryfetch['firstname'].' '.$gradeqryfetch['middlename']); ?></h5>
                                   <h5 class="notification-title mb-1" style="text-transform: capitalize;">Year & Section: <?php echo($gradeqryfetch['strand'].'-'.$gradeqryfetch['year'].'-'.$gradeqryfetch['section']); ?></h5>
                               </div>
                              
                           <?php }
                        }
                        mysqli_free_result($result);
                    }while(mysqli_next_result($conn));
                }
                            ?>
                            <h5></h5>
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <?php 
                            include 'conn.php';
                            $lrn = $_GET['lrn'];
                            $gradeqry = "SELECT * FROM ict_table WHERE lrn='$lrn';";
                            $gradeqry .= "SELECT * FROM he_table WHERE lrn='$lrn';";
                            $gradeqry .= "SELECT * FROM stem_table WHERE lrn='$lrn';";
                            $gradeqry .= "SELECT * FROM humms_table WHERE lrn='$lrn';";
                            $gradeqry .= "SELECT * FROM ia_table WHERE lrn='$lrn';";
                            $gradeqry .= "SELECT * FROM abm_table WHERE lrn='$lrn';";
                            if(mysqli_multi_query($conn,$gradeqry)){
                                do{
                                    if($result = mysqli_store_result($conn)){
                            while($gradeqryfetch = mysqli_fetch_array($result)){
                                if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "ICT"){
                                    echo '	
                            <form role="form" method="POST" action="add_grades_ict11_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                <div>
                                    <h1>Information Communication Technology (ICT)</h1>
                                    <h5>' .$gradeqryfetch['semester']. '</h5>
                                </div>
                                <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Oral Communication in Context</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="oral_communication_mid_1" onkeyup="total()" value="'.$gradeqryfetch['oral_communication_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="oral_communication_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['oral_communication_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="oral_communication_mid_ave"  value="'.$gradeqryfetch['oral_communication_mid_ave'].'" readonly="true">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="kpwkp_mid_1"  value="'.$gradeqryfetch['kpwkp_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="kpwkp_mid_2" value="'.$gradeqryfetch['kpwkp_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="kpwkp_mid_ave" value="'.$gradeqryfetch['kpwkp_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> General Mathematics</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="genmath_mid_1" value="'.$gradeqryfetch['genmath_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="genmath_mid_2" value="'.$gradeqryfetch['genmath_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="genmath_mid_ave" value="'.$gradeqryfetch['genmath_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Personal Development</label>
                                            <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="personal_mid_development_1" value="'.$gradeqryfetch['personal_mid_development_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="personal_mid_development_2" value="'.$gradeqryfetch['personal_mid_development_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="personal_mid_development_ave" value="'.$gradeqryfetch['personal_mid_development_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> 21st Century Literature from the Philippines & the World</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="century_literature_mid_1" value="'.$gradeqryfetch['century_literature_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="century_literature_mid_2" value="'.$gradeqryfetch['century_literature_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="century_literature_mid_ave" value="'.$gradeqryfetch['century_literature_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Earth, Life and Science</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="els_mid_1" value="'.$gradeqryfetch['els_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="els_mid_2" value="'.$gradeqryfetch['els_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="els_mid_ave" value="'.$gradeqryfetch['els_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 1</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh_mid_1" value="'.$gradeqryfetch['peh_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh_mid_2" value="'.$gradeqryfetch['peh_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="peh_mid_ave" value="'.$gradeqryfetch['peh_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>APPLIED: </strong> Empowerment Technologies </label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="empowerment_tech_mid_1" value="'.$gradeqryfetch['empowerment_tech_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="empowerment_tech_mid_2" value="'.$gradeqryfetch['empowerment_tech_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="empowerment_tech_mid_ave" value="'.$gradeqryfetch['empowerment_tech_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>SPECIALIZED:</strong>Computer System Servicing (1)</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="css1_mid_1" value="'.$gradeqryfetch['css1_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="css1_mid_2" value="'.$gradeqryfetch['css1_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="css1_mid_ave" value="'.$gradeqryfetch['css1_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                                <div class="col-md-4">
                                                <label><strong>General Ave. for the Semester:</strong></label>
                                                <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average" value="'.$gradeqryfetch['1st_average'].'" readonly>
                                                </div>
                                            </div>
                                <div class="bg-light clearfix">  
                                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                </div>
                                </form>
                                        ';
                                    }
                                    else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "HE"){
                                        echo '	
                                <form role="form" method="POST" action="add_grades_he11_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                    <div>
                                        <h1>Home Economics (HE)</h1>
                                        <h5>' .$gradeqryfetch['semester']. '</h5>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> Oral Communication in Context</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="oral_communication_mid_1" onkeyup="total()" value="'.$gradeqryfetch['oral_communication_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="oral_communication_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['oral_communication_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="oral_communication_mid_ave"  value="'.$gradeqryfetch['oral_communication_mid_ave'].'" readonly="true">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="kpwkp_mid_1"  value="'.$gradeqryfetch['kpwkp_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="kpwkp_mid_2" value="'.$gradeqryfetch['kpwkp_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="kpwkp_mid_ave" value="'.$gradeqryfetch['kpwkp_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> General Mathematics</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="genmath_mid_1" value="'.$gradeqryfetch['genmath_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="genmath_mid_2" value="'.$gradeqryfetch['genmath_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="genmath_mid_ave" value="'.$gradeqryfetch['genmath_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> Personal Development</label>
                                    <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="personal_mid_development_1" value="'.$gradeqryfetch['personal_mid_development_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="personal_mid_development_2" value="'.$gradeqryfetch['personal_mid_development_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="personal_mid_development_ave" value="'.$gradeqryfetch['personal_mid_development_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> 21st Century Literature from the Philippines & the World</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="century_literature_mid_1" value="'.$gradeqryfetch['century_literature_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="century_literature_mid_2" value="'.$gradeqryfetch['century_literature_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="century_literature_mid_ave" value="'.$gradeqryfetch['century_literature_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> Earth, Life and Science</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="els_mid_1" value="'.$gradeqryfetch['els_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="els_mid_2" value="'.$gradeqryfetch['els_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="els_mid_ave" value="'.$gradeqryfetch['els_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 1</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh_mid_1" value="'.$gradeqryfetch['peh_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh_mid_2" value="'.$gradeqryfetch['peh_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="peh_mid_ave" value="'.$gradeqryfetch['peh_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>APPLIED: </strong> Empowerment Technologies </label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="empowerment_tech_mid_1" value="'.$gradeqryfetch['empowerment_tech_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="empowerment_tech_mid_2" value="'.$gradeqryfetch['empowerment_tech_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="empowerment_tech_mid_ave" value="'.$gradeqryfetch['empowerment_tech_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> Cookery (1)</label>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="cookery_mid_1" value="'.$gradeqryfetch['cookery_mid_1'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="cookery_mid_2" value="'.$gradeqryfetch['cookery_mid_2'].'">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="cookery_mid_ave" value="'.$gradeqryfetch['cookery_mid_ave'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                        <div class="col-md-4">
                                        <label><strong>General Ave. for the Semester:</strong></label>
                                        <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average" value="'.$gradeqryfetch['1st_average'].'" readonly>
                                        </div>
                                    </div>
                                        <div class="bg-light clearfix">  
                                            <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                        </div>
                                        </form>
                                                ';
                                            }
                                            else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "IA"){
                                                echo '	
                                        <form role="form" method="POST" action="add_grades_ia11_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                            <div>
                                                <h1>Industrial Arts (IA)</h1>
                                                <h5>' .$gradeqryfetch['semester']. '</h5>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Oral Communication in Context</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="oral_communication_mid_1" onkeyup="total()" value="'.$gradeqryfetch['oral_communication_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="oral_communication_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['oral_communication_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="oral_communication_mid_ave"  value="'.$gradeqryfetch['oral_communication_mid_ave'].'" readonly="true">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="kpwkp_mid_1"  value="'.$gradeqryfetch['kpwkp_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="kpwkp_mid_2" value="'.$gradeqryfetch['kpwkp_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="kpwkp_mid_ave" value="'.$gradeqryfetch['kpwkp_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> General Mathematics</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="genmath_mid_1" value="'.$gradeqryfetch['genmath_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="genmath_mid_2" value="'.$gradeqryfetch['genmath_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="genmath_mid_ave" value="'.$gradeqryfetch['genmath_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Personal Development</label>
                                            <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="personal_mid_development_1" value="'.$gradeqryfetch['personal_mid_development_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="personal_mid_development_2" value="'.$gradeqryfetch['personal_mid_development_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="personal_mid_development_ave" value="'.$gradeqryfetch['personal_mid_development_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> 21st Century Literature from the Philippines & the World</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="century_literature_mid_1" value="'.$gradeqryfetch['century_literature_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="century_literature_mid_2" value="'.$gradeqryfetch['century_literature_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="century_literature_mid_ave" value="'.$gradeqryfetch['century_literature_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Earth, Life and Science</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="els_mid_1" value="'.$gradeqryfetch['els_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="els_mid_2" value="'.$gradeqryfetch['els_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="els_mid_ave" value="'.$gradeqryfetch['els_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 1</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh_mid_1" value="'.$gradeqryfetch['peh_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh_mid_2" value="'.$gradeqryfetch['peh_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="peh_mid_ave" value="'.$gradeqryfetch['peh_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>APPLIED: </strong> Empowerment Technologies </label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="empowerment_tech_mid_1" value="'.$gradeqryfetch['empowerment_tech_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="empowerment_tech_mid_2" value="'.$gradeqryfetch['empowerment_tech_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="empowerment_tech_mid_ave" value="'.$gradeqryfetch['empowerment_tech_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Electrical Installation and Maintenance (1)</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="eim_mid_1" value="'.$gradeqryfetch['eim_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="eim_mid_2" value="'.$gradeqryfetch['eim_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="eim_mid_ave" value="'.$gradeqryfetch['eim_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                                <div class="col-md-4">
                                                <label><strong>General Ave. for the Semester:</strong></label>
                                                <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average" value="'.$gradeqryfetch['1st_average'].'" readonly>
                                                </div>
                                            </div>
                                                <div class="bg-light clearfix">  
                                                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                                </div>
                                                </form>
                                                        ';
                                                    }
                                            else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "STEM"){
                                                echo '	
                                        <form role="form" method="POST" action="add_grades_stem11_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                            <div>
                                                <h1>Science, Technology, Engineering, and Mathematics  (STEM)</h1>
                                                <h5>' .$gradeqryfetch['semester']. '</h5>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Oral Communication in Context</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="oral_communication_mid_1" onkeyup="total()" value="'.$gradeqryfetch['oral_communication_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="oral_communication_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['oral_communication_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="oral_communication_mid_ave"  value="'.$gradeqryfetch['oral_communication_mid_ave'].'" readonly="true">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="kpwkp_mid_1"  value="'.$gradeqryfetch['kpwkp_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="kpwkp_mid_2" value="'.$gradeqryfetch['kpwkp_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="kpwkp_mid_ave" value="'.$gradeqryfetch['kpwkp_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> General Mathematics</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="genmath_mid_1" value="'.$gradeqryfetch['genmath_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="genmath_mid_2" value="'.$gradeqryfetch['genmath_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="genmath_mid_ave" value="'.$gradeqryfetch['genmath_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Personal Development</label>
                                            <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="personal_mid_development_1" value="'.$gradeqryfetch['personal_mid_development_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="personal_mid_development_2" value="'.$gradeqryfetch['personal_mid_development_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="personal_mid_development_ave" value="'.$gradeqryfetch['personal_mid_development_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> 21st Century Literature from the Philippines & the World</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="century_literature_mid_1" value="'.$gradeqryfetch['century_literature_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="century_literature_mid_2" value="'.$gradeqryfetch['century_literature_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="century_literature_mid_ave" value="'.$gradeqryfetch['century_literature_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Earth, Life and Science</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="els_mid_1" value="'.$gradeqryfetch['els_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="els_mid_2" value="'.$gradeqryfetch['els_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="els_mid_ave" value="'.$gradeqryfetch['els_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 1</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh_mid_1" value="'.$gradeqryfetch['peh_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh_mid_2" value="'.$gradeqryfetch['peh_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="peh_mid_ave" value="'.$gradeqryfetch['peh_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>APPLIED: </strong> Empowerment Technologies </label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="empowerment_tech_mid_1" value="'.$gradeqryfetch['empowerment_tech_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="empowerment_tech_mid_2" value="'.$gradeqryfetch['empowerment_tech_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="empowerment_tech_mid_ave" value="'.$gradeqryfetch['empowerment_tech_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Pre-calculus</label>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="precal_mid_1" value="'.$gradeqryfetch['precal_mid_1'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="precal_mid_2" value="'.$gradeqryfetch['precal_mid_2'].'">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="precal_mid_ave" value="'.$gradeqryfetch['precal_mid_ave'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                                <div class="col-md-4">
                                                <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average" value="'.$gradeqryfetch['1st_average'].'" readonly>
                                                </div>
                                            </div>
                                            <div class="bg-light clearfix">  
                                                <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                            </div>
                                            </form>
                                                    ';
                                                }
                                                else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "HUMSS"){
                                                    echo '	
                                            <form role="form" method="POST" action="add_grades_humms11_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                                <div>
                                                    <h1>Humanities and Social Sciences (HUMSS)</h1>
                                                    <h5>' .$gradeqryfetch['semester']. '</h5>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> Oral Communication in Context</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="oral_communication_mid_1" onkeyup="total()" value="'.$gradeqryfetch['oral_communication_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="oral_communication_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['oral_communication_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="oral_communication_mid_ave"  value="'.$gradeqryfetch['oral_communication_mid_ave'].'" readonly="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="kpwkp_mid_1"  value="'.$gradeqryfetch['kpwkp_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="kpwkp_mid_2" value="'.$gradeqryfetch['kpwkp_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="kpwkp_mid_ave" value="'.$gradeqryfetch['kpwkp_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> General Mathematics</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="genmath_mid_1" value="'.$gradeqryfetch['genmath_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="genmath_mid_2" value="'.$gradeqryfetch['genmath_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="genmath_mid_ave" value="'.$gradeqryfetch['genmath_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> Personal Development</label>
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="personal_mid_development_1" value="'.$gradeqryfetch['personal_mid_development_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="personal_mid_development_2" value="'.$gradeqryfetch['personal_mid_development_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="personal_mid_development_ave" value="'.$gradeqryfetch['personal_mid_development_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> 21st Century Literature from the Philippines & the World</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="century_literature_mid_1" value="'.$gradeqryfetch['century_literature_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="century_literature_mid_2" value="'.$gradeqryfetch['century_literature_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="century_literature_mid_ave" value="'.$gradeqryfetch['century_literature_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> Earth, Life and Science</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="els_mid_1" value="'.$gradeqryfetch['els_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="els_mid_2" value="'.$gradeqryfetch['els_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="els_mid_ave" value="'.$gradeqryfetch['els_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 1</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh_mid_1" value="'.$gradeqryfetch['peh_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh_mid_2" value="'.$gradeqryfetch['peh_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="peh_mid_ave" value="'.$gradeqryfetch['peh_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>APPLIED: </strong> Empowerment Technologies </label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="empowerment_tech_mid_1" value="'.$gradeqryfetch['empowerment_tech_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="empowerment_tech_mid_2" value="'.$gradeqryfetch['empowerment_tech_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="empowerment_tech_mid_ave" value="'.$gradeqryfetch['empowerment_tech_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Introduction to World Religion and Belief System</label>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="introduction_mid_1" value="'.$gradeqryfetch['introduction_mid_1'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="introduction_mid_2" value="'.$gradeqryfetch['introduction_mid_2'].'">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                    <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="introduction_mid_ave" value="'.$gradeqryfetch['introduction_mid_ave'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-4">
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                    <div class="col-md-4">
                                                    <label><strong>General Ave. for the Semester:</strong></label>
                                                    <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average" value="'.$gradeqryfetch['1st_average'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="bg-light clearfix">  
                                                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                                </div>
                                                </form>
                                                        ';
                                                    }
                                                    else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "ABM"){
                                                        echo '	
                                                <form role="form" method="POST" action="add_grades_abm11_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                                    <div>
                                                        <h1>Accountancy, Business and Management(ABM)</h1>
                                                        <h5>' .$gradeqryfetch['semester']. '</h5>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> Oral Communication in Context</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="oral_communication_mid_1" onkeyup="total()" value="'.$gradeqryfetch['oral_communication_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="oral_communication_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['oral_communication_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="oral_communication_mid_ave"  value="'.$gradeqryfetch['oral_communication_mid_ave'].'" readonly="true">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="kpwkp_mid_1"  value="'.$gradeqryfetch['kpwkp_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="kpwkp_mid_2" value="'.$gradeqryfetch['kpwkp_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="kpwkp_mid_ave" value="'.$gradeqryfetch['kpwkp_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> General Mathematics</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="genmath_mid_1" value="'.$gradeqryfetch['genmath_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="genmath_mid_2" value="'.$gradeqryfetch['genmath_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="genmath_mid_ave" value="'.$gradeqryfetch['genmath_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> Personal Development</label>
                                                    <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="personal_mid_development_1" value="'.$gradeqryfetch['personal_mid_development_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="personal_mid_development_2" value="'.$gradeqryfetch['personal_mid_development_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="personal_mid_development_ave" value="'.$gradeqryfetch['personal_mid_development_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> 21st Century Literature from the Philippines & the World</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="century_literature_mid_1" value="'.$gradeqryfetch['century_literature_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="century_literature_mid_2" value="'.$gradeqryfetch['century_literature_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="century_literature_mid_ave" value="'.$gradeqryfetch['century_literature_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> Earth, Life and Science</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="els_mid_1" value="'.$gradeqryfetch['els_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="els_mid_2" value="'.$gradeqryfetch['els_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="els_mid_ave" value="'.$gradeqryfetch['els_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 1</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh_mid_1" value="'.$gradeqryfetch['peh_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh_mid_2" value="'.$gradeqryfetch['peh_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="peh_mid_ave" value="'.$gradeqryfetch['peh_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>APPLIED: </strong> Empowerment Technologies </label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="empowerment_tech_mid_1" value="'.$gradeqryfetch['empowerment_tech_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="empowerment_tech_mid_2" value="'.$gradeqryfetch['empowerment_tech_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="empowerment_tech_mid_ave" value="'.$gradeqryfetch['empowerment_tech_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> Organization & Management (1)</label>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="organization_mid_1" value="'.$gradeqryfetch['organization_mid_1'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="organization_mid_2" value="'.$gradeqryfetch['organization_mid_2'].'">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="organization_mid_ave" value="'.$gradeqryfetch['organization_mid_ave'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                        <div class="col-md-4">
                                                        <label><strong>General Ave. for the Semester:</strong></label>
                                                        <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average" value="'.$gradeqryfetch['1st_average'].'" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light clearfix">  
                                                        <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                                    </div>
                                                    </form>
                                                            ';
                                                        }
                                    else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "ICT"){
                                    echo '	
                                <form role="form" method="POST" action="add_grades_ict11_2.php?lrn='.$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                   <div>
                                    <h1>Information Communication Technology (ICT)</h1>
                                    <h5>' .$gradeqryfetch['semester']. '</h5>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Reading and Writing Skills</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral1_communication_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="reading_mid_1" value="'.$gradeqryfetch['reading_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral1_communication_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="reading_mid_2" value="'.$gradeqryfetch['reading_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral1_communication_mid_ave" placeholder="Average" name="reading_mid_ave" value="'.$gradeqryfetch['reading_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="pptp_mid_1" value="'.$gradeqryfetch['pptp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="pptp_mid_2" value="'.$gradeqryfetch['pptp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp1_mid_ave" placeholder="Average" name="pptp_mid_ave" value="'.$gradeqryfetch['pptp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Contemporary Arts from the Region</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="contemporary_mid_1" value="'.$gradeqryfetch['contemporary_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="contemporary_mid_2" value="'.$gradeqryfetch['contemporary_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath1_mid_ave" placeholder="Average" name="contemporary_mid_ave" value="'.$gradeqryfetch['contemporary_mid_ave'].'" readonly>
                                    </div>
                                </div>
                              <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Statistics and Probability</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal1_mid_development_1" onkeyup = "total1()" placeholder="First Quarter" name="statistic_mid_1" value="'.$gradeqryfetch['statistic_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal1_mid_development_2" onkeyup = "total1()" placeholder="Second Quarter" name="statistic_mid_2" value="'.$gradeqryfetch['statistic_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal1_mid_development_ave" placeholder="Average" name="statistic_mid_ave" value="'.$gradeqryfetch['statistic_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 2</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="peh2_mid_1" value="'.$gradeqryfetch['peh2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="peh2_mid_2" value="'.$gradeqryfetch['peh2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els1_mid_ave" placeholder="Average" name="peh2_mid_ave" value="'.$gradeqryfetch['peh2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 1</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="practical_mid_1" value="'.$gradeqryfetch['practical_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="practical_mid_2" value="'.$gradeqryfetch['practical_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh1_mid_ave" placeholder="Average" name="practical_mid_ave" value="'.$gradeqryfetch['practical_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Entrepreneurship</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment1_tech_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="entrep_mid_1" value="'.$gradeqryfetch['entrep_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment1_tech_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="entrep_mid_2" value="'.$gradeqryfetch['entrep_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment1_tech_mid_ave" placeholder="Average" name="entrep_mid_ave" value="'.$gradeqryfetch['entrep_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Computer System Servicing (2)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css2_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="css2_mid_1" value="'.$gradeqryfetch['css2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css2_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="css2_mid_2" value="'.$gradeqryfetch['css2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css2_mid_ave" placeholder="Average" name="css2_mid_ave" value="'.$gradeqryfetch['css2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                        <div class="col-md-4">
                                                        <label><strong>General Ave. for the Semester:</strong></label>
                                                        <input type="number" class="form-control" id="final1_average" placeholder="Average" name="2nd_average" value="'.$gradeqryfetch['2nd_average'].'" readonly>
                                                        </div>
                                                    </div>
                                <div class="bg-light clearfix">  
                                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                </div>
                                </form>
                                ';
                            }
                            else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "HE"){
                                echo '	
                            <form role="form" method="POST" action="add_grades_he11_2.php?lrn='.$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                               <div>
                                <h1>Home Economics (HE)</h1>
                                <h5>' .$gradeqryfetch['semester']. '</h5>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Reading and Writing Skills</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral1_communication_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="reading_mid_1" value="'.$gradeqryfetch['reading_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral1_communication_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="reading_mid_2" value="'.$gradeqryfetch['reading_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral1_communication_mid_ave" placeholder="Average" name="reading_mid_ave" value="'.$gradeqryfetch['reading_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="pptp_mid_1" value="'.$gradeqryfetch['pptp_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="pptp_mid_2" value="'.$gradeqryfetch['pptp_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp1_mid_ave" placeholder="Average" name="pptp_mid_ave" value="'.$gradeqryfetch['pptp_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Contemporary Arts from the Region</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="contemporary_mid_1" value="'.$gradeqryfetch['contemporary_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="contemporary_mid_2" value="'.$gradeqryfetch['contemporary_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath1_mid_ave" placeholder="Average" name="contemporary_mid_ave" value="'.$gradeqryfetch['contemporary_mid_ave'].'" readonly>
                                </div>
                            </div>
                          <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Statistics and Probability</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal1_mid_development_1" onkeyup = "total1()" placeholder="First Quarter" name="statistic_mid_1" value="'.$gradeqryfetch['statistic_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal1_mid_development_2" onkeyup = "total1()" placeholder="Second Quarter" name="statistic_mid_2" value="'.$gradeqryfetch['statistic_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal1_mid_development_ave" placeholder="Average" name="statistic_mid_ave" value="'.$gradeqryfetch['statistic_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 2</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="els1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="peh2_mid_1" value="'.$gradeqryfetch['peh2_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="els1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="peh2_mid_2" value="'.$gradeqryfetch['peh2_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="els1_mid_ave" placeholder="Average" name="peh2_mid_ave" value="'.$gradeqryfetch['peh2_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 1</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="peh1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="practical_mid_1" value="'.$gradeqryfetch['practical_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="peh1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="practical_mid_2" value="'.$gradeqryfetch['practical_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="peh1_mid_ave" placeholder="Average" name="practical_mid_ave" value="'.$gradeqryfetch['practical_mid_ave'].'" readonly>
                                </div>
                            </div>
                           <div class="row">
                            <label for="validationDefault01"><strong>APPLIED:</strong> Entrepreneurship</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="empowerment1_tech_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="entrep_mid_1" value="'.$gradeqryfetch['entrep_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="empowerment1_tech_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="entrep_mid_2" value="'.$gradeqryfetch['entrep_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="empowerment1_tech_mid_ave" placeholder="Average" name="entrep_mid_ave" value="'.$gradeqryfetch['entrep_mid_ave'].'" readonly>
                                </div>
                            </div>
                           <div class="row">
                            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Cookery (2)</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="css2_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="cookery2_mid_1" value="'.$gradeqryfetch['cookery2_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="css2_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="cookery2_mid_2" value="'.$gradeqryfetch['cookery2_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="css2_mid_ave" placeholder="Average" name="cookery2_mid_ave" value="'.$gradeqryfetch['cookery2_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                                                <div class="col-md-4">
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                    <div class="col-md-4">
                                                    <label><strong>General Ave. for the Semester:</strong></label>
                                                    <input type="number" class="form-control" id="final1_average" placeholder="Average" name="2nd_average" value="'.$gradeqryfetch['2nd_average'].'" readonly>
                                                    </div>
                                                </div>
                            <div class="bg-light clearfix">  
                                <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                            </div>
                            </form>
                            ';
                        }
                        else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "IA"){
                            echo '	
                        <form role="form" method="POST" action="add_grades_ia11_2.php?lrn='.$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                           <div>
                            <h1>Industrial Arts (IA)</h1>
                            <h5>' .$gradeqryfetch['semester']. '</h5>
                        </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>CORE:</strong> Reading and Writing Skills</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="oral1_communication_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="reading_mid_1" value="'.$gradeqryfetch['reading_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="oral1_communication_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="reading_mid_2" value="'.$gradeqryfetch['reading_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="oral1_communication_mid_ave" placeholder="Average" name="reading_mid_ave" value="'.$gradeqryfetch['reading_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>CORE:</strong> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="kpwkp1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="pptp_mid_1" value="'.$gradeqryfetch['pptp_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="kpwkp1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="pptp_mid_2" value="'.$gradeqryfetch['pptp_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="kpwkp1_mid_ave" placeholder="Average" name="pptp_mid_ave" value="'.$gradeqryfetch['pptp_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>CORE:</strong> Contemporary Arts from the Region</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="genmath1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="contemporary_mid_1" value="'.$gradeqryfetch['contemporary_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="genmath1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="contemporary_mid_2" value="'.$gradeqryfetch['contemporary_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="genmath1_mid_ave" placeholder="Average" name="contemporary_mid_ave" value="'.$gradeqryfetch['contemporary_mid_ave'].'" readonly>
                            </div>
                        </div>
                      <div class="row">
                        <label for="validationDefault01"><strong>CORE:</strong> Statistics and Probability</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="personal1_mid_development_1" onkeyup = "total1()" placeholder="First Quarter" name="statistic_mid_1" value="'.$gradeqryfetch['statistic_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="personal1_mid_development_2" onkeyup = "total1()" placeholder="Second Quarter" name="statistic_mid_2" value="'.$gradeqryfetch['statistic_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="personal1_mid_development_ave" placeholder="Average" name="statistic_mid_ave" value="'.$gradeqryfetch['statistic_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 2</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="els1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="peh2_mid_1" value="'.$gradeqryfetch['peh2_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="els1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="peh2_mid_2" value="'.$gradeqryfetch['peh2_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="els1_mid_ave" placeholder="Average" name="peh2_mid_ave" value="'.$gradeqryfetch['peh2_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 1</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="peh1_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="practical_mid_1" value="'.$gradeqryfetch['practical_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="peh1_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="practical_mid_2" value="'.$gradeqryfetch['practical_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="peh1_mid_ave" placeholder="Average" name="practical_mid_ave" value="'.$gradeqryfetch['practical_mid_ave'].'" readonly>
                            </div>
                        </div>
                       <div class="row">
                        <label for="validationDefault01"><strong>APPLIED:</strong> Entrepreneurship</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="empowerment1_tech_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="entrep_mid_1" value="'.$gradeqryfetch['entrep_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="empowerment1_tech_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="entrep_mid_2" value="'.$gradeqryfetch['entrep_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="empowerment1_tech_mid_ave" placeholder="Average" name="entrep_mid_ave" value="'.$gradeqryfetch['entrep_mid_ave'].'" readonly>
                            </div>
                        </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Electrical Installation and Maintenance (2)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css2_mid_1" onkeyup = "total1()" placeholder="First Quarter" name="eim2_mid_1" value="'.$gradeqryfetch['eim2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css2_mid_2" onkeyup = "total1()" placeholder="Second Quarter" name="eim2_mid_2" value="'.$gradeqryfetch['eim2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css2_mid_ave" placeholder="Average" name="eim2_mid_ave" value="'.$gradeqryfetch['eim2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                        <div class="col-md-4">
                                                        <label><strong>General Ave. for the Semester:</strong></label>
                                                        <input type="number" class="form-control" id="final1_average" placeholder="Average" name="2nd_average" value="'.$gradeqryfetch['2nd_average'].'" readonly>
                                                        </div>
                                                    </div>
                        <div class="bg-light clearfix">  
                            <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                        </div>
                        </form>
                        ';
                    }
                    else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "STEM"){
                        echo '	
                    <form role="form" method="POST" action="add_grades_stem11_2.php?lrn='.$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                       <div>
                        <h1>Science, Technology, Engineering, and Mathematics (STEM)</h1>
                        <h5>' .$gradeqryfetch['semester']. '</h5>
                    </div>
                   <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Reading and Writing Skills</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral_communication_mid_1" onkeyup = "total()" placeholder="First Quarter" name="reading_mid_1" value="'.$gradeqryfetch['reading_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral_communication_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="reading_mid_2" value="'.$gradeqryfetch['reading_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="reading_mid_ave" value="'.$gradeqryfetch['reading_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup = "total()" placeholder="First Quarter" name="pptp_mid_1" value="'.$gradeqryfetch['pptp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="pptp_mid_2" value="'.$gradeqryfetch['pptp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="pptp_mid_ave" value="'.$gradeqryfetch['pptp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Contemporary Arts from the Region</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath_mid_1" onkeyup = "total()" placeholder="First Quarter" name="contemporary_mid_1" value="'.$gradeqryfetch['contemporary_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="contemporary_mid_2" value="'.$gradeqryfetch['contemporary_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="contemporary_mid_ave" value="'.$gradeqryfetch['contemporary_mid_ave'].'" readonly>
                                    </div>
                                </div>
                              <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Statistics and Probability</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal_mid_development_1" onkeyup = "total()" placeholder="First Quarter" name="statistic_mid_1" value="'.$gradeqryfetch['statistic_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal_mid_development_2" onkeyup = "total()" placeholder="Second Quarter" name="statistic_mid_2" value="'.$gradeqryfetch['statistic_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="statistic_mid_ave" value="'.$gradeqryfetch['statistic_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 2</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els_mid_1" onkeyup = "total()" placeholder="First Quarter" name="peh2_mid_1" value="'.$gradeqryfetch['peh2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="peh2_mid_2" value="'.$gradeqryfetch['peh2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="peh2_mid_ave" value="'.$gradeqryfetch['peh2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 1</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh_mid_1" onkeyup = "total()" placeholder="First Quarter" name="practical_mid_1" value="'.$gradeqryfetch['practical_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="practical_mid_2" value="'.$gradeqryfetch['practical_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="practical_mid_ave" value="'.$gradeqryfetch['practical_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Entrepreneurship</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup = "total()" placeholder="First Quarter" name="entrep_mid_1" value="'.$gradeqryfetch['entrep_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="entrep_mid_2" value="'.$gradeqryfetch['entrep_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="entrep_mid_ave" value="'.$gradeqryfetch['entrep_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Basic Calculos</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css1_mid_1" onkeyup = "total()" placeholder="First Quarter" name="basic_mid_1" value="'.$gradeqryfetch['basic_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css1_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="basic_mid_2" value="'.$gradeqryfetch['basic_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="basic_mid_ave" value="'.$gradeqryfetch['basic_mid_ave'].'" readonly>
                                    </div>
                                </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Biology (1)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_1" onkeyup = "total()" placeholder="First Quarter" name="biology_mid_1" value="'.$gradeqryfetch['biology_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="biology_mid_2" value="'.$gradeqryfetch['biology_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="biology_mid_ave" value="'.$gradeqryfetch['biology_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                        <div class="col-md-4">
                                                        <label><strong>General Ave. for the Semester:</strong></label>
                                                        <input type="number" class="form-control" id="final_average" placeholder="Average" name="2nd_average" value="'.$gradeqryfetch['2nd_average'].'" readonly>
                                                        </div>
                                                    </div>
                    <div class="bg-light clearfix">  
                        <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                    </div>
                    </form>
                    ';
                }
                else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "HUMSS"){
                    echo '	
                <form role="form" method="POST" action="add_grades_humms11_2.php?lrn='.$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                   <div>
                    <h1>Humanities and Social Sciences (HUMSS)</h1>
                    <h5>' .$gradeqryfetch['semester']. '</h5>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Reading and Writing Skills</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral_communication_mid_1" onkeyup = "total()" placeholder="First Quarter" name="reading_mid_1" value="'.$gradeqryfetch['reading_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral_communication_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="reading_mid_2" value="'.$gradeqryfetch['reading_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="reading_mid_ave" value="'.$gradeqryfetch['reading_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup = "total()" placeholder="First Quarter" name="pptp_mid_1" value="'.$gradeqryfetch['pptp_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="pptp_mid_2" value="'.$gradeqryfetch['pptp_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="pptp_mid_ave" value="'.$gradeqryfetch['pptp_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Contemporary Arts from the Region</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath_mid_1" onkeyup = "total()" placeholder="First Quarter" name="contemporary_mid_1" value="'.$gradeqryfetch['contemporary_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="contemporary_mid_2" value="'.$gradeqryfetch['contemporary_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="contemporary_mid_ave" value="'.$gradeqryfetch['contemporary_mid_ave'].'" readonly>
                    </div>
                </div>
              <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Statistics and Probability</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal_mid_development_1" onkeyup = "total()" placeholder="First Quarter" name="statistic_mid_1" value="'.$gradeqryfetch['statistic_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal_mid_development_2" onkeyup = "total()" placeholder="Second Quarter" name="statistic_mid_2" value="'.$gradeqryfetch['statistic_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="statistic_mid_ave" value="'.$gradeqryfetch['statistic_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 2</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els_mid_1" onkeyup = "total()" placeholder="First Quarter" name="peh2_mid_1" value="'.$gradeqryfetch['peh2_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="peh2_mid_2" value="'.$gradeqryfetch['peh2_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="peh2_mid_ave" value="'.$gradeqryfetch['peh2_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 1</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh_mid_1" onkeyup = "total()" placeholder="First Quarter" name="practical_mid_1" value="'.$gradeqryfetch['practical_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="practical_mid_2" value="'.$gradeqryfetch['practical_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="practical_mid_ave" value="'.$gradeqryfetch['practical_mid_ave'].'" readonly>
                    </div>
                </div>
               <div class="row">
                <label for="validationDefault01"><strong>APPLIED:</strong> Entrepreneurship</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup = "total()" placeholder="First Quarter" name="entrep_mid_1" value="'.$gradeqryfetch['entrep_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="entrep_mid_2" value="'.$gradeqryfetch['entrep_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="entrep_mid_ave" value="'.$gradeqryfetch['entrep_mid_ave'].'" readonly>
                    </div>
                </div>
               <div class="row">
                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Humanities 1 (Creative Writing)</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="css1_mid_1" onkeyup = "total()" placeholder="First Quarter" name="humanities_mid_1" value="'.$gradeqryfetch['humanities_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="css1_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="humanities_mid_2" value="'.$gradeqryfetch['humanities_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="humanities_mid_ave" value="'.$gradeqryfetch['humanities_mid_ave'].'" readonly>
                    </div>
                </div>
    <div class="row">
    <label for="validationDefault01"><strong>SPECIALIZED:</strong> Social Science (Philippine Politics & Governance)</label>
        <div class="col-md-4 mb-3">
        <input type="number" class="form-control" id="century_literature_mid_1" onkeyup = "total()" placeholder="First Quarter" name="social_mid_1" value="'.$gradeqryfetch['social_mid_1'].'">
        </div>
        <div class="col-md-4 mb-3">
        <input type="number" class="form-control" id="century_literature_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="social_mid_2" value="'.$gradeqryfetch['social_mid_2'].'">
        </div>
        <div class="col-md-4 mb-3">
        <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="social_mid_ave" value="'.$gradeqryfetch['social_mid_ave'].'" readonly>
        </div>
    </div>
    <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                        <div class="col-md-4">
                                        <label><strong>General Ave. for the Semester:</strong></label>
                                        <input type="number" class="form-control" id="final_average" placeholder="Average" name="2nd_average" value="'.$gradeqryfetch['2nd_average'].'" readonly>
                                        </div>
                                        </div>
                <div class="bg-light clearfix">  
                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                </div>
                </form>
                ';
            }
            else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "11" && $gradeqryfetch['strand'] == "ABM"){
                echo '	
            <form role="form" method="POST" action="add_grades_abm11_2.php?lrn='.$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
               <div>
                <h1>Accountancy, Business and Management (ABM)</h1>
                <h5>' .$gradeqryfetch['semester']. '</h5>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Reading and Writing Skills</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="oral_communication_mid_1" onkeyup = "total()" placeholder="First Quarter" name="reading_mid_1" value="'.$gradeqryfetch['reading_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="oral_communication_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="reading_mid_2" value="'.$gradeqryfetch['reading_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="reading_mid_ave" value="'.$gradeqryfetch['reading_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Pagbasa at Pagsusuri ng ibat ibang Teksto sa Pananaliksik</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup = "total()" placeholder="First Quarter" name="pptp_mid_1" value="'.$gradeqryfetch['pptp_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="pptp_mid_2" value="'.$gradeqryfetch['pptp_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="pptp_mid_ave" value="'.$gradeqryfetch['pptp_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Contemporary Arts from the Region</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="genmath_mid_1" onkeyup = "total()" placeholder="First Quarter" name="contemporary_mid_1" value="'.$gradeqryfetch['contemporary_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="genmath_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="contemporary_mid_2" value="'.$gradeqryfetch['contemporary_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="contemporary_mid_ave" value="'.$gradeqryfetch['contemporary_mid_ave'].'" readonly>
                </div>
            </div>
          <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Statistics and Probability</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="personal_mid_development_1" onkeyup = "total()" placeholder="First Quarter" name="statistic_mid_1" value="'.$gradeqryfetch['statistic_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="personal_mid_development_2" onkeyup = "total()" placeholder="Second Quarter" name="statistic_mid_2" value="'.$gradeqryfetch['statistic_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="statistic_mid_ave" value="'.$gradeqryfetch['statistic_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Physical Education and Health (P.E.) 2</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="els_mid_1" onkeyup = "total()" placeholder="First Quarter" name="peh2_mid_1" value="'.$gradeqryfetch['peh2_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="els_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="peh2_mid_2" value="'.$gradeqryfetch['peh2_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="peh2_mid_ave" value="'.$gradeqryfetch['peh2_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 1</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="peh_mid_1" onkeyup = "total()" placeholder="First Quarter" name="practical_mid_1" value="'.$gradeqryfetch['practical_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="peh_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="practical_mid_2" value="'.$gradeqryfetch['practical_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="practical_mid_ave" value="'.$gradeqryfetch['practical_mid_ave'].'" readonly>
                </div>
            </div>
           <div class="row">
            <label for="validationDefault01"><strong>APPLIED:</strong> Entrepreneurship</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup = "total()" placeholder="First Quarter" name="entrep_mid_1" value="'.$gradeqryfetch['entrep_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="entrep_mid_2" value="'.$gradeqryfetch['entrep_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="entrep_mid_ave" value="'.$gradeqryfetch['entrep_mid_ave'].'" readonly>
                </div>
            </div>
           <div class="row">
            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Fundamentals of ABM (1)</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="css1_mid_1" onkeyup = "total()" placeholder="First Quarter" name="fundamentals_mid_1" value="'.$gradeqryfetch['fundamentals_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="css1_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="fundamentals_mid_2" value="'.$gradeqryfetch['fundamentals_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="fundamentals_mid_ave" value="'.$gradeqryfetch['fundamentals_mid_ave'].'" readonly>
                </div>
            </div>
<div class="row">
<label for="validationDefault01"><strong>SPECIALIZED:</strong> Principles of Marketing</label>
    <div class="col-md-4 mb-3">
    <input type="number" class="form-control" id="century_literature_mid_1" onkeyup = "total()" placeholder="First Quarter" name="principles_mid_1" value="'.$gradeqryfetch['principles_mid_1'].'">
    </div>
    <div class="col-md-4 mb-3">
    <input type="number" class="form-control" id="century_literature_mid_2" onkeyup = "total()" placeholder="Second Quarter" name="principles_mid_2" value="'.$gradeqryfetch['principles_mid_2'].'">
    </div>
    <div class="col-md-4 mb-3">
    <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="principles_mid_ave" value="'.$gradeqryfetch['principles_mid_ave'].'" readonly>
    </div>
</div>
<div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final_average" placeholder="Average" name="2nd_average" value="'.$gradeqryfetch['2nd_average'].'" readonly>
                                    </div>
                                    </div>
            <div class="bg-light clearfix">  
                <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
            </div>
            </form>
            ';
        }
                            else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "ICT"){
                                echo '	
                                <form role="form" method="POST" action="add_grades_ict12_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                <div>
                                    <h1>Information Communication Technology (ICT)</h1>
                                    <h5>' .$gradeqryfetch['semester']. '</h5>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Introduction to Philosophy of the Human Person</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_1" placeholder="First Quarter" name="iphp_mid_1" onkeyup="total2()" value="'.$gradeqryfetch['iphp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_2" placeholder="Second Quarter" name="iphp_mid_2" onkeyup="total2()"  value="'.$gradeqryfetch['iphp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_ave" placeholder="Average" name="iphp_mid_ave"  value="'.$gradeqryfetch['iphp_mid_ave'].'" readonly="true">
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Understanding Culture Society & Politics</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="ucsp_mid_1"  value="'.$gradeqryfetch['ucsp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="ucsp_mid_2" value="'.$gradeqryfetch['ucsp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_ave" placeholder="Average" name="ucsp_mid_ave" value="'.$gradeqryfetch['ucsp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="peh3_mid_1" value="'.$gradeqryfetch['peh3_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="peh3_mid_2" value="'.$gradeqryfetch['peh3_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_ave" placeholder="Average" name="peh3_mid_ave" value="'.$gradeqryfetch['peh3_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> English for Academic & Professional Purpose</label>
                                <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_1" onkeyup="total2()" placeholder="First Quarter" name="eapp_mid_1" value="'.$gradeqryfetch['eapp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_2" onkeyup="total2()" placeholder="Second Quarter" name="eapp_mid_2" value="'.$gradeqryfetch['eapp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_ave" placeholder="Average" name="eapp_mid_ave" value="'.$gradeqryfetch['eapp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 2</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="practical2_mid_1" value="'.$gradeqryfetch['practical2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="practical2_mid_2" value="'.$gradeqryfetch['practical2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_ave" placeholder="Average" name="practical2_mid_ave" value="'.$gradeqryfetch['practical2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="fpl_mid_1" value="'.$gradeqryfetch['fpl_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="fpl_mid_2" value="'.$gradeqryfetch['fpl_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_ave" placeholder="Average" name="fpl_mid_ave" value="'.$gradeqryfetch['fpl_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Computer System Servicing (3)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment2_tech_mid_1" onkeyup="total2()" placeholder="First Quarter" name="css3_mid_1" value="'.$gradeqryfetch['css3_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment2_tech_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="css3_mid_2" value="'.$gradeqryfetch['css3_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment2_tech_mid_ave" placeholder="Average" name="css3_mid_ave" value="'.$gradeqryfetch['css3_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final2_average" placeholder="Average" name="1st_average_12" value="'.$gradeqryfetch['1st_average_12'].'" readonly>
                                    </div>
                                    </div>
                                <div class="bg-light clearfix">  
                                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                </div>
                                </form>
                            ';
                        }
                        else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "HE"){
                            echo '	
                            <form role="form" method="POST" action="add_grades_he12_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                            <div>
                                <h1>Home Economics (HE)</h1>
                                <h5>' .$gradeqryfetch['semester']. '</h5>
                            </div>
                            <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Introduction to Philosophy of the Human Person</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_1" placeholder="First Quarter" name="iphp_mid_1" onkeyup="total2()" value="'.$gradeqryfetch['iphp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_2" placeholder="Second Quarter" name="iphp_mid_2" onkeyup="total2()"  value="'.$gradeqryfetch['iphp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_ave" placeholder="Average" name="iphp_mid_ave"  value="'.$gradeqryfetch['iphp_mid_ave'].'" readonly="true">
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Understanding Culture Society & Politics</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="ucsp_mid_1"  value="'.$gradeqryfetch['ucsp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="ucsp_mid_2" value="'.$gradeqryfetch['ucsp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_ave" placeholder="Average" name="ucsp_mid_ave" value="'.$gradeqryfetch['ucsp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="peh3_mid_1" value="'.$gradeqryfetch['peh3_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="peh3_mid_2" value="'.$gradeqryfetch['peh3_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_ave" placeholder="Average" name="peh3_mid_ave" value="'.$gradeqryfetch['peh3_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> English for Academic & Professional Purpose</label>
                                <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_1" onkeyup="total2()" placeholder="First Quarter" name="eapp_mid_1" value="'.$gradeqryfetch['eapp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_2" onkeyup="total2()" placeholder="Second Quarter" name="eapp_mid_2" value="'.$gradeqryfetch['eapp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_ave" placeholder="Average" name="eapp_mid_ave" value="'.$gradeqryfetch['eapp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 2</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="practical2_mid_1" value="'.$gradeqryfetch['practical2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="practical2_mid_2" value="'.$gradeqryfetch['practical2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_ave" placeholder="Average" name="practical2_mid_ave" value="'.$gradeqryfetch['practical2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="fpl_mid_1" value="'.$gradeqryfetch['fpl_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="fpl_mid_2" value="'.$gradeqryfetch['fpl_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_ave" placeholder="Average" name="fpl_mid_ave" value="'.$gradeqryfetch['fpl_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Housekeeping</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment2_tech_mid_1" onkeyup="total2()" placeholder="First Quarter" name="housekeeping_mid_1" value="'.$gradeqryfetch['housekeeping_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment2_tech_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="housekeeping_mid_2" value="'.$gradeqryfetch['housekeeping_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="empowerment2_tech_mid_ave" placeholder="Average" name="housekeeping_mid_ave" value="'.$gradeqryfetch['housekeeping_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final2_average" placeholder="Average" name="1st_average_12" value="'.$gradeqryfetch['1st_average_12'].'" readonly>
                                    </div>
                                    </div>
                            <div class="bg-light clearfix">  
                                <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                            </div>
                            </form>
                        ';
                    }
                    else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "IA"){
                        echo '	
                        <form role="form" method="POST" action="add_grades_ia12_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                        <div>
                            <h1>Industrial Arts (IA)</h1>
                            <h5>' .$gradeqryfetch['semester']. '</h5>
                        </div>
                        <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Introduction to Philosophy of the Human Person</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_1" placeholder="First Quarter" name="iphp_mid_1" onkeyup="total2()" value="'.$gradeqryfetch['iphp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_2" placeholder="Second Quarter" name="iphp_mid_2" onkeyup="total2()"  value="'.$gradeqryfetch['iphp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral2_communication_mid_ave" placeholder="Average" name="iphp_mid_ave"  value="'.$gradeqryfetch['iphp_mid_ave'].'" readonly="true">
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Understanding Culture Society & Politics</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="ucsp_mid_1"  value="'.$gradeqryfetch['ucsp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="ucsp_mid_2" value="'.$gradeqryfetch['ucsp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp2_mid_ave" placeholder="Average" name="ucsp_mid_ave" value="'.$gradeqryfetch['ucsp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="peh3_mid_1" value="'.$gradeqryfetch['peh3_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="peh3_mid_2" value="'.$gradeqryfetch['peh3_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath2_mid_ave" placeholder="Average" name="peh3_mid_ave" value="'.$gradeqryfetch['peh3_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> English for Academic & Professional Purpose</label>
                                <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_1" onkeyup="total2()" placeholder="First Quarter" name="eapp_mid_1" value="'.$gradeqryfetch['eapp_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_2" onkeyup="total2()" placeholder="Second Quarter" name="eapp_mid_2" value="'.$gradeqryfetch['eapp_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal2_mid_development_ave" placeholder="Average" name="eapp_mid_ave" value="'.$gradeqryfetch['eapp_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 2</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="practical2_mid_1" value="'.$gradeqryfetch['practical2_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="practical2_mid_2" value="'.$gradeqryfetch['practical2_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els2_mid_ave" placeholder="Average" name="practical2_mid_ave" value="'.$gradeqryfetch['practical2_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="fpl_mid_1" value="'.$gradeqryfetch['fpl_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="fpl_mid_2" value="'.$gradeqryfetch['fpl_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh2_mid_ave" placeholder="Average" name="fpl_mid_ave" value="'.$gradeqryfetch['fpl_mid_ave'].'" readonly>
                                    </div>
                                </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>SPECIALIZED:</strong>Electrical Installation and Maintenance (3)</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="empowerment2_tech_mid_1" onkeyup="total2()" placeholder="First Quarter" name="eim3_mid_1" value="'.$gradeqryfetch['eim3_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="empowerment2_tech_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="eim3_mid_2" value="'.$gradeqryfetch['eim3_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="empowerment2_tech_mid_ave" placeholder="Average" name="eim3_mid_ave" value="'.$gradeqryfetch['eim3_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                            <div class="col-md-4">
                            <label><strong>General Ave. for the Semester:</strong></label>
                            <input type="number" class="form-control" id="final2_average" placeholder="Average" name="1st_average_12" value="'.$gradeqryfetch['1st_average_12'].'" readonly>
                            </div>
                            </div>
                        <div class="bg-light clearfix">  
                            <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                        </div>
                        </form>
                    ';
                }
                else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "STEM"){
                    echo '	
                    <form role="form" method="POST" action="add_grades_stem12_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                    <div>
                        <h1>Science, Technology, Engineering, and Mathematics (STEM)</h1>
                        <h5>' .$gradeqryfetch['semester']. '</h5>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Introduction to Philosophy of the Human Person</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="iphp_mid_1" onkeyup="total()" value="'.$gradeqryfetch['iphp_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="iphp_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['iphp_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="iphp_mid_ave"  value="'.$gradeqryfetch['iphp_mid_ave'].'" readonly="true">
                        </div>
                    </div>
                   <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Understanding Culture Society & Politics</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="ucsp_mid_1"  value="'.$gradeqryfetch['ucsp_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="ucsp_mid_2" value="'.$gradeqryfetch['ucsp_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="ucsp_mid_ave" value="'.$gradeqryfetch['ucsp_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh3_mid_1" value="'.$gradeqryfetch['peh3_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh3_mid_2" value="'.$gradeqryfetch['peh3_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="peh3_mid_ave" value="'.$gradeqryfetch['peh3_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> English for Academic & Professional Purpose</label>
                    <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="eapp_mid_1" value="'.$gradeqryfetch['eapp_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="eapp_mid_2" value="'.$gradeqryfetch['eapp_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="eapp_mid_ave" value="'.$gradeqryfetch['eapp_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 2</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="practical2_mid_1" value="'.$gradeqryfetch['practical2_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="practical2_mid_2" value="'.$gradeqryfetch['practical2_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="practical2_mid_ave" value="'.$gradeqryfetch['practical2_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="fpl_mid_1" value="'.$gradeqryfetch['fpl_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="fpl_mid_2" value="'.$gradeqryfetch['fpl_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="fpl_mid_ave" value="'.$gradeqryfetch['fpl_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Physics (1)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="physics_mid_1" value="'.$gradeqryfetch['physics_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="physics_mid_2" value="'.$gradeqryfetch['physics_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="physics_mid_ave" value="'.$gradeqryfetch['physics_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Chemistry (1)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="chemistry_mid_1" value="'.$gradeqryfetch['chemistry_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="chemistry_mid_2" value="'.$gradeqryfetch['chemistry_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="chemistry_mid_ave" value="'.$gradeqryfetch['chemistry_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Biology (2)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="biology1_mid_1" value="'.$gradeqryfetch['biology1_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="biology1_mid_2" value="'.$gradeqryfetch['biology1_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="biology1_mid_ave" value="'.$gradeqryfetch['biology1_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                            <div class="col-md-4">
                            <label><strong>General Ave. for the Semester:</strong></label>
                            <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average_12" value="'.$gradeqryfetch['1st_average_12'].'" readonly>
                            </div>
                            </div>
                    <div class="bg-light clearfix">  
                        <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                    </div>
                    </form>
                ';
            }
              else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "HUMSS"){
                    echo '	
                    <form role="form" method="POST" action="add_grades_humms12_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                    <div>
                        <h1>Humanities and Social Sciences (HUMSS)</h1>
                        <h5>' .$gradeqryfetch['semester']. '</h5>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Introduction to Philosophy of the Human Person</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral_communication_mid_1" placeholder="First Quarter" name="iphp_mid_1" onkeyup="total()" value="'.$gradeqryfetch['iphp_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral_communication_mid_2" placeholder="Second Quarter" name="iphp_mid_2" onkeyup="total()"  value="'.$gradeqryfetch['iphp_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral_communication_mid_ave" placeholder="Average" name="iphp_mid_ave"  value="'.$gradeqryfetch['iphp_mid_ave'].'" readonly="true">
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Understanding Culture Society & Politics</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp_mid_1" onkeyup="total()" placeholder="First Quarter" name="ucsp_mid_1"  value="'.$gradeqryfetch['ucsp_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp_mid_2" onkeyup="total()" placeholder="Second Quarter" name="ucsp_mid_2" value="'.$gradeqryfetch['ucsp_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp_mid_ave" placeholder="Average" name="ucsp_mid_ave" value="'.$gradeqryfetch['ucsp_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath_mid_1" onkeyup="total()" placeholder="First Quarter" name="peh3_mid_1" value="'.$gradeqryfetch['peh3_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath_mid_2" onkeyup="total()" placeholder="Second Quarter" name="peh3_mid_2" value="'.$gradeqryfetch['peh3_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath_mid_ave" placeholder="Average" name="peh3_mid_ave" value="'.$gradeqryfetch['peh3_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> English for Academic & Professional Purpose</label>
                    <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal_mid_development_1" onkeyup="total()" placeholder="First Quarter" name="eapp_mid_1" value="'.$gradeqryfetch['eapp_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal_mid_development_2" onkeyup="total()" placeholder="Second Quarter" name="eapp_mid_2" value="'.$gradeqryfetch['eapp_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal_mid_development_ave" placeholder="Average" name="eapp_mid_ave" value="'.$gradeqryfetch['eapp_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 2</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els_mid_1" onkeyup="total()" placeholder="First Quarter" name="practical2_mid_1" value="'.$gradeqryfetch['practical2_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els_mid_2" onkeyup="total()" placeholder="Second Quarter" name="practical2_mid_2" value="'.$gradeqryfetch['practical2_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els_mid_ave" placeholder="Average" name="practical2_mid_ave" value="'.$gradeqryfetch['practical2_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh_mid_1" onkeyup="total()" placeholder="First Quarter" name="fpl_mid_1" value="'.$gradeqryfetch['fpl_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh_mid_2" onkeyup="total()" placeholder="Second Quarter" name="fpl_mid_2" value="'.$gradeqryfetch['fpl_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh_mid_ave" placeholder="Average" name="fpl_mid_ave" value="'.$gradeqryfetch['fpl_mid_ave'].'" readonly>
                        </div>
                    </div>
                   <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> Discipline Ideas in Applied Sciences</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment_tech_mid_1" onkeyup="total()" placeholder="First Quarter" name="discipline_mid_1" value="'.$gradeqryfetch['discipline_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment_tech_mid_2" onkeyup="total()" placeholder="Second Quarter" name="discipline_mid_2" value="'.$gradeqryfetch['discipline_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment_tech_mid_ave" placeholder="Average" name="discipline_mid_ave" value="'.$gradeqryfetch['discipline_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> Creative Fiction</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="css1_mid_1" onkeyup="total()" placeholder="First Quarter" name="fiction_mid_1" value="'.$gradeqryfetch['fiction_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="css1_mid_2" onkeyup="total()" placeholder="Second Quarter" name="fiction_mid_2" value="'.$gradeqryfetch['fiction_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="css1_mid_ave" placeholder="Average" name="fiction_mid_ave" value="'.$gradeqryfetch['fiction_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Philippine Politics and Governance</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_1" onkeyup="total()" placeholder="First Quarter" name="politics_mid_1" value="'.$gradeqryfetch['politics_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_2" onkeyup="total()" placeholder="Second Quarter" name="politics_mid_2" value="'.$gradeqryfetch['politics_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="century_literature_mid_ave" placeholder="Average" name="politics_mid_ave" value="'.$gradeqryfetch['politics_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                            <div class="col-md-4">
                            <label><strong>General Ave. for the Semester:</strong></label>
                            <input type="number" class="form-control" id="final_average" placeholder="Average" name="1st_average_12" value="'.$gradeqryfetch['1st_average_12'].'" readonly>
                            </div>
                            </div>
                    <div class="bg-light clearfix">  
                        <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                    </div>
                    </form>
                ';
            }   
            else if($gradeqryfetch['semester'] == "First Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "ABM"){
                echo '	
                <form role="form" method="POST" action="add_grades_abm12_1.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                <div>
                    <h1>Accountancy, Business and Management (ABM)</h1>
                    <h5>' .$gradeqryfetch['semester']. '</h5>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Introduction to Philosophy of the Human Person</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral1_communication_mid_1" placeholder="First Quarter" name="iphp_mid_1" onkeyup="total1()" value="'.$gradeqryfetch['iphp_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral1_communication_mid_2" placeholder="Second Quarter" name="iphp_mid_2" onkeyup="total1()"  value="'.$gradeqryfetch['iphp_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral1_communication_mid_ave" placeholder="Average" name="iphp_mid_ave"  value="'.$gradeqryfetch['iphp_mid_ave'].'" readonly="true">
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Understanding Culture Society & Politics</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="ucsp_mid_1"  value="'.$gradeqryfetch['ucsp_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="ucsp_mid_2" value="'.$gradeqryfetch['ucsp_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp1_mid_ave" placeholder="Average" name="ucsp_mid_ave" value="'.$gradeqryfetch['ucsp_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="peh3_mid_1" value="'.$gradeqryfetch['peh3_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="peh3_mid_2" value="'.$gradeqryfetch['peh3_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath1_mid_ave" placeholder="Average" name="peh3_mid_ave" value="'.$gradeqryfetch['peh3_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>APPLIED:</strong> English for Academic & Professional Purpose</label>
                <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal1_mid_development_1" onkeyup="total1()" placeholder="First Quarter" name="eapp_mid_1" value="'.$gradeqryfetch['eapp_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal1_mid_development_2" onkeyup="total1()" placeholder="Second Quarter" name="eapp_mid_2" value="'.$gradeqryfetch['eapp_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal1_mid_development_ave" placeholder="Average" name="eapp_mid_ave" value="'.$gradeqryfetch['eapp_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>APPLIED:</strong> Practical Research 2</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="practical2_mid_1" value="'.$gradeqryfetch['practical2_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="practical2_mid_2" value="'.$gradeqryfetch['practical2_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els1_mid_ave" placeholder="Average" name="practical2_mid_ave" value="'.$gradeqryfetch['practical2_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>APPLIED:</strong> Filipino sa Piling Larangan (Akedemiko at Tech. Voc.)</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="fpl_mid_1" value="'.$gradeqryfetch['fpl_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="fpl_mid_2" value="'.$gradeqryfetch['fpl_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh1_mid_ave" placeholder="Average" name="fpl_mid_ave" value="'.$gradeqryfetch['fpl_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Fundamentals of ABM (2)</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment1_tech_mid_1" onkeyup="total1()" placeholder="First Quarter" name="fundamentals1_mid_1" value="'.$gradeqryfetch['fundamentals1_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment1_tech_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="fundamentals1_mid_2" value="'.$gradeqryfetch['fundamentals1_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment1_tech_mid_ave" placeholder="Average" name="fundamentals1_mid_ave" value="'.$gradeqryfetch['fundamentals1_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Business Mathematics</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="css2_mid_1" onkeyup="total1()" placeholder="First Quarter" name="business_mid_1" value="'.$gradeqryfetch['business_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="css2_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="business_mid_2" value="'.$gradeqryfetch['business_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="css2_mid_ave" placeholder="Average" name="business_mid_ave" value="'.$gradeqryfetch['business_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
                    <div class="col-md-4">
                    <label><strong>General Ave. for the Semester:</strong></label>
                    <input type="number" class="form-control" id="final1_average" placeholder="Average" name="1st_average_12" value="'.$gradeqryfetch['1st_average_12'].'" readonly>
                    </div>
                    </div>
                <div class="bg-light clearfix">  
                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                </div>
                </form>
            ';
        }   
                            else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "ICT"){
                                echo '	
                                <form role="form" method="POST" action="add_grades_ict12_2.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                                <div>
                                    <h1>Information Communication Technology (ICT)</h1>
                                    <h5>' .$gradeqryfetch['semester']. '</h5>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Media & Information Literacy</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral3_communication_mid_1" placeholder="First Quarter" name="mil_mid_1" onkeyup="total3()" value="'.$gradeqryfetch['mil_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral3_communication_mid_2" placeholder="Second Quarter" name="mil_mid_2" onkeyup="total3()"  value="'.$gradeqryfetch['mil_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="oral3_communication_mid_ave" placeholder="Average" name="mil_mid_ave"  value="'.$gradeqryfetch['mil_mid_ave'].'" readonly="true">
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Science</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="ps_mid_1"  value="'.$gradeqryfetch['ps_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="ps_mid_2" value="'.$gradeqryfetch['ps_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="kpwkp3_mid_ave" placeholder="Average" name="ps_mid_ave" value="'.$gradeqryfetch['ps_mid_ave'].'" readonly>
                                    </div>
                                </div>
                               <div class="row">
                                <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="peh4_mid_1" value="'.$gradeqryfetch['peh4_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="peh4_mid_2" value="'.$gradeqryfetch['peh4_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="genmath3_mid_ave" placeholder="Average" name="peh4_mid_ave" value="'.$gradeqryfetch['peh4_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>APPLIED:</strong> Inquiries, Investigation and Immersion</label>
                                <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal3_mid_development_1" onkeyup="total3()" placeholder="First Quarter" name="immersion_mid_1" value="'.$gradeqryfetch['immersion_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal3_mid_development_2" onkeyup="total3()" placeholder="Second Quarter" name="immersion_mid_2" value="'.$gradeqryfetch['immersion_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="personal3_mid_development_ave" placeholder="Average" name="immersion_mid_ave" value="'.$gradeqryfetch['immersion_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Computer System Servicing (4)</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="css4_mid_1" value="'.$gradeqryfetch['css4_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="css4_mid_2" value="'.$gradeqryfetch['css4_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="els3_mid_ave" placeholder="Average" name="css4_mid_ave" value="'.$gradeqryfetch['css4_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Work Immersion/Research/Career Advocacy/Culminating Activity</label>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="wrcc_mid_1" value="'.$gradeqryfetch['wrcc_mid_1'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="wrcc_mid_2" value="'.$gradeqryfetch['wrcc_mid_2'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" id="peh3_mid_ave" placeholder="Average" name="wrcc_mid_ave" value="'.$gradeqryfetch['wrcc_mid_ave'].'" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final3_average" placeholder="Average" name="2nd_average_12" value="'.$gradeqryfetch['2nd_average_12'].'" readonly>
                                    </div>
                                    </div>
                                <div class="bg-light clearfix">  
                                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                                </div>
                                </form>
                            ';
                        }
                        else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "HE"){
                            echo '	
                            <form role="form" method="POST" action="add_grades_he12_2.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                            <div>   
                                <h1>Home Economics (HE)</h1>
                                <h5>' .$gradeqryfetch['semester']. '</h5>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Media & Information Literacy</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral3_communication_mid_1" placeholder="First Quarter" name="mil_mid_1" onkeyup="total3()" value="'.$gradeqryfetch['mil_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral3_communication_mid_2" placeholder="Second Quarter" name="mil_mid_2" onkeyup="total3()"  value="'.$gradeqryfetch['mil_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral3_communication_mid_ave" placeholder="Average" name="mil_mid_ave"  value="'.$gradeqryfetch['mil_mid_ave'].'" readonly="true">
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Physical Science</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="ps_mid_1"  value="'.$gradeqryfetch['ps_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="ps_mid_2" value="'.$gradeqryfetch['ps_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp3_mid_ave" placeholder="Average" name="ps_mid_ave" value="'.$gradeqryfetch['ps_mid_ave'].'" readonly>
                                </div>
                            </div>
                           <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="peh4_mid_1" value="'.$gradeqryfetch['peh4_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="peh4_mid_2" value="'.$gradeqryfetch['peh4_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath3_mid_ave" placeholder="Average" name="peh4_mid_ave" value="'.$gradeqryfetch['peh4_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>APPLIED:</strong> Inquiries, Investigation and Immersion</label>
                            <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal3_mid_development_1" onkeyup="total3()" placeholder="First Quarter" name="immersion_mid_1" value="'.$gradeqryfetch['immersion_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal3_mid_development_2" onkeyup="total3()" placeholder="Second Quarter" name="immersion_mid_2" value="'.$gradeqryfetch['immersion_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal3_mid_development_ave" placeholder="Average" name="immersion_mid_ave" value="'.$gradeqryfetch['immersion_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Bread & Pastry</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="els3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="bp_mid_1" value="'.$gradeqryfetch['bp_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="els3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="bp_mid_2" value="'.$gradeqryfetch['bp_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="els3_mid_ave" placeholder="Average" name="bp_mid_ave" value="'.$gradeqryfetch['bp_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Work Immersion/Research/Career Advocacy/Culminating Activity</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="peh3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="wrcc_mid_1" value="'.$gradeqryfetch['wrcc_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="peh3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="wrcc_mid_2" value="'.$gradeqryfetch['wrcc_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="peh3_mid_ave" placeholder="Average" name="wrcc_mid_ave" value="'.$gradeqryfetch['wrcc_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final3_average" placeholder="Average" name="2nd_average_12" value="'.$gradeqryfetch['2nd_average_12'].'" readonly>
                                    </div>
                                    </div>
                            <div class="bg-light clearfix">  
                                <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                            </div>
                            </form>
                        ';
                    }
                    else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "IA"){
                        echo '	
                        <form role="form" method="POST" action="add_grades_ia12_2.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                        <div>
                            <h1>Industrial Arts (IA)</h1>
                            <h5>' .$gradeqryfetch['semester']. '</h5>
                        </div>
                        <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Media & Information Literacy</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral3_communication_mid_1" placeholder="First Quarter" name="mil_mid_1" onkeyup="total3()" value="'.$gradeqryfetch['mil_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral3_communication_mid_2" placeholder="Second Quarter" name="mil_mid_2" onkeyup="total3()"  value="'.$gradeqryfetch['mil_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="oral3_communication_mid_ave" placeholder="Average" name="mil_mid_ave"  value="'.$gradeqryfetch['mil_mid_ave'].'" readonly="true">
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Physical Science</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="ps_mid_1"  value="'.$gradeqryfetch['ps_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="ps_mid_2" value="'.$gradeqryfetch['ps_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="kpwkp3_mid_ave" placeholder="Average" name="ps_mid_ave" value="'.$gradeqryfetch['ps_mid_ave'].'" readonly>
                                </div>
                            </div>
                           <div class="row">
                            <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="peh4_mid_1" value="'.$gradeqryfetch['peh4_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="peh4_mid_2" value="'.$gradeqryfetch['peh4_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="genmath3_mid_ave" placeholder="Average" name="peh4_mid_ave" value="'.$gradeqryfetch['peh4_mid_ave'].'" readonly>
                                </div>
                            </div>
                            <div class="row">
                            <label for="validationDefault01"><strong>APPLIED:</strong> Inquiries, Investigation and Immersion</label>
                            <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal3_mid_development_1" onkeyup="total3()" placeholder="First Quarter" name="immersion_mid_1" value="'.$gradeqryfetch['immersion_mid_1'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal3_mid_development_2" onkeyup="total3()" placeholder="Second Quarter" name="immersion_mid_2" value="'.$gradeqryfetch['immersion_mid_2'].'">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="personal3_mid_development_ave" placeholder="Average" name="immersion_mid_ave" value="'.$gradeqryfetch['immersion_mid_ave'].'" readonly>
                                </div>
                            </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>SPECIALIZED:</strong> Electrical Installation and Maintenance (4)</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="els3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="eim4_mid_1" value="'.$gradeqryfetch['eim4_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="els3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="eim4_mid_2" value="'.$gradeqryfetch['eim4_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="els3_mid_ave" placeholder="Average" name="eim4_mid_ave" value="'.$gradeqryfetch['eim4_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                        <label for="validationDefault01"><strong>SPECIALIZED:</strong> Work Immersion/Research/Career Advocacy/Culminating Activity</label>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="peh3_mid_1" onkeyup="total3()" placeholder="First Quarter" name="wrcc_mid_1" value="'.$gradeqryfetch['wrcc_mid_1'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="peh3_mid_2" onkeyup="total3()" placeholder="Second Quarter" name="wrcc_mid_2" value="'.$gradeqryfetch['wrcc_mid_2'].'">
                            </div>
                            <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" id="peh3_mid_ave" placeholder="Average" name="wrcc_mid_ave" value="'.$gradeqryfetch['wrcc_mid_ave'].'" readonly>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final3_average" placeholder="Average" name="2nd_average_12" value="'.$gradeqryfetch['2nd_average_12'].'" readonly>
                                    </div>
                                    </div>
                        <div class="bg-light clearfix">  
                            <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                        </div>
                        </form>
                    ';
                }
                else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "STEM"){
                    echo '	
                    <form role="form" method="POST" action="add_grades_stem12_2.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                    <div>
                        <h1>Science, Techonology, Engineering, and Mathematics (STEM)</h1>
                        <h5>' .$gradeqryfetch['semester']. '</h5>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Media & Information Literacy</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral2_communication_mid_1" placeholder="First Quarter" name="mil_mid_1" onkeyup="total2()" value="'.$gradeqryfetch['mil_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral2_communication_mid_2" placeholder="Second Quarter" name="mil_mid_2" onkeyup="total2()"  value="'.$gradeqryfetch['mil_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="oral2_communication_mid_ave" placeholder="Average" name="mil_mid_ave"  value="'.$gradeqryfetch['mil_mid_ave'].'" readonly="true">
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Physical Science</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="ps_mid_1"  value="'.$gradeqryfetch['ps_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="ps_mid_2" value="'.$gradeqryfetch['ps_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="kpwkp2_mid_ave" placeholder="Average" name="ps_mid_ave" value="'.$gradeqryfetch['ps_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="peh4_mid_1" value="'.$gradeqryfetch['peh4_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="peh4_mid_2" value="'.$gradeqryfetch['peh4_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="genmath2_mid_ave" placeholder="Average" name="peh4_mid_ave" value="'.$gradeqryfetch['peh4_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>APPLIED:</strong> Inquiries, Investigation and Immersion</label>
                    <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal2_mid_development_1" onkeyup="total2()" placeholder="First Quarter" name="immersion_mid_1" value="'.$gradeqryfetch['immersion_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal2_mid_development_2" onkeyup="total2()" placeholder="Second Quarter" name="immersion_mid_2" value="'.$gradeqryfetch['immersion_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="personal2_mid_development_ave" placeholder="Average" name="immersion_mid_ave" value="'.$gradeqryfetch['immersion_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Physics (2)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="physics1_mid_1" value="'.$gradeqryfetch['physics1_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="physics1_mid_2" value="'.$gradeqryfetch['physics1_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="els2_mid_ave" placeholder="Average" name="physics1_mid_ave" value="'.$gradeqryfetch['physics1_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> General Chemistry (2)</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="chemistry1_mid_1" value="'.$gradeqryfetch['chemistry1_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="chemistry1_mid_2" value="'.$gradeqryfetch['chemistry1_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="peh2_mid_ave" placeholder="Average" name="chemistry1_mid_ave" value="'.$gradeqryfetch['chemistry1_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                    <label for="validationDefault01"><strong>SPECIALIZED:</strong> Work Immersion/Research/Career Advocacy/Culminating Activity</label>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment2_tech_mid_1" onkeyup="total2()" placeholder="First Quarter" name="wrcc_mid_1" value="'.$gradeqryfetch['wrcc_mid_1'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment2_tech_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="wrcc_mid_2" value="'.$gradeqryfetch['wrcc_mid_2'].'">
                        </div>
                        <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="empowerment2_tech_mid_ave" placeholder="Average" name="wrcc_mid_ave" value="'.$gradeqryfetch['wrcc_mid_ave'].'" readonly>
                        </div>
                    </div>
                    <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final2_average" placeholder="Average" name="2nd_average_12" value="'.$gradeqryfetch['2nd_average_12'].'" readonly>
                                    </div>
                                    </div>
                    <div class="bg-light clearfix">  
                        <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                    </div>
                    </form>
                ';
            }
            else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "HUMSS"){
                echo '	
                <form role="form" method="POST" action="add_grades_humms12_2.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
                <div>
                    <h1>Humanities and Social Sciences (HUMSS)</h1>
                    <h5>' .$gradeqryfetch['semester']. '</h5>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Media & Information Literacy</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral2_communication_mid_1" placeholder="First Quarter" name="mil_mid_1" onkeyup="total2()" value="'.$gradeqryfetch['mil_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral2_communication_mid_2" placeholder="Second Quarter" name="mil_mid_2" onkeyup="total2()"  value="'.$gradeqryfetch['mil_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="oral2_communication_mid_ave" placeholder="Average" name="mil_mid_ave"  value="'.$gradeqryfetch['mil_mid_ave'].'" readonly="true">
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Physical Science</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="ps_mid_1"  value="'.$gradeqryfetch['ps_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="ps_mid_2" value="'.$gradeqryfetch['ps_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="kpwkp2_mid_ave" placeholder="Average" name="ps_mid_ave" value="'.$gradeqryfetch['ps_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="peh4_mid_1" value="'.$gradeqryfetch['peh4_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="peh4_mid_2" value="'.$gradeqryfetch['peh4_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="genmath2_mid_ave" placeholder="Average" name="peh4_mid_ave" value="'.$gradeqryfetch['peh4_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>APPLIED:</strong> Inquiries, Investigation and Immersion</label>
                <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal2_mid_development_1" onkeyup="total2()" placeholder="First Quarter" name="immersion_mid_1" value="'.$gradeqryfetch['immersion_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal2_mid_development_2" onkeyup="total2()" placeholder="Second Quarter" name="immersion_mid_2" value="'.$gradeqryfetch['immersion_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="personal2_mid_development_ave" placeholder="Average" name="immersion_mid_ave" value="'.$gradeqryfetch['immersion_mid_ave'].'" readonly>
                    </div>
                </div>
                 <div class="row">
                <label for="validationDefault01"><strong>SPECIALIZED:</strong>Trends, Network, Critical Thinking in the 21st Century</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="tnc_mid_1" value="'.$gradeqryfetch['tnc_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="tnc_mid_2" value="'.$gradeqryfetch['tnc_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="els2_mid_ave" placeholder="Average" name="tnc_mid_ave" value="'.$gradeqryfetch['tnc_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Community Engagement, Solidarity Citizenship</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh2_mid_1" onkeyup="total2()" placeholder="First Quarter" name="csc_mid_1" value="'.$gradeqryfetch['csc_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh2_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="csc_mid_2" value="'.$gradeqryfetch['csc_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="peh2_mid_ave" placeholder="Average" name="csc_mid_ave" value="'.$gradeqryfetch['csc_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                <label for="validationDefault01"><strong>SPECIALIZED:</strong> Work Immersion/Research/Career Advocacy/Culminating Activity</label>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment2_tech_mid_1" onkeyup="total2()" placeholder="First Quarter" name="wrcc_mid_1" value="'.$gradeqryfetch['wrcc_mid_1'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment2_tech_mid_2" onkeyup="total2()" placeholder="Second Quarter" name="wrcc_mid_2" value="'.$gradeqryfetch['wrcc_mid_2'].'">
                    </div>
                    <div class="col-md-4 mb-3">
                    <input type="number" class="form-control" id="empowerment2_tech_mid_ave" placeholder="Average" name="wrcc_mid_ave" value="'.$gradeqryfetch['wrcc_mid_ave'].'" readonly>
                    </div>
                </div>
                <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final2_average" placeholder="Average" name="2nd_average_12" value="'.$gradeqryfetch['2nd_average_12'].'" readonly>
                                    </div>
                                    </div>
                <div class="bg-light clearfix">  
                    <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
                </div>
                </form>
            ';
        }
        else if($gradeqryfetch['semester'] == "Second Semester" && $gradeqryfetch['year'] == "12" && $gradeqryfetch['strand'] == "ABM"){
            echo '	
            <form role="form" method="POST" action="add_grades_abm12_2.php?lrn=' .$gradeqryfetch['lrn'].'" enctype="multipart/form-data">
            <div>
                <h1>Accountancy, Business and Management (ABM)</h1>
                <h5>' .$gradeqryfetch['semester']. '</h5>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Media & Information Literacy</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="oral1_communication_mid_1" placeholder="First Quarter" name="mil_mid_1" onkeyup="total1()" value="'.$gradeqryfetch['mil_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="oral1_communication_mid_2" placeholder="Second Quarter" name="mil_mid_2" onkeyup="total1()"  value="'.$gradeqryfetch['mil_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="oral1_communication_mid_ave" placeholder="Average" name="mil_mid_ave"  value="'.$gradeqryfetch['mil_mid_ave'].'" readonly="true">
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Physical Science</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="kpwkp1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="ps_mid_1"  value="'.$gradeqryfetch['ps_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="kpwkp1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="ps_mid_2" value="'.$gradeqryfetch['ps_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="kpwkp1_mid_ave" placeholder="Average" name="ps_mid_ave" value="'.$gradeqryfetch['ps_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>CORE:</strong> Physical Education & Health</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="genmath1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="peh4_mid_1" value="'.$gradeqryfetch['peh4_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="genmath1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="peh4_mid_2" value="'.$gradeqryfetch['peh4_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="genmath1_mid_ave" placeholder="Average" name="peh4_mid_ave" value="'.$gradeqryfetch['peh4_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>APPLIED:</strong> Inquiries, Investigation and Immersion</label>
            <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="personal1_mid_development_1" onkeyup="total1()" placeholder="First Quarter" name="immersion_mid_1" value="'.$gradeqryfetch['immersion_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="personal1_mid_development_2" onkeyup="total1()" placeholder="Second Quarter" name="immersion_mid_2" value="'.$gradeqryfetch['immersion_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="personal1_mid_development_ave" placeholder="Average" name="immersion_mid_ave" value="'.$gradeqryfetch['immersion_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>SPECIALIZED:</strong>Business Finance</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="els1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="business1_mid_1" value="'.$gradeqryfetch['business1_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="els1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="business1_mid_2" value="'.$gradeqryfetch['business1_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="els1_mid_ave" placeholder="Average" name="business1_mid_ave" value="'.$gradeqryfetch['business1_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Applied Economics</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="peh1_mid_1" onkeyup="total1()" placeholder="First Quarter" name="economics_mid_1" value="'.$gradeqryfetch['economics_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="peh1_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="economics_mid_2" value="'.$gradeqryfetch['economics_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="peh1_mid_ave" placeholder="Average" name="economics_mid_ave" value="'.$gradeqryfetch['economics_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Business Ethics and Social Responsibility</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="empowerment1_tech_mid_1" onkeyup="total1()" placeholder="First Quarter" name="business2_mid_1" value="'.$gradeqryfetch['business2_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="empowerment1_tech_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="business2_mid_2" value="'.$gradeqryfetch['business2_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="empowerment1_tech_mid_ave" placeholder="Average" name="business2_mid_ave" value="'.$gradeqryfetch['business2_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
            <label for="validationDefault01"><strong>SPECIALIZED:</strong> Work Immersion/Research/Career Advocacy/Culminating Activity</label>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="css2_mid_1" onkeyup="total1()" placeholder="First Quarter" name="wrcc_mid_1" value="'.$gradeqryfetch['wrcc_mid_1'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="css2_mid_2" onkeyup="total1()" placeholder="Second Quarter" name="wrcc_mid_2" value="'.$gradeqryfetch['wrcc_mid_2'].'">
                </div>
                <div class="col-md-4 mb-3">
                <input type="number" class="form-control" id="css2_mid_ave" placeholder="Average" name="wrcc_mid_ave" value="'.$gradeqryfetch['wrcc_mid_ave'].'" readonly>
                </div>
            </div>
            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                    <div class="col-md-4">
                                    <label><strong>General Ave. for the Semester:</strong></label>
                                    <input type="number" class="form-control" id="final1_average" placeholder="Average" name="2nd_average_12" value="'.$gradeqryfetch['2nd_average_12'].'" readonly>
                                    </div>
                                    </div>
            <div class="bg-light clearfix">  
                <button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
            </div>
            </form>
        ';
    }
                                     else if($gradeqryfetch['semester'] == "Closed"){
                                    echo '	
                        <h5>Not Available</h5>
                        ';
                    }
                }
                }
                mysqli_free_result($result);
            }while(mysqli_next_result($conn));
        }
    
                ?>

            
				    </div><!--//app-card-body-->
				    <!--//app-card-footer-->
				</div><!--//row-->
			    <!--//row-->
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
            <small class="copyright">Bachelor of Science in Information Technology - Interns A.Y. 2022-2023 | Copyright © <script>document.write(new Date().getFullYear())</script>. All rights reserved.</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
	<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js
"></script>
<script>
    <?php 
    
    if(isset($_SESSION['success']))
    {
        ?>
Swal.fire(
  '',
  '<?php echo $_SESSION['success']; ?>',
  'success'
)
        <?php 
        unset($_SESSION['success']);
    }

?>  
    </script>
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
	<script>
$(document).ready(function () {
    $('#example').DataTable({
        scrollX: false,
    });
});
	</script>
	<style>
		div.dataTables_wrapper {
        width: auto;
        margin: 0 auto;
    }
	</style>
   
         <script>
function total(){
    var oral_communication_mid_1 = document.getElementById('oral_communication_mid_1').value;
    var oral_communication_mid_2 = document.getElementById('oral_communication_mid_2').value;
    oral_communication_mid_ave = parseInt(oral_communication_mid_1) + parseInt(oral_communication_mid_2);
    document.getElementById('oral_communication_mid_ave').value = oral_communication_mid_ave / 2;
   
    var kpwkp_mid_1 = document.getElementById('kpwkp_mid_1').value;
    var kpwkp_mid_2 = document.getElementById('kpwkp_mid_2').value;
    kpwkp_mid_ave = parseInt(kpwkp_mid_1) + parseInt(kpwkp_mid_2);
    document.getElementById('kpwkp_mid_ave').value = kpwkp_mid_ave / 2;
    
    var genmath_mid_1 = document.getElementById('genmath_mid_1').value;
    var genmath_mid_2 = document.getElementById('genmath_mid_2').value;
    genmath_mid_ave = parseInt(genmath_mid_1) + parseInt(genmath_mid_2);
    document.getElementById('genmath_mid_ave').value = genmath_mid_ave / 2;

    var personal_mid_development_1 = document.getElementById('personal_mid_development_1').value;
    var personal_mid_development_2 = document.getElementById('personal_mid_development_2').value;
    personal_mid_development_ave = parseInt(personal_mid_development_1) + parseInt(personal_mid_development_2);
    document.getElementById('personal_mid_development_ave').value = personal_mid_development_ave / 2;

    var els_mid_1 = document.getElementById('els_mid_1').value;
    var els_mid_2 = document.getElementById('els_mid_2').value;
    els_mid_ave = parseInt(els_mid_1) + parseInt(els_mid_2);
    document.getElementById('els_mid_ave').value = els_mid_ave / 2;

    var peh_mid_1 = document.getElementById('peh_mid_1').value;
    var peh_mid_2 = document.getElementById('peh_mid_2').value;
    peh_mid_ave = parseInt(peh_mid_1) + parseInt(peh_mid_2);
    document.getElementById('peh_mid_ave').value = peh_mid_ave / 2;

    var empowerment_tech_mid_1 = document.getElementById('empowerment_tech_mid_1').value;
    var empowerment_tech_mid_2 = document.getElementById('empowerment_tech_mid_2').value;
    empowerment_tech_mid_ave = parseInt(empowerment_tech_mid_1) + parseInt(empowerment_tech_mid_2);
    document.getElementById('empowerment_tech_mid_ave').value = empowerment_tech_mid_ave / 2;
 
    var css1_mid_1 = document.getElementById('css1_mid_1').value;
    var css1_mid_2 = document.getElementById('css1_mid_2').value;
    css1_mid_ave = parseInt(css1_mid_1) + parseInt(css1_mid_2);
    document.getElementById('css1_mid_ave').value = css1_mid_ave / 2;

    var century_literature_mid_1 = document.getElementById('century_literature_mid_1').value;
    var century_literature_mid_2 = document.getElementById('century_literature_mid_2').value;
    century_literature_mid_ave = parseInt(century_literature_mid_1) + parseInt(century_literature_mid_2);
    document.getElementById('century_literature_mid_ave').value = century_literature_mid_ave / 2;

    final_average = parseInt((oral_communication_mid_ave)) / 2 + parseInt((kpwkp_mid_ave)) / 2 + parseInt((genmath_mid_ave)) / 2 + parseInt((personal_mid_development_ave)) / 2 + parseInt((els_mid_ave)) / 2 + parseInt((peh_mid_ave)) / 2 + parseInt((empowerment_tech_mid_ave)) / 2 + parseInt((css1_mid_ave)) / 2 + parseInt((century_literature_mid_ave)) / 2;
    document.getElementById('final_average').value = final_average / 9;

   
}
   
    </script>
         <script>
function total1(){
    var oral1_communication_mid_1 = document.getElementById('oral1_communication_mid_1').value;
    var oral1_communication_mid_2 = document.getElementById('oral1_communication_mid_2').value;
    oral1_communication_mid_ave = parseInt(oral1_communication_mid_1) + parseInt(oral1_communication_mid_2);
    document.getElementById('oral1_communication_mid_ave').value = oral1_communication_mid_ave / 2;
   
    var kpwkp1_mid_1 = document.getElementById('kpwkp1_mid_1').value;
    var kpwkp1_mid_2 = document.getElementById('kpwkp1_mid_2').value;
     kpwkp1_mid_ave = parseInt( kpwkp1_mid_1) + parseInt( kpwkp1_mid_2);
    document.getElementById('kpwkp1_mid_ave').value =  kpwkp1_mid_ave / 2;
    
    var genmath1_mid_1 = document.getElementById('genmath1_mid_1').value;
    var genmath1_mid_2 = document.getElementById('genmath1_mid_2').value;
    genmath1_mid_ave = parseInt(genmath1_mid_1) + parseInt(genmath1_mid_2);
    document.getElementById('genmath1_mid_ave').value = genmath1_mid_ave / 2;

    var personal1_mid_development_1 = document.getElementById('personal1_mid_development_1').value;
    var personal1_mid_development_2 = document.getElementById('personal1_mid_development_2').value;
    personal1_mid_development_ave = parseInt(personal1_mid_development_1) + parseInt(personal1_mid_development_2);
    document.getElementById('personal1_mid_development_ave').value = personal1_mid_development_ave / 2;

    var els1_mid_1 = document.getElementById('els1_mid_1').value;
    var els1_mid_2 = document.getElementById('els1_mid_2').value;
    els1_mid_ave = parseInt(els1_mid_1) + parseInt(els1_mid_2);
    document.getElementById('els1_mid_ave').value = els1_mid_ave / 2;

    var peh1_mid_1 = document.getElementById('peh1_mid_1').value;
    var peh1_mid_2 = document.getElementById('peh1_mid_2').value;
    peh1_mid_ave = parseInt(peh1_mid_1) + parseInt(peh1_mid_2);
    document.getElementById('peh1_mid_ave').value = peh1_mid_ave / 2;

    var empowerment1_tech_mid_1 = document.getElementById('empowerment1_tech_mid_1').value;
    var empowerment1_tech_mid_2 = document.getElementById('empowerment1_tech_mid_2').value;
    empowerment1_tech_mid_ave = parseInt(empowerment1_tech_mid_1) + parseInt(empowerment1_tech_mid_2);
    document.getElementById('empowerment1_tech_mid_ave').value = empowerment1_tech_mid_ave / 2;
 
    var css2_mid_1 = document.getElementById('css2_mid_1').value;
    var css2_mid_2 = document.getElementById('css2_mid_2').value;
    css2_mid_ave = parseInt(css2_mid_1) + parseInt(css2_mid_2);
    document.getElementById('css2_mid_ave').value = css2_mid_ave / 2;

    final1_average = parseInt((oral1_communication_mid_ave)) / 2 + parseInt((kpwkp1_mid_ave)) / 2 + parseInt((genmath1_mid_ave)) / 2 + parseInt((personal1_mid_development_ave)) / 2 + parseInt((els1_mid_ave)) / 2 + parseInt((peh1_mid_ave)) / 2 + parseInt((empowerment1_tech_mid_ave)) / 2 + parseInt((css2_mid_ave)) / 2;
    document.getElementById('final1_average').value = final1_average / 8;

   
}
   
    </script>
     <script>
function total2(){
    var oral2_communication_mid_1 = document.getElementById('oral2_communication_mid_1').value;
    var oral2_communication_mid_2 = document.getElementById('oral2_communication_mid_2').value;
    oral2_communication_mid_ave = parseInt(oral2_communication_mid_1) + parseInt(oral2_communication_mid_2);
    document.getElementById('oral2_communication_mid_ave').value = oral2_communication_mid_ave / 2;
   
    var kpwkp2_mid_1 = document.getElementById('kpwkp2_mid_1').value;
    var kpwkp2_mid_2 = document.getElementById('kpwkp2_mid_2').value;
     kpwkp2_mid_ave = parseInt( kpwkp2_mid_1) + parseInt( kpwkp2_mid_2);
    document.getElementById('kpwkp2_mid_ave').value =  kpwkp2_mid_ave / 2;
    
    var genmath2_mid_1 = document.getElementById('genmath2_mid_1').value;
    var genmath2_mid_2 = document.getElementById('genmath2_mid_2').value;
    genmath2_mid_ave = parseInt(genmath2_mid_1) + parseInt(genmath2_mid_2);
    document.getElementById('genmath2_mid_ave').value = genmath2_mid_ave / 2;

    var personal2_mid_development_1 = document.getElementById('personal2_mid_development_1').value;
    var personal2_mid_development_2 = document.getElementById('personal2_mid_development_2').value;
    personal2_mid_development_ave = parseInt(personal2_mid_development_1) + parseInt(personal2_mid_development_2);
    document.getElementById('personal2_mid_development_ave').value = personal2_mid_development_ave / 2;

    var els2_mid_1 = document.getElementById('els2_mid_1').value;
    var els2_mid_2 = document.getElementById('els2_mid_2').value;
    els2_mid_ave = parseInt(els2_mid_1) + parseInt(els2_mid_2);
    document.getElementById('els2_mid_ave').value = els2_mid_ave / 2;

    var peh2_mid_1 = document.getElementById('peh2_mid_1').value;
    var peh2_mid_2 = document.getElementById('peh2_mid_2').value;
    peh2_mid_ave = parseInt(peh2_mid_1) + parseInt(peh2_mid_2);
    document.getElementById('peh2_mid_ave').value = peh2_mid_ave / 2;

    var empowerment2_tech_mid_1 = document.getElementById('empowerment2_tech_mid_1').value;
    var empowerment2_tech_mid_2 = document.getElementById('empowerment2_tech_mid_2').value;
    empowerment2_tech_mid_ave = parseInt(empowerment2_tech_mid_1) + parseInt(empowerment2_tech_mid_2);
    document.getElementById('empowerment2_tech_mid_ave').value = empowerment2_tech_mid_ave / 2;
 
    final2_average = parseInt((oral2_communication_mid_ave)) / 2 + parseInt((kpwkp2_mid_ave)) / 2 + parseInt((genmath2_mid_ave)) / 2 + parseInt((personal2_mid_development_ave)) / 2 + parseInt((els2_mid_ave)) / 2 + parseInt((peh2_mid_ave)) / 2 + parseInt((empowerment2_tech_mid_ave)) / 2;
    document.getElementById('final2_average').value = final2_average / 7;

   
}
   
    </script>
    <script>
function total3(){
    var oral3_communication_mid_1 = document.getElementById('oral3_communication_mid_1').value;
    var oral3_communication_mid_2 = document.getElementById('oral3_communication_mid_2').value;
    oral3_communication_mid_ave = parseInt(oral3_communication_mid_1) + parseInt(oral3_communication_mid_2);
    document.getElementById('oral3_communication_mid_ave').value = oral3_communication_mid_ave / 2;
   
    var kpwkp3_mid_1 = document.getElementById('kpwkp3_mid_1').value;
    var kpwkp3_mid_2 = document.getElementById('kpwkp3_mid_2').value;
     kpwkp3_mid_ave = parseInt( kpwkp3_mid_1) + parseInt( kpwkp3_mid_2);
    document.getElementById('kpwkp3_mid_ave').value =  kpwkp3_mid_ave / 2;
    
    var genmath3_mid_1 = document.getElementById('genmath3_mid_1').value;
    var genmath3_mid_2 = document.getElementById('genmath3_mid_2').value;
    genmath3_mid_ave = parseInt(genmath3_mid_1) + parseInt(genmath3_mid_2);
    document.getElementById('genmath3_mid_ave').value = genmath3_mid_ave / 2;

    var personal3_mid_development_1 = document.getElementById('personal3_mid_development_1').value;
    var personal3_mid_development_2 = document.getElementById('personal3_mid_development_2').value;
    personal3_mid_development_ave = parseInt(personal3_mid_development_1) + parseInt(personal3_mid_development_2);
    document.getElementById('personal3_mid_development_ave').value = personal3_mid_development_ave / 2;

    var els3_mid_1 = document.getElementById('els3_mid_1').value;
    var els3_mid_2 = document.getElementById('els3_mid_2').value;
    els3_mid_ave = parseInt(els3_mid_1) + parseInt(els3_mid_2);
    document.getElementById('els3_mid_ave').value = els3_mid_ave / 2;

    var peh3_mid_1 = document.getElementById('peh3_mid_1').value;
    var peh3_mid_2 = document.getElementById('peh3_mid_2').value;
    peh3_mid_ave = parseInt(peh3_mid_1) + parseInt(peh3_mid_2);
    document.getElementById('peh3_mid_ave').value = peh3_mid_ave / 2;

    final3_average = parseInt((oral3_communication_mid_ave)) / 2 + parseInt((kpwkp3_mid_ave)) / 2 + parseInt((genmath3_mid_ave)) / 2 + parseInt((personal3_mid_development_ave)) / 2 + parseInt((els3_mid_ave)) / 2 + parseInt((peh3_mid_ave)) / 2;
    document.getElementById('final3_average').value = final3_average / 6;

   
}
   
    </script>
</body>
</html> 


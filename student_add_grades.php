<?php session_start();

  if(!isset($_SESSION['admusername'])){
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
						<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img class="img-profile rounded-circle" src="assets/images/users/<?php echo $_SESSION['admprofile'];?>" alt="user profile" width="70px" height="70px"></a>
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
					        <a class="nav-link" href="admin_dashboard.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Overview</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->		
                        <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="teacher_dashboard_admin.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
  <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Teacher's Dashboard</span>
					        </a><!--//nav-link-->
					    </li>		    
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
			    
			    <h1 class="app-page-title">Teacher's Table</h1>
			    
			    <!--//app-card-->
			    <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        <!--//col-->
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1"> Student Grades</h4>
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <?php 
						error_reporting(0);
                            include 'conn.php';
                            $id = $_GET['id'];
                            $gradeqry = mysqli_query($conn,"SELECT * FROM student_tbl WHERE student_id='$id'");
                            $gradeqryfetch = mysqli_fetch_array($gradeqry);
                        ?>
                        <form role="form" id="add_grades" method="POST" action="add_grades.php" enctype="multipart/form-data">
							<div>
								<h5>First Semester</h5>
							</div>
                            <div class="row">
                            <label for="validationDefault01"><strong>CORE: Middle Term -</strong> Oral Communication in Context</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="oral_communication_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="oral_communication_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="oral_communication_mid_ave" readonly="true">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Final Term -</strong> Oral Communication in Context</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="oral_communication_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="oral_communication_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="oral_communication_final_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Middle Term -</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="kpwkp_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="kpwkp_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="kpwkp_mid_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Final Term -</strong> Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="kpwkp_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="kpwkp_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="kpwkp_final_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Middle Term -</strong> General Mathematics</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="genmath_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="genmath_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="genmath_mid_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Final Term -</strong> General Mathematics</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="genmath_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="genmath_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="genmath_final_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Middle Term -</strong> Personal Development</label>
                            <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="personal_mid_development_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="personal_mid_development_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="personal_mid_development_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Final Term -</strong> Personal Development</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="personal_final_development_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="personal_final_development_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="personal_final_development_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Middle Term -</strong> Earth, Life and Science</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="els_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="els_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="els_mid_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Final Term -</strong> Earth, Life and Science</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="els_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="els_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="els_final_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Middle Term -</strong> Physical Education and Health (P.E.) 1</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="peh_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="peh_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="peh_mid_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>CORE: Final Term -</strong> Physical Education and Health (P.E.) 1</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="peh_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="peh_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="peh_final_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>APPLIED AND SPECIALIZED: Middle Term -</strong> Empowerment Technologies (E-Tech) ICT for Professionals Tracks</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="empowerment_tech_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="empowerment_tech_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="empowerment_tech_mid_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>APPLIED AND SPECIALIZED: Final Term -</strong> Empowerment Technologies (E-Tech) ICT for Professionals Tracks</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="empowerment_tech_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="empowerment_tech_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="empowerment_tech_final_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>APPLIED AND SPECIALIZED: Middle Term -</strong> Computer System Servicing (NC II)</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="css_mid_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="css_mid_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="css_mid_ave">
                                </div>
                            </div>
							<div class="row">
                            <label for="validationDefault01"><strong>APPLIED AND SPECIALIZED: Final Term -</strong> Computer System Servicing (NC II)</label>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="First Quarter" name="css_final_1">
                                </div>
								<div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Second Quarter" name="css_final_2">
                                </div>
                                <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" id="validationDefault01" placeholder="Average" name="css_final_ave">
                                </div>
                            </div>
							<div class="bg-light clearfix">  
								<button class="btn btn-primary float-end" name="submit" type="submit"><i class="fas fa-save"></i> Save</button>
							</div>
                            </form>
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
  'Welcome! ',
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
</body>
</html> 


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
				            <a href="teacher_settings.php" title="Settings">
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
								<li><a class="dropdown-item" href="teacher_settings.php">Account</a></li>
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
		            <a class="app-logo" href="teacher_dashboard.php"><img class="logo-icon me-2" src="assets/images/sjnhs_logo.png" alt="logo"><span class="logo-text">SJNHS - IS</span></a>
	
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
						        <a class="nav-link" href="teacher_settings.php">
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
						        <h4 class="notification-title mb-1">Students</h4>
								<div class="notification-type mb-2"><span class="badge bg-info">Lists</span></div>
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
						<div class="table-responsive">
							<table id="example" class="table table-sm table-hover dt-responsive display nowrap">
								<thead>
									<tr>
										<th style="text-align: center;">LRN No.</th>
										<th style="text-align: center;">Image</th>
										<th style="text-align: center;">First Name</th>
										<th style="text-align: center;">Last Name</th>
										<th style="text-align: center;">Section</th>
                                        <th style="text-align: center;">Adviser</th>
										<th style="text-align: center;">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include('conn.php');
										$fetchdata = "SELECT * FROM ict_table WHERE teacher_lname = '".$_SESSION['teacherlname']."' AND teacher_mname = '".$_SESSION['teachermname']."' AND teacher_fname = '".$_SESSION['teacherfname']."';";
										$fetchdata .= "SELECT * FROM he_table WHERE teacher_lname = '".$_SESSION['teacherlname']."' AND teacher_mname = '".$_SESSION['teachermname']."' AND teacher_fname = '".$_SESSION['teacherfname']."';";
										$fetchdata .= "SELECT * FROM ia_table WHERE teacher_lname = '".$_SESSION['teacherlname']."' AND teacher_mname = '".$_SESSION['teachermname']."' AND teacher_fname = '".$_SESSION['teacherfname']."';";
										$fetchdata .= "SELECT * FROM stem_table WHERE teacher_lname = '".$_SESSION['teacherlname']."' AND teacher_mname = '".$_SESSION['teachermname']."' AND teacher_fname = '".$_SESSION['teacherfname']."';";
										$fetchdata .= "SELECT * FROM humms_table WHERE teacher_lname = '".$_SESSION['teacherlname']."' AND teacher_mname = '".$_SESSION['teachermname']."' AND teacher_fname = '".$_SESSION['teacherfname']."';";
										$fetchdata .= "SELECT * FROM abm_table WHERE teacher_lname = '".$_SESSION['teacherlname']."' AND teacher_mname = '".$_SESSION['teachermname']."' AND teacher_fname = '".$_SESSION['teacherfname']."';";
										if(mysqli_multi_query($conn,$fetchdata)){
											do{
												if($result = mysqli_store_result($conn)){
													while($rowfetchdata = mysqli_fetch_array($result)){
											
										
									?>
									<tr>
										
										<td style="text-align: center;"><?php echo ucwords($rowfetchdata['lrn']); ?></td>
										<td style="text-align: center;"><?php echo '<img src="assets/images/users/'.$rowfetchdata['image'].'" class="img-profile rounded-circle" alt="image" width="70px" height="70px">' ?></td>
										<td style="text-align: center;"><?php echo ucwords($rowfetchdata['firstname']); ?></td>
										<td style="text-align: center;"><?php echo ucwords($rowfetchdata['lastname']); ?></td>
										<td style="text-align: center; text-transform: capitalize;"><?php echo ucwords($rowfetchdata['strand'].'-'.$rowfetchdata['year'].'-'.$rowfetchdata['section']); ?></td>
                                        <td style="text-align: center;"><?php echo ucwords($rowfetchdata['teacher_lname'].', '.$rowfetchdata['teacher_fname']); ?></td>
										<td style="text-align: center;">
										<a type="button" class="btn btn-outline-success" href="student_add_grades_teacher.php?lrn=<?php echo $rowfetchdata['lrn']; ?>"><i class="fas fa-school"></i></a>
										<a type="button" class="btn btn-outline-success" href="./assets/reports/school-form-9.php?lrn=<?php echo $rowfetchdata['lrn']; ?>">SF9</a>
										</td>
									</tr>
									<?php
									}
									mysqli_free_result($result);
								}
							}while(mysqli_next_result($conn)); } ?>
								</tbody>
							</table>
						</div>
					    
				    </div><!--//app-card-body-->
				    <!--//app-card-footer-->
				</div><!--//row-->
			    <!--//row-->
			    <?php include('teacher_addstudent_modal.php'); ?>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
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


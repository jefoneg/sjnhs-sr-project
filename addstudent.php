<?php
session_start();
ob_start();

include('conn.php');

$lrn = mysqli_real_escape_string($conn, $_POST['lrn']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$birth = mysqli_real_escape_string($conn, $_POST['birth']);
$date_admission = mysqli_real_escape_string($conn, $_POST['date_admission']);
$section = mysqli_real_escape_string($conn, $_POST['section']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];
$teacher_mname = $_POST['teacher_mname'];
$strand = mysqli_real_escape_string($conn, $_POST['strand']);
$semester = mysqli_real_escape_string($conn, $_POST['semester']);
$userfile = $_FILES['userfile']['name'];

$sql = mysqli_query($conn, "SELECT * FROM student_tbl where lrn = $lrn");
$row = mysqli_fetch_array($sql);
    if(mysqli_num_rows($sql) !== 0){
        
       echo $_SESSION['warning'] = "Error! Student with $lrn have already existed!";
        header('location: teacher_dashboard_faculty.php');
    }
    else{
        $uploaddir = 'assets/images/users/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            if($strand == 'STEM'){
                $query = "INSERT INTO stem_table (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$sex','$birth','$date_admission','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
                mysqli_query($conn,$query);
        
                $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM stem_table";
                mysqli_query($conn,$query1);
                
                $_SESSION['prompt'] = "Alert!";
                $_SESSION['success'] ="Sucessfully added!";
                header('location: teacher_dashboard_faculty.php');
            }
            if($strand == 'HE'){
                  $query = "INSERT INTO he_table (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$sex','$birth','$date_admission','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
                mysqli_query($conn,$query);
        
                $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM he_table";
                mysqli_query($conn,$query1);
                
                $_SESSION['prompt'] = "Alert!";
                $_SESSION['success'] ="Sucessfully added!";
                header('location: teacher_dashboard_faculty.php');
            }
            if($strand == 'IA'){
                $query = "INSERT INTO ia_table (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$sex','$birth','$date_admission','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
                mysqli_query($conn,$query);
        
                $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM ia_table";
                mysqli_query($conn,$query1);
                
                $_SESSION['prompt'] = "Alert!";
                $_SESSION['success'] ="Sucessfully added!";
                header('location: teacher_dashboard_faculty.php');
            }
            if($strand == 'ICT'){
                $query = "INSERT INTO ict_table (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$sex','$birth','$date_admission','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
                mysqli_query($conn,$query);
        
                $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM ict_table";
                mysqli_query($conn,$query1);
                
                $_SESSION['prompt'] = "Alert!";
                $_SESSION['success'] ="Sucessfully added!";
                header('location: teacher_dashboard_faculty.php');
            }
            if($strand == 'HUMSS'){
                $query = "INSERT INTO humms_table (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$sex','$birth','$date_admission','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
                mysqli_query($conn,$query);
        
                $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM humms_table";
                mysqli_query($conn,$query1);
                
                $_SESSION['prompt'] = "Alert!";
                $_SESSION['success'] ="Sucessfully added!";
                header('location: teacher_dashboard_faculty.php');
            }
            if($strand == 'ABM'){
                $query = "INSERT INTO abm_table (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$sex','$birth','$date_admission','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
                mysqli_query($conn,$query);
        
                $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,sex,birth,date_admission,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM abm_table";
                mysqli_query($conn,$query1);
                
                $_SESSION['prompt'] = "Alert!";
                $_SESSION['success'] ="Sucessfully added!";
                header('location: teacher_dashboard_faculty.php');
            }
        
        } 
        else {
            $_SESSION['prompt'] = "Alert!";
            $_SESSION['success'] ="Error";
            header('location: teacher_dashboard_faculty.php');
        }
    }
?>
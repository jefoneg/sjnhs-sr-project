<?php
session_start();
ob_start();

include('conn.php');
$id = ['student_id'];
$lrn = $_POST['lrn'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$year = $_POST['year'];
$strand = $_POST['strand'];
$semester = $_POST['semester'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];
$teacher_mname = $_POST['teacher_mname'];
$userfile = $_FILES['userfile']['name'];

$sql = mysqli_query($conn, "SELECT * FROM student_tbl where lrn = $lrn");
$get = mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
    if($row['lrn'] == 1){
        
       echo $_SESSION['warning'] = "Wrong!";

    }

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    if($strand == 'STEM'){
        $query = "INSERT INTO stem_table (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
        mysqli_query($conn,$query);

        $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM stem_table";
        mysqli_query($conn,$query1);
        
        $_SESSION['prompt'] = "Alert!";
        $_SESSION['success'] ="Sucessfully added!";
        header('location: teacher_dashboard_admin.php');
    }
    if($strand == 'HE'){
        $query = "INSERT INTO he_table (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
        mysqli_query($conn,$query);
        
        $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM he_table";
        mysqli_query($conn,$query1);
        $_SESSION['prompt'] = "Alert!";
        $_SESSION['success'] ="Sucessfully added!";
        header('location: teacher_dashboard_admin.php');
    }
    if($strand == 'IA'){
        $query = "INSERT INTO ia_table (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
        mysqli_query($conn,$query);

        $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM ia_table";
        mysqli_query($conn,$query1);
        
        $_SESSION['prompt'] = "Alert!";
        $_SESSION['success'] ="Sucessfully added!";
        header('location: teacher_dashboard_admin.php');
    }
    if($strand == 'ICT'){
        $query = "INSERT INTO ict_table (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
        mysqli_query($conn,$query);

        $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM ict_table";
        mysqli_query($conn,$query1);
        
        $_SESSION['prompt'] = "Alert!";
        $_SESSION['success'] ="Sucessfully added!";
        header('location: teacher_dashboard_admin.php');
    }
    if($strand == 'HUMSS'){
        $query = "INSERT INTO humms_table (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
        mysqli_query($conn,$query);

        $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM humms_table";
        mysqli_query($conn,$query1);
        
        $_SESSION['prompt'] = "Alert!";
        $_SESSION['success'] ="Sucessfully added!";
        header('location: teacher_dashboard_admin.php');
    }
    if($strand == 'ABM'){
        $query = "INSERT INTO abm_table (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) VALUES ('$lrn','$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','First Semester','$teacher_fname','$teacher_mname','$teacher_lname')";
        mysqli_query($conn,$query);

        $query1 = "INSERT INTO student_tbl (lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname) SELECT lrn,image,firstname,middlename,lastname,section,year,strand,semester,teacher_fname,teacher_mname,teacher_lname FROM abm_table";
        mysqli_query($conn,$query1);
        
        $_SESSION['prompt'] = "Alert!";
        $_SESSION['success'] ="Sucessfully added!";
        header('location: teacher_dashboard_admin.php');
    }

} 
else {
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Error";
    header('location: teacher_dashboard_admin.php');
}
?>
<?php
session_start();
include('conn.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];
$userfile = $_FILES['userfile']['name'];

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $query = "INSERT INTO student_tbl(image,firstname,lastname,section,teacher_fname,teacher_lname,century_literature,oral_communication,wika_kulturang_pilipino,earth_life_science,genmath,personal_development,pe,empowerment,css1,contemporary,pe2,reading_writing,statistics,pananaliksik,entrep,practical_research1,css2,philosophy,ucsp,pe_health,filipino,practical_research2,english_app,css3,physical_science,mil,pe_health2,immersion,css4,work_immersion) VALUES ('$userfile','$firstname','$lastname','$section','$teacher_fname','$teacher_lname','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')";
    mysqli_query($conn,$query);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Sucessfully added!";
    header('location: teacher_dashboard_admin.php');
} else {
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Error";
    header('location: teacher_dashboard_admin.php');
}
?>
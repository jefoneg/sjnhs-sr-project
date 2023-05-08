<?php
session_start();
ob_start();
include('conn.php');
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$year = $_POST['year'];
$strand = $_POST['strand'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];
$teacher_mname = $_POST['teacher_mname'];
$userfile = $_FILES['userfile']['name'];

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $query = "INSERT INTO ict_table (image,firstname,middlename,lastname,section,year,strand,teacher_fname,teacher_mname,teacher_lname) VALUES ('$userfile','$firstname','$middlename','$lastname','$section','$year','$strand','$teacher_fname','$teacher_mname','$teacher_lname')";
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
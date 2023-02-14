<?php
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
    $query = "INSERT INTO student_tbl(image,firstname,lastname,section,teacher_fname,teacher_lname) VALUES ('$userfile','$firstname','$lastname','$section','$teacher_fname','$teacher_lname')";
    mysqli_query($conn,$query);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Sucessfully added!";
    header('location: teacher_dashboard.php');
} else {
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Error";
    header('location: teacher_dashboard.php');
}
?>
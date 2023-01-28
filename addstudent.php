<?php
include('conn.php');

$image = $_POST['image'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];


$query = "INSERT INTO student_tbl (firstname,lastname,section,teacher_fname,teacher_lname,image) VALUES ('$firstname','$lastname','$section','$teacher_fname','$teacher_lname','$image')";
mysqli_query($conn,$query);
$_SESSION['prompt'] = "Alert!";
$_SESSION['success'] = "Sucessfully added!";

header('location: teacher_dashboard_admin.php');
?>
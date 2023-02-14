<?php
session_start();
include('conn.php');
$id=$_GET['id'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];

$getuserindb = "select * from student_tbl where student_id = '$id'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);

$userfile = $_FILES['userfile']['name'];
$olduserfiledir = "assets/images/users/".$fetchgetuser['image'];

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    $qryimg = "UPDATE student_tbl SET image = '$userfile' WHERE student_id = '$id'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] = "Faculty Updated!";
    header('location: teacher_dashboard.php');
}

$qry = "UPDATE student_tbl SET firstname = '$firstname', lastname = '$lastname', section = '$section', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE student_id = '$id'";
mysqli_query($conn,$qry);
$_SESSION['prompt'] = "Alert!";
$_SESSION['success'] = "Student Updated!";
header('location: teacher_dashboard.php');
?>

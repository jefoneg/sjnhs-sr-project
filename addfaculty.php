<?php
session_start();
include('conn.php');

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$section = mysqli_real_escape_string($conn, $_POST['section']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$strand = mysqli_real_escape_string($conn, $_POST['strand']);
$userfile = $_FILES['userfile']['name'];
$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $query = "INSERT INTO user (firstname,middlename,lastname,username,password,position,image,section,year,strand) VALUES ('$firstname','$middlename','$lastname','$username','$password','$position','$userfile','$section','$year','$strand')";
    mysqli_query($conn,$query);
    $_SESSION['success'] ="Sucessfully added!";
    header('location: admin_dashboard.php');
} else {
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Error";
    header('location: admin_dashboard.php');
}
?>
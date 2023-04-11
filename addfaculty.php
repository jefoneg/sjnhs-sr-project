<?php
session_start();
include('conn.php');

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$section = $_POST['section'];
$userfile = $_FILES['userfile']['name'];

mysqli_query($conn,"INSERT INTO section (list_section) VALUES ('$section')");

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $query = "INSERT INTO user (firstname,middlename,lastname,username,password,position,image,section) VALUES ('$firstname','$middlename','$lastname','$username','$password','$position','$userfile','$section')";
    mysqli_query($conn,$query);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Sucessfully added!";
    header('location: admin_dashboard.php');
} else {
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] ="Error";
    header('location: admin_dashboard.php');
}
?>
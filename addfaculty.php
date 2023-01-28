<?php
include('conn.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$userfile = $_FILES['userfile']['name'];

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $query = "INSERT INTO user (firstname,lastname,username,password,position,image) VALUES ('$firstname','$lastname','$username','$password','$position','$userfile')";
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
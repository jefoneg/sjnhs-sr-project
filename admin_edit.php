<?php
session_start();
include('conn.php');
$id=$_GET['id'];


$image = $_POST['image'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];

$qry = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', username = '$username', password = '$password', position = '$position', image = '$image' WHERE user_id = '$id'";
mysqli_query($conn,$qry);
$_SESSION['prompt'] = "Alert!";
$_SESSION['success'] = "Faculty Updated!";
header('location: admin_dashboard.php');
?>
<?php
include('conn.php');

$image = $_POST['image'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];


$query = "INSERT INTO user (firstname,lastname,username,password,position,image) VALUES ('$firstname','$lastname','$username','$password','$position','$image')";
mysqli_query($conn,$query);
$_SESSION['prompt'] = "Alert!";
$_SESSION['success'] = "Sucessfully added!";

header('location: admin_dashboard.php');
?>
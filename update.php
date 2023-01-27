<?php
session_start();
include('conn.php');
$id=$_GET['id'];


$image = $_POST['image'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$position = $_POST['position'];

$qry = "UPDATE user SET image = '$image', firstname = '$firstname', lastname = '$lastname',position = '$position' WHERE id = '$id'";
mysqli_query($conn,$qry);
header('location: admin_dashboard.php');
?>
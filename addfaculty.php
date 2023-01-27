<?php
include('conn.php');

$image = $_POST['image'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$position = $_POST['position'];


$query = "insert into user (image,firstname,lastname,position) values ('$image','$firstname','$lastname','$position')";
$fetchdata= mysqli_query($conn,$query);

header('location: admin_dashboard.php');

?>  
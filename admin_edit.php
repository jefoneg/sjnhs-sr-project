<?php
session_start();
include('conn.php');
$id=$_GET['id'];

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$section = $_POST['section'];

$getuserindb = "select * from user where user_id = '$id'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);

$userfile = $_FILES['userfile']['name'];
$olduserfiledir = "assets/images/users/".$fetchgetuser['image'];

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    $qryimg = "UPDATE user SET image = '$userfile' WHERE user_id = '$id'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] = "Faculty Updated!";
    header('location: admin_dashboard.php');
}
$qry = "UPDATE user SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', username = '$username', password = '$password', position = '$position', section = '$section' WHERE user_id = '$id'";
mysqli_query($conn,$qry);
$_SESSION['prompt'] = "Alert!";
$_SESSION['success'] = "Faculty Updated!";
header('location: admin_dashboard.php');

?>
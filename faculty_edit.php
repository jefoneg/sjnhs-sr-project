<?php
session_start();
include('conn.php');
$id=$_GET['id'];

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$strand = mysqli_real_escape_string($conn, $_POST['strand']);
$section = mysqli_real_escape_string($conn, $_POST['section']);

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
    $_SESSION['prompt'] = "";
    $_SESSION['success'] = "Successfully Updated!";
    header('location: faculty_dashboard.php');
}
$qry = "UPDATE user SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', username = '$username', password = '$password', year = '$year', strand = '$strand', section = '$section' WHERE user_id = '$id'";
mysqli_query($conn,$qry);
$_SESSION['prompt'] = "";
$_SESSION['success'] = "Successfully Updated!";
header('location: faculty_dashboard.php');

?>
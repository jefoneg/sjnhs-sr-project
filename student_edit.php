<?php
session_start();
include('conn.php');

$lrn = $_POST['lrn'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$section = $_POST['section'];
$year = $_POST['year'];
$strand = $_POST['strand'];
$semester = $_POST['semester'];
$teacher_mname = $_POST['teacher_mname'];
$teacher_fname = $_POST['teacher_fname'];
$teacher_lname = $_POST['teacher_lname'];

$getuserindb = "select * from he_table where lrn = '$lrn'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);
$getuserindb = "select * from stem_table where lrn = '$lrn'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);
$getuserindb = "select * from ict_table where lrn = '$lrn'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);
$getuserindb = "select * from ia_table where lrn = '$lrn'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);
$getuserindb = "select * from humms_table where lrn = '$lrn'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);
$getuserindb = "select * from abm_table where lrn = '$lrn'";
$rungetuser = mysqli_query($conn,$getuserindb);
$fetchgetuser = mysqli_fetch_array($rungetuser);

$userfile = $_FILES['userfile']['name'];
$olduserfiledir = "assets/images/users/".$fetchgetuser['image'];

$uploaddir = 'assets/images/users/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    $qryimg = "UPDATE he_table SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $qryimg = "UPDATE stem_table SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $qryimg = "UPDATE ict_table SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $qryimg = "UPDATE ia_table SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $qryimg = "UPDATE humms_table SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $qryimg = "UPDATE abm_table SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $qryimg = "UPDATE student_tbl SET image = '$userfile' WHERE lrn = '$lrn'";
    mysqli_query($conn,$qryimg);
    unlink($olduserfiledir);
    $_SESSION['prompt'] = "Alert!";
    $_SESSION['success'] = "Faculty Updated!";
    header('location: teacher_dashboard_admin.php');
}

$qry = "UPDATE he_table SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
$qry = "UPDATE stem_table SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
$qry = "UPDATE ict_table SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
$qry = "UPDATE ia_table SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
$qry = "UPDATE humms_table SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
$qry = "UPDATE abm_table SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
$qry = "UPDATE student_tbl SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', section = '$section', year = '$year', strand = '$strand', semester = '$semester',teacher_mname = '$teacher_mname', teacher_fname = '$teacher_fname', teacher_lname = '$teacher_lname' WHERE lrn = '$lrn'";
mysqli_query($conn,$qry);
header('location: teacher_dashboard_faculty.php');
?>

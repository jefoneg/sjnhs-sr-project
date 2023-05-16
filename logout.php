<?php
session_start();

$_SESSION['prompt'] = "Logout";
$_SESSION['success'] = "Logging-out Successful!";
session_destroy();
header('location: index.php');

?>
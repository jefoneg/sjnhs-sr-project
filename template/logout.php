<?php
session_start();

unset($_SESSION['admfname']);
session_destroy();
header('location: ../index.php')

?>
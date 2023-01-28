<?php
    $conn=mysqli_connect("localhost", "root", "root", "sjnhs_db");
    if(mysqli_connect_errno()){
        echo "Connection Fail".mysqli_connect_error();
    }
?>

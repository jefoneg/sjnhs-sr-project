<?php     
    session_start(); 
    include('connection.php');
    $administrators_username = $_POST['administrators_username'];
    $administrator_password = $_POST['administrators_password'];
  
        $administrators_username = stripcslashes($administrators_username);  
        $administrators_password = stripcslashes($administrators_password);  
        $administrators_username = mysqli_real_escape_string($con, $administrators_username);  
        $administrators_password = mysqli_real_escape_string($con, $administrators_password);  
      
        $sql = " SELECT * FROM administrators_tbl WHERE administrators_username = '$administrators_username' AND administrators_password = '$administrators_password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['administrators_username'] = $administrators_username; 
            $_SESSION['administrators_password']= $administrators_password;
            $_SESSION['success']= 'You have successfully logged in!';
            header('location: dashboard.php');
        }  
        else{  
            $_SESSION['warning'] = "Invalid email and password!";
            header('location: sign-in.php'); 
        }     

?>
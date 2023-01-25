<?php     
    session_start(); 
    include('conn.php');
    $administrators_username = $_POST['username'];
    $administrator_password = $_POST['password'];
  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = " SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['username'] = $username; 
            $_SESSION['password']= $password;
            $_SESSION['success']= 'You have successfully logged in!';
            header('location: dashboard.php');
        }  
        else{  
            $_SESSION['warning'] = "Invalid email and password!";
            header('location: sign-in.php'); 
        }     

?>
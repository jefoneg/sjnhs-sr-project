<?php     
    session_start(); 
    include('conn.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = " SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['username'] = $username; 
            $_SESSION['password']= $password;
            $_SESSION['success']= 'You have successfully logged in!';
            header('location:index.html');
        }  
        else{  
            $_SESSION['warning'] = "Invalid email and password!";
            header('location:'); 
        }

?>
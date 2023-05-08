<?php     
    session_start(); 
    include('conn.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $positionadmin = "administrator";
    $positionteacher = "teacher";
    $positionstaff = "staff";
  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);
        stripcslashes($positionadmin);
        stripcslashes($positionteacher);
        stripcslashes($positionstaff);  
        mysqli_real_escape_string($conn, $positionadmin);  
        mysqli_real_escape_string($conn, $positionteacher);  
        mysqli_real_escape_string($conn, $positionstaff);  
        
      
        $sqladmin = " SELECT * FROM user WHERE username = '$username' AND password = '$password' AND position = '$positionadmin'";
        $sqlteacher = " SELECT * FROM user WHERE username = '$username' AND password = '$password' AND position = '$positionteacher'";   
        $sqlstaff = " SELECT * FROM user WHERE username = '$username' AND password = '$password' AND position = '$positionstaff'";   
        $resultadmin = mysqli_query($conn, $sqladmin);
        $resultteacher = mysqli_query($conn, $sqlteacher);  
        $resultstaff = mysqli_query($conn, $sqlstaff);    
        $rowadmin = mysqli_fetch_array($resultadmin, MYSQLI_ASSOC);
        $rowteacher = mysqli_fetch_array($resultteacher, MYSQLI_ASSOC);
        $rowstaff = mysqli_fetch_array($resultstaff, MYSQLI_ASSOC);
        $countadmin = mysqli_num_rows($resultadmin);
        $countteacher = mysqli_num_rows($resultteacher);  
        $countstaff = mysqli_num_rows($resultstaff);    

          
        if($countadmin == 1){  
            $_SESSION['admusername'] = $rowadmin['username'];
            $_SESSION['admfname'] = $rowadmin['firstname']; 
            $_SESSION['admlname']= $rowadmin['lastname'];
            $_SESSION['admprofile']= $rowadmin['image'];
            $_SESSION['prompt'] = "Welcome!";
            $_SESSION['success'] = "You have successfully logged in, " . ucwords($_SESSION['admusername']) . "!";
            header('location:admin_dashboard.php');
        }
        else if($countteacher == 1){ 
            $_SESSION['teacherusername'] = $rowteacher['username']; 
            $_SESSION['teacherfname'] = $rowteacher['firstname']; 
            $_SESSION['teachermname']= $rowteacher['middlename'];
            $_SESSION['teacherlname']= $rowteacher['lastname'];
            $_SESSION['teacherprofile']= $rowteacher['image'];
            $_SESSION['tea']= $rowteacher['section'];
            $_SESSION['prompt'] = "Welcome!";
            $_SESSION['success'] = "You have successfully logged in, " . ucwords($_SESSION['teacherusername']) . "!";
            header('location:teacher_dashboard.php');
        } 
        else if($countstaff == 1){  
            $_SESSION['username'] = $username; 
            $_SESSION['password']= $password;
            $_SESSION['prompt'] = "Welcome!";
            $_SESSION['success']= 'You have successfully logged in!';
            header('location:template/dashboard.php');
        }
        else{  
            $_SESSION['warning'] = "Invalid username and password!";
            header('location: index.php'); 
        }

?>
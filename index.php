<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/index-sources/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./assets/index-sources/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/index-sources/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="./assets/index-sources/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">

    <link rel="icon" href="assets/images/sjnhs_logo.png">

    <title>SJNHS - IS</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="./assets/index-sources/images/High-School.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign-in to <strong>San Juan National High School - Information System</strong></h3>
              <p class="mb-4">Provide necessary information to start your session.</p>
              <?php
                if(isset($_SESSION['warning'])){
                echo "<div class='alert alert-warning text-center'>".$_SESSION['warning']."</div>";
                session_destroy();
                } 
                ?>
            </div>
            <form action="admin_login.php" method="POST">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" required>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="reset-password.php" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="./assets/index-sources/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/index-sources/js/popper.min.js"></script>
    <script src="./assets/index-sources/js/bootstrap.min.js"></script>
    <script src="./assets/index-sources/js/main.js"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js
"></script>
    <script>
    <?php 
    
    if(isset($_SESSION['success']))
    {
        ?>
Swal.fire(
  'Welcome! ',
  '<?php echo $_SESSION['success']; ?>',
  'success'
)
        <?php 
        unset($_SESSION['success']);
    }

?>  
  </body>
</html>
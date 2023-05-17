<?php
if(isset($_POST['get_option']))
{
 include 'conn.php';
 $strand = $_POST['get_option'];
 $year = $_POST['get_option'];
 $section = $_POST['get_option'];
 $find= mysqli_query($conn, "select firstname,lastname,middlename from user where strand='$strand' and year = '$year' and section = '$section' and position = 'Teacher'");
 while($row=mysqli_fetch_array($find))
 {
  echo '
           <div class="row">
                    <div class="col-sm-3">  
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_fname" placeholder="First Name" value = "'.$row['firstname'].'">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <label>Middle Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_mname" placeholder="Middle Name" value = "'.$row['middlename'].'">
                      </div>
                    <div class="col-sm-3">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_lname" placeholder="Last Name" value = "'.$row['lastname'].'">
                      </div>
                    </div>
                    ';
                  }
                  exit;
                 }
                 ?>
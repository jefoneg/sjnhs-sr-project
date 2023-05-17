<div class="modal fade" id="addnewstudent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Add Student</h5>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form enctype="multipart/form-data" action="addstudent.php" method="POST">
        <div class="row">
            <div class="col-sm-3">
                      <div class="form-group">
                        <label>LRN No.</label>
                        <input type="number" class="form-control" name="lrn" placeholder="LRN No." required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="lastname" placeholder="Last Name">
                      </div>
                      <div class="col-sm-3">
                      <label>Middle Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="middlename" placeholder="Middle Name">
                      </div>
                 </div>
          <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" style="text-transform: uppercase;" name="birth">
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Sex</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="sex">
                          <option value="Male">Male</option>      
                          <option value="Female">Female</option>                         
                        </select>
                      </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date of SHS Admission</label>
                        <input type="date" class="form-control" style="text-transform: uppercase;" name="date_admission">
                      </div>
                    </div>
                   </div>
                    <div class="row">
                    <div class="col-sm-4">
                    <label>Profile Image</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" required>
                      </div>
                      <div style="max-width: 125px;">
                      <div class="form-group">
                        <label>Strand</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="strand">
                        <option></option>
                        <?php 
                            include('conn.php');
                            $fetchsection = mysqli_query($conn,"SELECT strand FROM user WHERE position = 'Teacher' GROUP BY strand");
                            while($fetchsectioninfo = mysqli_fetch_array($fetchsection)){
                          echo '
                          <option style="text-transform: capitalize;" value="'.$fetchsectioninfo['strand'].'">'.$fetchsectioninfo['strand'].'</option>';
                            } ?>                                   
                        </select>
                      </div>
                    </div>
                    <div style="max-width: 110px;">
                      <div class="form-group">
                        <label>Year</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="year">
                        <option></option>
                        <?php 
                            include('conn.php');
                            $fetchsection = mysqli_query($conn,"SELECT year FROM user WHERE position = 'Teacher' GROUP BY year");
                            while($fetchsectioninfo = mysqli_fetch_array($fetchsection)){
                          echo '
                          <option style="text-transform: capitalize;" value="'.$fetchsectioninfo['year'].'">'.$fetchsectioninfo['year'].'</option>';
                            } ?>                           
                        </select>
                      </div>
                    </div>
                    <div style="max-width: 125px;">
                      <div class="form-group">
                        <label>Section</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="section">
                        <option></option>
                          <?php 
                            include('conn.php');
                            $fetchsection = mysqli_query($conn,"SELECT section FROM user WHERE position = 'Teacher' GROUP BY section");
                            while($fetchsectioninfo = mysqli_fetch_array($fetchsection)){
                          echo '
                          <option style="text-transform: capitalize;" value="'.$fetchsectioninfo['section'].'">'.$fetchsectioninfo['section'].'</option>';
                            } ?>                  
                        </select>
                      </div>
                    </div>
                    <h5>Adviser</h5>
                    <div id = "new_select">

                    </div>
					<div style="height:10px;"></div>
                <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="icon text-white-100">
                                            <i class="fas fa-backspace"></i>
                                        </span>Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="icon text-white-100">
                                            <i class="fas fa-check"></i>
                                        </span> Submit</a>
                </div>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>


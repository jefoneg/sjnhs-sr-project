<div class="modal fade" id="addnewstudent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Add Student</h5>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form enctype="multipart/form-data" method="POST" action="addstudent.php">
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Middle Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="middlename" placeholder="Middle Name">
                      </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="lastname" placeholder="Last Name">
                      </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Section</label>
                        <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="section">
                          <option placeholder="0" selected>Select Section</option>
                          <?php 
                            include('conn.php');
                            $fetchsection = mysqli_query($conn,"SELECT * FROM section");
                            while($fetchsectioninfo = mysqli_fetch_array($fetchsection)){
                          ?>
                          <option value="<?php echo $fetchsectioninfo['list_section']; ?>"><?php echo $fetchsectioninfo['list_section']; ?></option>
                          <?php } ?>                         
                        </select>
                      </div>
                    </div>
                    </div>
					<div style="height:10px;"></div>
					<div class="row">
                    <div class="col-sm-6">
                    <label>Profile Image</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" required>
                      </div>
                    </div>
                <div style="height:10px;"></div>
                <h5 class="modal-title">Adviser</h5>    
					      <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_fname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Middle Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_mname" placeholder="Middle Name">
                      </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_lname" placeholder="Last Name">
                      </div>
                    </div>
					<div style="height:10px;"></div>
                <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="icon text-white-100">
                                            <i class="fas fa-backspace"></i>
                                        </span>Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="icon text-white-100">
                                            <i class="fas fa-check"></i>
                                        </span> Save</a>
                </div>
				</form>
                </div>
            </div>
        </div>
    </div>

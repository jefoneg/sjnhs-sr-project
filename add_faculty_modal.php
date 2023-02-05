<div class="modal fade" id="addnewfaculty" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Add Faculty</h5>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form enctype="multipart/form-data" action="addfaculty.php" method="POST">
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="lastname" placeholder="Last Name">
                      </div>
                    </div>
					<div style="height:10px;"></div>
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Password</label>
                        <input type="password" id="serialnum" class="form-control" name="password" placeholder="Password">
                      </div>
                    </div>
					<div style="height:10px;"></div>
					<div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Profile Image</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" required>
                      </div>
                    </div>
                      <div class="col-sm-6">
                      <label>Position</label>
                      <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="position">
                        <option value="">Select Option</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Staff">Staff</option>
                        <option value="Teacher">Teacher</option>
                      </select>
                      </div>
                    </div>
					<div style="height:10px;"></div>
          <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Section</label>
                        <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="section">
                          <option value="">Select Option</option>
                          <option value="11-ICT-A">11-ICT-A</option>
                          <option value="11-ICT-B">11-ICT-B</option>
                          <option value="11-ICT-C">11-ICT-C</option>
                          <option value="11-ICT-D">11-ICT-D</option>
                          <option value="11-ICT-E">11-ICT-E</option>
                          <option value="12-ICT-A">12-ICT-A</option>
                          <option value="12-ICT-B">12-ICT-B</option>
                          <option value="12-ICT-C">12-ICT-C</option>
                          <option value="12-ICT-D">12-ICT-D</option>
                          <option value="12-ICT-E">12-ICT-E</option>
                          <option value="11-STEM-A">11-STEM-A</option>
                          <option value="11-STEM-B">11-STEM-B</option>
                          <option value="11-STEM-C">11-STEM-C</option>
                          <option value="11-STEM-D">11-STEM-D</option>
                          <option value="11-STEM-E">11-STEM-E</option>
                          <option value="12-STEM-A">12-STEM-A</option>
                          <option value="12-STEM-B">12-STEM-B</option>
                          <option value="12-STEM-C">12-STEM-C</option>
                          <option value="12-STEM-D">12-STEM-D</option>
                          <option value="12-STEM-E">12-STEM-E</option>
                          <option value="11-HUMSS-A">11-HUMSS-A</option>
                          <option value="11-HUMSS-B">11-HUMSS-B</option>
                          <option value="11-HUMSS-C">11-HUMSS-C</option>
                          <option value="11-HUMSS-D">11-HUMSS-D</option>
                          <option value="11-HUMSS-E">11-HUMSS-E</option>
                          <option value="12-HUMSS-A">12-HUMSS-A</option>
                          <option value="12-HUMSS-B">12-HUMSS-B</option>
                          <option value="12-HUMSS-C">12-HUMSS-C</option>
                          <option value="12-HUMSS-D">12-HUMSS-D</option>
                          <option value="12-HUMSS-E">12-HUMSS-E</option>
                          <option value="11-EIM-A">11-EIM-A</option>
                          <option value="11-EIM-B">11-EIM-B</option>
                          <option value="11-EIM-C">11-EIM-C</option>
                          <option value="11-EIM-D">11-EIM-D</option>
                          <option value="11-EIM-E">11-EIM-E</option>
                          <option value="12-EIM-A">12-EIM-A</option>
                          <option value="12-EIM-B">12-EIM-B</option>
                          <option value="12-EIM-C">12-EIM-C</option>
                          <option value="12-EIM-D">12-EIM-D</option>
                          <option value="12-EIM-E">12-EIM-E</option>
                        </select>
                      </div>
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

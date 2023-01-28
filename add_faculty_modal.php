<div class="modal fade" id="addnewfaculty" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Add Faculty</h5>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addfaculty.php">
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
                        <input class="form-control" type="file" name="image" id="formFile">
                      </div>
                    </div>
                      <div class="col-sm-6">
                      <label>Position</label>
                      <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="position">
						<option value="">Select Option</option>
                        <option value="Staff">Staff</option>
						<option value="Teacher">Teacher</option>
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

<div class="modal fade" id="addnewstudent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Add Student</h5>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addstudent.php">
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="lastname" placeholder="Last Name">
                      </div>
                    </div>
					<div style="height:10px;"></div>
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Section</label>
                        <input type="text" class="form-control" name="section" placeholder="Section">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Profile Image</label>
                        <input class="form-control" type="file" name="image" id="formFile">
                      </div>
                    </div>
                    <div class="modal-header">
                    <h5 class="modal-title">Adviser</h5>
                </div>
                <div style="height:10px;"></div>
					      <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label>First Name</label>
                        <input type="text" class="form-control" name="teacher_fname" placeholder="First name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" name="teacher_lname" placeholder="Last name">
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

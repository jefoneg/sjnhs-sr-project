<div class="modal fade" id="deletestudent<?php echo $rowfetchdata['lrn']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete faculty?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div>
			<label>Are you sure to delete <strong><?php echo ucwords($rowfetchdata['firstname'].' '.$rowfetchdata['lastname']); ?></strong>?</label>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="student_delete.php?id=<?php echo $rowfetchdata['lrn']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updatestudent<?php echo $rowfetchdata['lrn']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="max-width: 600px;">
    <div class="modal-content">
      <div class="modal-body">
      <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Update Student</h5>
                </div>
                <div class="modal-body">
				<form enctype="multipart/form-data" method="POST" action="student_edit.php?id=<?php echo $rowfetchdata['lrn']; ?>">
        <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>LRN No.</label>
                        <input type="number" class="form-control" name="lrn" value="<?php echo $rowfetchdata['lrn']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Semester</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="semester">
                          <option value="First Semester"<?php if($rowfetchdata['semester'] == 'First Semester') echo "selected";?>>First Semester</option>      
                          <option value="Second Semester"<?php if($rowfetchdata['semester'] == 'Second Semester') echo "selected";?>>Second Semester</option>                            
                        </select>
                      </div>
                    </div>
                 </div>
          <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" value="<?php echo $rowfetchdata['firstname']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Middle Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="middlename" value="<?php echo $rowfetchdata['middlename']; ?>">
                      </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="lastname" value="<?php echo $rowfetchdata['lastname']; ?>">
                      </div>
                    <div class="col-sm-6">
                    <label>Profile Image</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" value="<?php echo $rowfetchdata['image']; ?>">
                      </div>
                    </div>
                      <div class="row">
                      <div style="max-width: 125px;">
                      <div class="form-group">
                        <label>Strand</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="strand" value="<?php echo $rowfetchdata['strand']; ?>" readonly>
                      </div>
                    </div>
                    <div style="max-width: 110px;">
                      <div class="form-group">
                        <label>Year</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="year">
                          <option value="11"<?php if($rowfetchdata['year'] == "11") echo "selected"; ?>>11</option>      
                          <option value="12"<?php if($rowfetchdata['year'] == "12") echo "selected"; ?>>12</option>                            
                        </select>
                      </div>
                    </div>
                    <div style="max-width: 125px;">
                      <div class="form-group">
                        <label>Section</label>
                        <select style="text-transform: capitalize;" class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="section">
                          <option value="A"<?php if($rowfetchdata['section'] == "A") echo "selected"; ?>>A</option>
                          <option value="B"<?php if($rowfetchdata['section'] == "B") echo "selected"; ?>>B</option>                     
                        </select>
                      </div>
                    </div>
                    <h5>Adviser</h5>
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_fname" placeholder="First Name" value="<?php echo $rowfetchdata['teacher_fname']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Middle Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_mname" placeholder="Middle Name" value="<?php echo $rowfetchdata['teacher_mname']; ?>">
                      </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_lname" placeholder="Last Name" value="<?php echo $rowfetchdata['teacher_lname']; ?>">
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
                    </div>
                    <
  
<div class="modal fade" id="deletefaculty<?php echo $rowfetchdata['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete faculty?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <?php include('conn.php');
			$delrow = mysqli_query($conn,"select * from user where user_id='".$rowfetchdata['user_id']."'");
			$delrowfetchdata= mysqli_fetch_array($delrow);
		?>
      <div class="modal-body">
		<div>
			<label>Are you sure to delete <strong><?php echo ucwords($delrowfetchdata['firstname'].' '.$delrowfetchdata['lastname']); ?></strong>?</label>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="admin_delete.php?id=<?php echo $delrowfetchdata['user_id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updatefaculty<?php echo $rowfetchdata['user_id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Faculty</h1>
      </div>
        <div class="modal-body">
      <?php 
        $editrow = mysqli_query($conn,"select * from user where user_id='".$rowfetchdata['user_id']."'");
        $erowfetchdata = mysqli_fetch_array($editrow);
      ?> 
        <form role="form" action="admin_edit.php?id=<?php echo $erowfetchdata['user_id']; ?>" method="POST" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" value="<?php echo $erowfetchdata['firstname']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="lastname" value="<?php echo $erowfetchdata['lastname']; ?>">
                      </div>
                  </div>
                  <div style="height:10px;"></div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $erowfetchdata['username']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Password</label>
                        <input type="password" id="serialnum" class="form-control" name="password" value="<?php echo $erowfetchdata['password']; ?>">
                      </div>
                  </div>
                  <div style="height:10px;"></div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Profile Image</label>
                        <div class="item-data"><?php echo '<img src="assets/images/users/'.$erowfetchdata['image'].'" class="profile-image img-profile rounded-circle" alt="image" width="100px" height="100px">' ?></div>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" value="<?php echo $erowfetchdata['image']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Position</label>
                      <select class="form-control form-select form-select-sm" style="text-transform: capitalize;" aria-label=".form-select-sm example" name="position">
                      <option value="Administrator" <?php if($erowfetchdata['position'] == "Administrator") echo "selected"; ?>>Administrator</option>
                      <option value="Staff" <?php if($erowfetchdata['position'] == "Staff") echo "selected"; ?>>Staff</option>
                      <option value="Teacher" <?php if($erowfetchdata['position'] == "Teacher") echo "selected"; ?>>Teacher</option>
                      </select>
                      </div>
                  </div>
					<div style="height:10px;"></div>
          <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Section</label>
                        <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="section">
                          <option value="11-ICT-A" <?php if($erowfetchdata['section'] == "11-ICT-A") echo "selected"; ?>>11-ICT-A</option>
                          <option value="11-ICT-B" <?php if($erowfetchdata['section'] == "11-ICT-B") echo "selected"; ?>>11-ICT-B</option>
                          <option value="11-ICT-C" <?php if($erowfetchdata['section'] == "11-ICT-C") echo "selected"; ?>>11-ICT-C</option>
                          <option value="11-ICT-D" <?php if($erowfetchdata['section'] == "11-ICT-D") echo "selected"; ?>>11-ICT-D</option>
                          <option value="11-ICT-E" <?php if($erowfetchdata['section'] == "11-ICT-E") echo "selected"; ?>>11-ICT-E</option>
                          <option value="12-ICT-A" <?php if($erowfetchdata['section'] == "12-ICT-A") echo "selected"; ?>>12-ICT-A</option>
                          <option value="12-ICT-B" <?php if($erowfetchdata['section'] == "12-ICT-B") echo "selected"; ?>>12-ICT-B</option>
                          <option value="12-ICT-C" <?php if($erowfetchdata['section'] == "12-ICT-C") echo "selected"; ?>>12-ICT-C</option>
                          <option value="12-ICT-D" <?php if($erowfetchdata['section'] == "12-ICT-D") echo "selected"; ?>>12-ICT-D</option>
                          <option value="12-ICT-E" <?php if($erowfetchdata['section'] == "12-ICT-E") echo "selected"; ?>>12-ICT-E</option>
                          <option value="11-STEM-A" <?php if($erowfetchdata['section'] == "11-STEM-A") echo "selected"; ?>>11-STEM-A</option>
                          <option value="11-STEM-B" <?php if($erowfetchdata['section'] == "11-STEM-B") echo "selected"; ?>>11-STEM-B</option>
                          <option value="11-STEM-C" <?php if($erowfetchdata['section'] == "11-STEM-C") echo "selected"; ?>>11-STEM-C</option>
                          <option value="11-STEM-D" <?php if($erowfetchdata['section'] == "11-STEM-D") echo "selected"; ?>>11-STEM-D</option>
                          <option value="11-STEM-E" <?php if($erowfetchdata['section'] == "11-STEM-E") echo "selected"; ?>>11-STEM-E</option>
                          <option value="12-STEM-A" <?php if($erowfetchdata['section'] == "12-STEM-A") echo "selected"; ?>>12-STEM-A</option>
                          <option value="12-STEM-B" <?php if($erowfetchdata['section'] == "12-STEM-B") echo "selected"; ?>>12-STEM-B</option>
                          <option value="12-STEM-C" <?php if($erowfetchdata['section'] == "12-STEM-C") echo "selected"; ?>>12-STEM-C</option>
                          <option value="12-STEM-D" <?php if($erowfetchdata['section'] == "12-STEM-D") echo "selected"; ?>>12-STEM-D</option>
                          <option value="12-STEM-E" <?php if($erowfetchdata['section'] == "12-STEM-E") echo "selected"; ?>>12-STEM-E</option>
                          <option value="11-HUMSS-A" <?php if($erowfetchdata['section'] == "11-HUMSS-A") echo "selected"; ?>>11-HUMSS-A</option>
                          <option value="11-HUMSS-B" <?php if($erowfetchdata['section'] == "11-HUMSS-B") echo "selected"; ?>>11-HUMSS-B</option>
                          <option value="11-HUMSS-C" <?php if($erowfetchdata['section'] == "11-HUMSS-C") echo "selected"; ?>>11-HUMSS-C</option>
                          <option value="11-HUMSS-D" <?php if($erowfetchdata['section'] == "11-HUMSS-D") echo "selected"; ?>>11-HUMSS-D</option>
                          <option value="11-HUMSS-E" <?php if($erowfetchdata['section'] == "11-HUMSS-E") echo "selected"; ?>>11-HUMSS-E</option>
                          <option value="12-HUMSS-A" <?php if($erowfetchdata['section'] == "12-HUMSS-A") echo "selected"; ?>>12-HUMSS-A</option>
                          <option value="12-HUMSS-B" <?php if($erowfetchdata['section'] == "12-HUMSS-A") echo "selected"; ?>>12-HUMSS-B</option>
                          <option value="12-HUMSS-C" <?php if($erowfetchdata['section'] == "12-HUMSS-A") echo "selected"; ?>>12-HUMSS-C</option>
                          <option value="12-HUMSS-D" <?php if($erowfetchdata['section'] == "12-HUMSS-A") echo "selected"; ?>>12-HUMSS-D</option>
                          <option value="12-HUMSS-E" <?php if($erowfetchdata['section'] == "12-HUMSS-A") echo "selected"; ?>>12-HUMSS-E</option>
                          <option value="11-EIM-A" <?php if($erowfetchdata['section'] == "11-EIM-A") echo "selected"; ?>>11-EIM-A</option>
                          <option value="11-EIM-B" <?php if($erowfetchdata['section'] == "11-EIM-B") echo "selected"; ?>>11-EIM-B</option>
                          <option value="11-EIM-C" <?php if($erowfetchdata['section'] == "11-EIM-C") echo "selected"; ?>>11-EIM-C</option>
                          <option value="11-EIM-D" <?php if($erowfetchdata['section'] == "11-EIM-D") echo "selected"; ?>>11-EIM-D</option>
                          <option value="11-EIM-E" <?php if($erowfetchdata['section'] == "11-EIM-E") echo "selected"; ?>>11-EIM-E</option>
                          <option value="12-EIM-A" <?php if($erowfetchdata['section'] == "12-EIM-A") echo "selected"; ?>>12-EIM-A</option>
                          <option value="12-EIM-B" <?php if($erowfetchdata['section'] == "12-EIM-B") echo "selected"; ?>>12-EIM-B</option>
                          <option value="12-EIM-C" <?php if($erowfetchdata['section'] == "12-EIM-C") echo "selected"; ?>>12-EIM-C</option>
                          <option value="12-EIM-D" <?php if($erowfetchdata['section'] == "12-EIM-D") echo "selected"; ?>>12-EIM-D</option>
                          <option value="12-EIM-E" <?php if($erowfetchdata['section'] == "12-EIM-E") echo "selected"; ?>>12-EIM-E</option>
                        </select>
                      </div>
                    </div>
                  </div>
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
<!-- Modal -->
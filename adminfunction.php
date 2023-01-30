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
			<label>Are you sure to delete <strong><?php echo $delrowfetchdata['firstname']; ?></strong>?</label>
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
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
        <a href="teacher_delete.php?id=<?php echo $delrowfetchdata['user_id']; ?>" class="btn btn-danger">Delete</a>
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
        <form role="form" action="faculty_edit.php?id=<?php echo $erowfetchdata['user_id']; ?>" method="POST" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" value="<?php echo $erowfetchdata['firstname']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Middle Name</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="middlename" value="<?php echo $erowfetchdata['middlename']; ?>">
                      </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="lastname" value="<?php echo $erowfetchdata['lastname']; ?>">
                      </div>
                      <div class="col-sm-6">
                      <label>Position</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="position" value="<?php echo $erowfetchdata['position']; ?>" readonly>
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
                  <div class="row">
                      <div style="max-width: 110px;">
                      <div class="form-group">
                      <label>Strand</label>
                      <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="strand">     
                      <option value="ICT" <?php if($erowfetchdata['strand'] == "ICT") echo "selected"; ?>>ICT</option>
                      <option value="HE" <?php if($erowfetchdata['strand'] == "HE") echo "selected"; ?>>HE</option>           
                      <option value="IA" <?php if($erowfetchdata['strand'] == "IA") echo "selected"; ?>>IA</option>
                      <option value="STEM" <?php if($erowfetchdata['strand'] == "STEM") echo "selected"; ?>>STEM</option>           
                      <option value="HUMSS" <?php if($erowfetchdata['strand'] == "HUMSS") echo "selected"; ?>>HUMSS</option>
                      <option value="ABM" <?php if($erowfetchdata['strand'] == "ABM") echo "selected"; ?>>ABM</option>                   
                        </select>
                      </div>
                      </div>
                        <div style="max-width: 100px;">
                      <div class="form-group">
                        <label>Year</label>
                      <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="year">
                      <option value="11" <?php if($erowfetchdata['year'] == "11") echo "selected"; ?>>11</option>
                      <option value="12" <?php if($erowfetchdata['year'] == "12") echo "selected"; ?>>12</option>           
                        </select>
                      </div>
                      </div>
                      <div style="max-width: 110px;">
                      <div class="form-group">
                        <label>Section</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="section" placeholder="Section" value="<?php echo $erowfetchdata['section']; ?>">
                      </div>
                    </div>
                    </div>
                  <div style="height:10px;"></div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Profile Image</label>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" value="<?php echo $erowfetchdata['image']; ?>">
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
<!-- Modal -->
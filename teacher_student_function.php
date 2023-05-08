<div class="modal fade" id="deletestudent<?php echo $rowfetchdata['student_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Student?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <?php include('conn.php');
			$delrow = mysqli_query($conn,"select * from ict_table where student_id='".$rowfetchdata['student_id']."'");
			$delrowfetchdata= mysqli_fetch_array($delrow);
		?>
      <div class="modal-body">
		<div>
			<label>Are you sure to delete <strong><?php echo ucwords($delrowfetchdata['firstname'].' '.$delrowfetchdata['lastname'].' '.$delrowfetchdata['section']); ?></strong>?</label>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="teacher_student_delete.php?id=<?php echo $delrowfetchdata['student_id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updatestudent<?php echo $rowfetchdata['student_id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Student</h1>
      </div>
        <div class="modal-body">
      <?php 
        $editrow = mysqli_query($conn,"select * from ict_table where student_id='".$rowfetchdata['student_id']."'");
        $erowfetchdata = mysqli_fetch_array($editrow);
      ?> 
        <form role="form" action="teacher_student_edit.php?id=<?php echo $erowfetchdata['student_id']; ?>" method="POST" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" value="<?php echo $erowfetchdata['firstname']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="lastname" value="<?php echo $erowfetchdata['lastname']; ?>">
                      </div>
                  </div>
                  <div style="height:10px;"></div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Section</label>
                        <input type="text" class="form-control" name="section" value="<?php echo $erowfetchdata['section']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
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
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_fname" value="<?php echo $erowfetchdata['teacher_fname']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="teacher_lname" value="<?php echo $erowfetchdata['teacher_lname']; ?>">
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
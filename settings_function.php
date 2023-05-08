<div class="modal fade" id="settingsupdate<?php echo $rowsemfetch['semester']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Semester</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form role="form" action="settings_edit.php" method="POST" enctype="multipart/form-data">
						<div class="row">
								<div class="col-sm-6">
								<div class="form-group">
									<label>Semester Status</label>
									<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="semester">
									<option value="Closed" <?php if($rowsemfetch['semester'] == 'Closed'){echo 'selected';} ?>>Closed</option>
									<option value="First Semester" <?php if($rowsemfetch['semester'] == 'First Semester'){echo 'selected';} ?>>First Semester</option>
									<option value="Second Semester" <?php if($rowsemfetch['semester'] == 'Second Semester'){echo 'selected';} ?>>Second Semester</option>
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
													</span> Save changes</a>
							</div>
					</form>
		
      </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="deletefaculty<?php echo $rowfetchdata['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete faculty?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <?php include('conn.php');
			$fetchdata = mysqli_query($conn,"select * from user where id='".$rowfetchdata['id']."'");
			$delrowfetchdata= mysqli_fetch_array($fetchdata);
		?>
      <div class="modal-body">
		<div>
			<label>Are you sure to delete <strong><?php echo $delrowfetchdata['firstname']; ?></strong>?</label>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="delete.php?id=<?php echo $delrowfetchdata['id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updatefaculty<?php echo $rowfetchdata['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<?php 
			$fetchdata = mysqli_query($conn,"select * from user where id='".$rowfetchdata['id']."'");
			$erowfetchdata = mysqli_fetch_array($fetchdata);
		?> 
      <form role="form" action="update.php?id=<?php echo $erowfetchdata['id']; ?>" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
									  <label for="exampleInputFirstname">Image</label>
									  <input type="text" class="form-control" name="image" value="<?php echo $erowfetchdata['image']; ?>">
									</div>
									<div class="form-group">
									  <label for="exampleInputFirstname">First Name</label>
									  <input type="text" class="form-control" name="firstname" value="<?php echo $erowfetchdata['firstname']; ?>">
									</div>
									<div class="form-group">
									  <label for="exampleInputLastname">Last Name</label>
									  <input type="text" class="form-control" name="lastname" value="<?php echo $erowfetchdata['lastname']; ?>">
									</div>
                  <div class="form-group">
									  <label for="exampleInputMI">Status</label>
									  <input type="text" class="form-control" name="position" value="<?php echo $erowfetchdata['position']; ?>">
									</div>
									<button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
								  </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
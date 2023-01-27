<!-- Modal -->
<div class="modal fade" id="addnewfaculty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Faculty</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form role="form" action="addfaculty.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
									  <label for="exampleInputFirstname">Image</label>
									  <input type="text" class="form-control" name="image">
									</div>
									<div class="form-group">
									  <label for="exampleInputFirstname">First Name</label>
									  <input type="text" class="form-control" name="firstname" placeholder="First Name">
									</div>
									<div class="form-group">
									  <label for="exampleInputLastname">Last Name</label>
									  <input type="text" class="form-control" name="lastname" placeholder="Last Name">
									</div>
                  <div class="form-group">
									  <label for="exampleInputMI">Status</label>
									  <input type="text" class="form-control" name="position" placeholder="Status">
									</div>
									<button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
								  </form>
      </div>
    </div>
  </div>
</div>
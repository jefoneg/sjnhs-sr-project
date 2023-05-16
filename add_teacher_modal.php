<div class="modal fade" id="addnewteacher" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
				<h5 class="modal-title">Add Teacher</h5>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form enctype="multipart/form-data" action="addteacher.php" method="POST">
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="firstname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Middle Name</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="middlename" placeholder="Middle Name">
                      </div>
                    <div class="col-sm-6">
                      <label>Last Name</label>
                        <input type="text" id="serialnum" class="form-control" style="text-transform: capitalize;" name="lastname" placeholder="Last Name">
                      </div>
                      <div class="col-sm-6">
                    <div class="form-group">
                        <label>Profile Image</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
                        <input class="form-control" type="file" name="userfile" accept=".png, .jpg, .jpeg" required>
                      </div>
                    </div>
                    </div>
                      <div class="row">
                      <div style="max-width: 110px;">
                      <div class="form-group">
                      <label>Strand</label>
                      <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="strand">
                          <option value="">Strand</option> 
                          <option value="ICT">ICT</option> 
                          <option value="IA">IA</option>  
                          <option value="HE">HE</option>    
                          <option value="STEM">STEM</option>
                          <option value="HUMSS">HUMSS</option>      
                          <option value="ABM">ABM</option>                      
                        </select>
                      </div>
                      </div>
                        <div style="max-width: 100px;">
                      <div class="form-group">
                        <label>Year</label>
                      <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example" name="year">
                          <option value=""></option> 
                          <option value="11">11</option> 
                          <option value="12">12</option>                        
                        </select>
                      </div>
                      </div>
                      <div style="max-width: 110px;">
                      <div class="form-group">
                        <label>Section</label>
                        <input type="text" class="form-control" style="text-transform: capitalize;" name="section" placeholder="Section">
                      </div>
                    </div>
                    </div>
					<div style="height:10px;"></div>
					<div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" style="text-transform: capitalize;">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Password</label>
                        <input type="password" id="serialnum" class="form-control" name="password" placeholder="Password">
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
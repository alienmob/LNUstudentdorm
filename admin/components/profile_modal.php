<!-- Add -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
					  <br>
            	<h4 class="modal-title text-center"><b>Update Admin Profile</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../pages/profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="username" class="col-sm-4 control-label">Username:</label>

                  	<div class="col-sm-6">
                    	<input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password:</label>

                    <div class="col-sm-6"> 
                      <input type="password" class="form-control" id="password" name="password" minlength="8" value="<?php echo $user['password']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-4 control-label">Firstname:</label>

                  	<div class="col-sm-6">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-4 control-label">Lastname:</label>

                  	<div class="col-sm-6">
                    	<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="address" class="col-sm-4 control-label">Address:</label>

                  	<div class="col-sm-6">
                    	<input type="text" class="form-control" id="address" name="address" value="<?php echo $user['address']; ?>" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="email" class="col-sm-4 control-label">Email:</label>

                  	<div class="col-sm-6">
                    	<input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="contact" class="col-sm-4 control-label">Contact Number:</label>

                  	<div class="col-sm-6">
                    	<input type="number" class="form-control" id="contact" name="contact" value="<?php echo $user['contact']; ?>" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-4 control-label">Photo:</label>

                    <div class="col-sm-6">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-4 control-label">Current Password:</label>

                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Input current password to save changes" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-rounded" name="save"><i class="fa fa-check-square-o"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
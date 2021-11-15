<?php
	$Write="<?php $" . "cardid=''; " . "echo $" . "cardid;" . " ?>";
	file_put_contents('../UIDContainer.php',$Write);


?>



<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Register New Student</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../php/student/student_add.php">
              <div class="form-group">
                    <label for="student_id" class="col-sm-3 control-label">Student ID</label>

                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="student_id" name="student_id" placeholder="Enter Student Number" required>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="privilege" class="col-sm-3 control-label">Privilege</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="privilege" name="privilege" required>
                        <option value="" selected>- Select Privilege -</option>
                        <option value="Non-Athlete">Non-Athlete</option>
                        <option value="Athlete">Athlete</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="gender" name="gender" required>
                        <option value="" selected>- Select Gender -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" id="address" name="address" placeholder="House Number, Street, City/Municipality, Province" rows="2" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact No.</label>

                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="contact" name="contact" placeholder="09xxxxxxxxx" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guardian" class="col-sm-3 control-label">Name of Guardian</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="guardian" name="guardian" placeholder="Enter Name of Guardian" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guardian_contact" class="col-sm-3 control-label">Guardian's Contact No.</label>

                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="guardian_contact" name="guardian_contact" placeholder="09xxxxxxxxx" required>
                    </div>
                </div>


                <div class="form-group">
                <div class="form-row">

                    <label for="floor&room" class="col-sm-3 control-label">Room No.</label>

                    <div class="col-sm-4">
                      <select class="form-control" id="floor" name="floor" required>
                        <option value="" selected>- Select Floor -</option>
                        <?php
                          $sql = "SELECT * FROM floor_category";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['floor_name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>

                    <div class="col-sm-4">
                      <select class="form-control" id="room" name="room" required>
                        <option value="" selected>- Select Room -</option>
                        <?php
                          $sql = "SELECT * FROM room_category";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['room_name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>

                    </div>
                </div>


                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="course" name="course" required>
                        <option value="" selected>- Select Course -</option>
                        <?php
                          $sql = "SELECT * FROM course";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['code']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <label for="getUID" class="col-sm-3 control-label">RFID:</label>
                    <div class="col-sm-8">
                      <textarea name="getUID" id="getUID" class="form-control" placeholder="Please Scan ID / Key Chain to display RFID" rows="1" required></textarea>
                    </div>
                </div>
              <label style="margin-left:150px;"><h5>Please scan RFID to confirm registration!</h5></label>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-rounded" name="add"><i class="fa fa-check"></i> Register</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Update Student Record</b></h4>
            </div>
            <div class="modal-body">
              
              <form class="form-horizontal" method="POST" action="../php/student/student_edit.php">
                <input type="hidden" class="studid" name="id">
                <div class="form-group">
                    <label for="edit_student_id" class="col-sm-3 control-label">Student ID</label>

                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="edit_student_id" name="student_id" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_privilege" class="col-sm-3 control-label">Privilege</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="edit_privilege" name="privilege" required>
                        <option value="" selected>- Select -</option>
                        <option value="Non-Athlete">Non-Athlete</option>
                        <option value="Athlete">Athlete</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="edit_gender" name="gender" required>
                        <option value="" selected>- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" id="edit_address" name="address" rows="2" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Contact No.</label>

                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="edit_contact" name="contact" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="edit_email" name="email" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_guardian" class="col-sm-3 control-label">Name of Guardian</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edit_guardian" name="guardian" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_guardian_contact" class="col-sm-3 control-label">Guardian's Contact No.</label>

                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="edit_guardian_contact" name="guardian_contact" required>
                    </div>
                </div>


                <div class="form-group">
                <div class="form-row">

                    <label for="floor&room" class="col-sm-3 control-label">Room No.</label>

                    <div class="col-sm-4">
                      <select class="form-control" id="floor" name="floor" required>
                        <option value="" selected id="selfloor">- Select Floor -</option>
                        <?php
                          $sql = "SELECT * FROM floor_category";
                          $floor_query = $conn->query($sql);
                          while($floor_row = $floor_query->fetch_array()){
                            echo "
                              <option value='".$floor_row['id']."'>".$floor_row['floor_name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>

                    <div class="col-sm-4">
                      <select class="form-control" id="room" name="room" required>
                        <option value="" selected id="selroom">- Select Room -</option>
                        <?php
                          $sql = "SELECT * FROM room_category";
                          $room_query = $conn->query($sql);
                          while($room_row = $room_query->fetch_array()){
                            echo "
                              <option value='".$room_row['id']."'>".$room_row['room_name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>

                    </div>
                </div>


                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="course" name="course" required>
                        <option value="" selected id="selcourse"></option>
                        <?php
                          $sql = "SELECT * FROM course";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['code']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-warning btn-rounded" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Delete Student Record</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../php/student/student_delete.php">
                <input type="hidden" class="studid" name="id">
                <div class="text-center">
                    <p>DELETE STUDENT</p>
                    <h2 class="del_stu bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-rounded" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center"><b><span class="del_stu"></span></b></h4>
            </div>
            <div class="modal-body">
            

<div class="col-md-12">
   <img src="" id="display_photo" width="300px" height="300px" style="border: 2px solid; margin-left: 116px; margin-bottom: 15px;" alt="Image Here">
  </div>



              <form class="form-horizontal" method="POST" action="../php/student/student_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="studid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-8">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-rounded" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>



<script>
  $(document).ready(function(){
      $("#getUID").load("../UIDContainer.php");
    setInterval(function() {
      $("#getUID").load("../UIDContainer.php");
    }, 600);
	});
</script>
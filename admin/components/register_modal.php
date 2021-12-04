<?php
	$Write="<?php $" . "cardid=''; " . "echo $" . "cardid;" . " ?>";
	file_put_contents('../UIDContainer.php',$Write);


?>

<!-- View -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>View Student Registration</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">

        <input type="hidden" class="reg_id" name="id">
              <div class="form-group">
                    <label for="student_id" class="col-sm-3 control-label">Student ID</label>

                    <div class="col-sm-8">
                      <text type="number" class="form-control" id="view_student_id" name="student_id" placeholder="Enter Student Number"></text>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-8">
                      <text type="text" class="form-control" id="view_lastname" name="lastname" placeholder="Enter Last Name"></text>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-8">
                      <text type="text" class="form-control" id="view_firstname" name="firstname" placeholder="Enter First Name"></text>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Middlename</label>

                    <div class="col-sm-8">
                      <text type="text" class="form-control" id="view_middlename" name="middlename" placeholder="Enter Middle Name"></text>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Birth Date</label>

                    <div class="col-sm-8">
                      <input type="date" class="form-control" id="view_bdate" name="bdate" disabled>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="privilege" class="col-sm-3 control-label">Privilege</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="view_privilege" name="privilege">
                        <option value="" selected id="selprivilege">- Select Privilege -</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="view_gender" name="gender" required>
                        <option value="" selected id="selgender">- Select Gender -</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" id="view_address" name="address" placeholder="House Number, Street, City/Municipality, Province" rows="3" disabled></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact No.</label>

                    <div class="col-sm-8">
                      <text type="number" class="form-control" id="view_contact" name="contact" placeholder="09xxxxxxxxx"></text>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-8">
                      <text type="email" class="form-control" id="view_email" name="email" placeholder="Enter Email"></text>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guardian" class="col-sm-3 control-label">Name of Guardian</label>

                    <div class="col-sm-8">
                      <text type="text" class="form-control" id="view_guardian" name="guardian" placeholder="Enter Name of Guardian"></text>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guardian_contact" class="col-sm-3 control-label">Guardian's Contact No.</label>

                    <div class="col-sm-8">
                      <text type="number" class="form-control" id="view_guardian_contact" name="guardian_contact" placeholder="09xxxxxxxxx"></text>
                    </div>
                </div>


                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-8">
                      <select class="form-control" id="view_course" name="course" required>
                        <option value="" selected id="selcourse">- Select Course -</option>
                      </select>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-right" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Add -->
<div class="modal fade" id="approve">
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

               <input type="hidden" class="reg_id" name="id">
               <input type="hidden" class="student_id" name="student_id">
               <input type="hidden" class="lastname" name="lastname">
               <input type="hidden" class="firstname" name="firstname">
               <input type="hidden" class="middlename" name="middlename">
               <input type="hidden" class="bdate" name="bdate">
               <input type="hidden" class="privilege" name="privilege">
               <input type="hidden" class="gender" name="gender">
               <input type="hidden" class="address" name="address">
               <input type="hidden" class="contact" name="contact">
               <input type="hidden" class="email" name="email">
               <input type="hidden" class="guardian" name="guardian">
               <input type="hidden" class="guardian_contact" name="guardian_contact">
               <input type="hidden" class="course" name="course">
               <input type="hidden" class="photo" name="photo">

                <div class="form-group">
                    <label for="floor_room" class="col-sm-4 control-label">Floor & Room</label>

                    <div class="col-sm-6">
                      <select class="form-control" id="floor_room" name="floor_room" required>
                        <option value="" selected>- Select Floor & Room -</option>
                        <?php
                          $sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
                          LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE occupants != occupancy";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            if($row['status'] != 1){
                              echo "
                              <option value='".$row['id']."'>".$row['floor_name'].' - '.$row['room_name']."</option>
                            ";
                            }       
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
              <input type="submit" class="submit-btn btn btn-success btn-rounded" name="add" value="Register" />
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


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(function() {
        $(".submit-btn").click(function() {
            $(this).val('Please Wait...');
        });
    });
</script>
<div class="modal fade" id="pay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <br>
        <h4 class="modal-title text-center"><b>Confirm Payment?</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="../php/paid/pay_add.php">
          <!-- <input type="hidden" class="studid" id="studid" name="id"> -->
          <input type="hidden" class="stud" id="stud" name="stud">
          <input type="hidden" class="student" name="student_id">
          <input type="hidden" class="vfrom" name="vfrom">
          <input type="hidden" class="vto" name="vto">
          <div class="form-group">
            <label for="students" class="col-sm-4 control-label">Student ID</label>
            <div class="col-sm-5">
              <text type="number" class="form-control students" id="students" name="students"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-4 control-label">Name</label>
            <div class="col-sm-5">
              <text type="text" class="form-control name" id="name" name="name"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="validfrom" class="col-sm-4 control-label">Valid From</label>
            <div class="col-sm-5">
              <text type="date" class="form-control validfrom" id="validfrom" name="validfrom"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="validto" class="col-sm-4 control-label">Valid To</label>
            <div class="col-sm-5">
              <text type="date" class="form-control validto" id="validto" name="validto"></text>
            </div>
          </div>
         
              <input type="hidden" class="form-control upload2" id="upload2" name="upload2">
            
          <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="" id="upload" width="550px" height="650px" style="border: 2px solid; margin-bottom: 4px;" alt="Image Here">

          
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-rounded" name="pay"><i class="fa fa-check"></i> Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- View Photo -->
<div class="modal fade" id="upload_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center col-sm-12"><b><span class="id_id"></span></b></h4>
              <br>
              <h4 class="modal-title text-center col-sm-12"><b><span class="name_id"></span></b></h4>
            </div>
            <div class="modal-body">
            <h4><b><span class="text-center col-sm-12 res"></span></b></h4>

   <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="" id="display_img" width="550px" height="650px" style="border: 2px solid; margin-bottom: 4px;" alt="Image Here">


            </div>
            <div class="modal-footer">
 
            <!-- <div class="form-group">
            <div class="form-row">
            
            <label for="from" class="col-sm control-label"></label>
            <div class="col-sm-3">
              <text type="date" class="form-control" id="from" name="from"></text>
            </div>

            <label for="to" class="col-sm-1 control-label">to</label>
            <div class="col-sm-3">
              <text type="date" class="form-control" id="to" name="to"></text>
            </div>

              </div>
              </div> -->

              <button type="button" class="btn btn-default btn-rounded pull-right" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div>
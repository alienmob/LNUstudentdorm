<!-- Delete -->
<div class="modal fade" id="pend_del">
    <div class="modal-dialog">
        <div class="modal-content col-sm-5 pull-left">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Clear All Approved Requests?</b></h4>
            </div>
            
              <form class="form-horizontal" method="POST" action="../php/pending/pending_delete.php">

           
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button> -->
              <button type="submit" class="btn btn-danger btn-block btn-md rounded-3" name="pend_del"><i class="fa fa-trash"></i> Clear</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Decline -->
<div class="modal fade" id="dec_del">
    <div class="modal-dialog">
        <div class="modal-content col-sm-5 pull-right">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Clear All Declined Requests?</b></h4>
            </div>
            
              <form class="form-horizontal" method="POST" action="../php/pending/pending_dec.php">

           
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button> -->
              <button type="submit" class="btn btn-danger btn-block btn-md rounded-3" name="dec_del"><i class="fa fa-trash"></i> Clear</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- approve -->
<div class="modal fade" id="approve">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <br>
        <h4 class="modal-title text-center"><b>Approve Pending Request?</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="../php/borrow_add.php">
        <input type="hidden" class="stud" name="id">
        <input type="hidden" class="student" name="student_id">
          <div class="form-group">
            <label for="student" class="col-sm-4 control-label">Student ID</label>

            <div class="col-sm-5">
              <text type="number" class="form-control" id="edit_student" name="student"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-4 control-label">Name</label>

            <div class="col-sm-5">
              <text type="text" class="form-control" id="edit_name" name="name"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="code" class="col-sm-4 control-label">Equipment Name</label>

            <div class="col-sm-5">
              <select class="form-control" id="code" name="code[]" required>
                <option value="" selected id="selcode2">- Select -</option>
                
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="note" class="col-sm-3 control-label">Request Note</label>

            <div class="col-sm-7">
              <textarea type="text" class="form-control" id="note" name="note" rows="3" disabled></textarea>
            </div>
          </div>

          <hr>
                <div class="form-group">
                    <label for="feedback" class="col-sm-3 control-label">Approval Note</label>

                    <div class="col-sm-7">
                      <textarea class="form-control" name="feedback" id="feedback" placeholder="Enter Your Note here..." rows="3" required></textarea>
                    </div>
                </div>

          <!-- <span id="append-div"></span>
          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
              <button class="btn btn-primary btn-xs btn-flat" id="append"><i class="fa fa-plus"></i> Equipment Field</button>
            </div>
          </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-rounded" name="add"><i class="fa fa-check"></i> Approve</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- decline -->
<div class="modal fade" id="decline">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <br>
        <h4 class="modal-title text-center"><b>Decline Pending Request?</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="../php/pending/pending_decline.php">
        <input type="hidden" class="stud" name="id">
        <input type="hidden" class="student" name="student_id">
          <div class="form-group">
            <label for="student" class="col-sm-4 control-label">Student ID</label>

            <div class="col-sm-5">
              <text type="number" class="form-control" id="decline_student" name="student"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-4 control-label">Name</label>

            <div class="col-sm-5">
              <text type="text" class="form-control" id="decline_name" name="name"></text>
            </div>
          </div>
          <div class="form-group">
            <label for="code" class="col-sm-4 control-label">Equipment Name</label>

            <div class="col-sm-5">
              <select class="form-control" id="code" name="code[]" required>
                <option value="" selected id="decode2">- Select -</option>
                
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="dnote" class="col-sm-3 control-label">Request Note</label>

            <div class="col-sm-7">
              <textarea type="text" class="form-control" id="dnote" name="dnote" rows="3" disabled></textarea>
            </div>
          </div>

          <hr>
                <div class="form-group">
                    <label for="decline" class="col-sm-3 control-label">Declinal Note</label>

                    <div class="col-sm-7">
                      <textarea class="form-control" name="decline" id="decline" placeholder="Enter Your Note here..." rows="3" required></textarea>
                    </div>
                </div>

          <!-- <span id="append-div"></span>
          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
              <button class="btn btn-primary btn-xs btn-flat" id="append"><i class="fa fa-plus"></i> Equipment Field</button>
            </div>
          </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-rounded" name="add"><i class="fa fa-times"></i> Decline</button>
        </form>
      </div>
    </div>
  </div>
</div>
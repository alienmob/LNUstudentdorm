


<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <br>
        <h4 class="modal-title text-center"><b>Add Dormitory Complaint</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="complaint_add.php">

        <div class="form-group">
        <label for="note" class="col-sm-3 control-label">Complaint Note</label>

        <div class="col-sm-7">
            <textarea class="form-control" name="note" id="note" rows="5" placeholder="Enter Your Complaint Note here..." required></textarea>
        </div>
    </div>
				   
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-rounded" name="add"><i class="fa fa-save"></i> Confirm</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


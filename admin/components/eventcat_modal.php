<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Add New Event Category</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../php/event/eventcat_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">Event Name</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Event Category Name" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-rounded" name="add"><i class="fa fa-save"></i> Add</button>
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
              <h4 class="modal-title text-center"><b>Edit Event Category</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../php/event/eventcat_edit.php">
                <input type="hidden" class="catid" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-4 control-label">Event Name</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="edit_name" name="name">
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
              <h4 class="modal-title text-center"><b>Delete Event Category</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../php/event/eventcat_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>DELETE EVENT CATEGORY</p>
                    <h2 id="del_cat" class="bold"></h2>
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


     
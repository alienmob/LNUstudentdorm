<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Add New Course</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_add.php">
                <div class="form-group">
                    <label for="code" class="col-sm-3 control-label">Code</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="code" name="code" placeholder="Enter Course Code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Course Name</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Course Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="department" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="department" name="department" required>
                        <option value="" selected>- Select Department -</option>
                        <option value="College of Management and Entrepreneurship">College of Management and Entrepreneurship</option>
                        <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                        <option value="College of Education">College of Education</option>
                      </select>
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
              <h4 class="modal-title text-center"><b>Edit Course</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_edit.php">
                <input type="hidden" class="corid" name="id">
                <div class="form-group">
                    <label for="edit_code" class="col-sm-3 control-label">Code</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edit_code" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_title" class="col-sm-3 control-label">Course Name</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edit_title" name="title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="department" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="department" name="department" required>
                        <option value="" selected id="edit_department">- Select Department -</option>
                        <option value="College of Management and Entrepreneurship">College of Management and Entrepreneurship</option>
                        <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                        <option value="College of Education">College of Education</option>
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
              <h4 class="modal-title text-center"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_delete.php">
                <input type="hidden" class="corid" name="id">
                <div class="text-center">
                    <p>DELETE COURSE</p>
                    <h2 id="del_code" class="bold"></h2>
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


     
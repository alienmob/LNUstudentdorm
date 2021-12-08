<!-- View -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>View Request Note</b></h4>
            </div>
            <div class="modal-body">
              
              <form class="form-horizontal">
                <input type="hidden" class="studid" name="id">

                <div class="form-group">
                    <label for="view_note" class="col-sm-3 control-label">Request Note</label>
                    <div class="col-sm-7">
                      <textarea name="view_note" id="view_note" class="form-control" rows="4" disabled></textarea>
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


<!-- approve -->
<div class="modal fade" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>View Response Note</b></h4>
            </div>
            <div class="modal-body">
              
              <form class="form-horizontal">
                <input type="hidden" class="studid" name="id">

                <div class="form-group">
                    <label for="view_approve" class="col-sm-3 control-label">Response Note</label>
                    <div class="col-sm-7">
                      <textarea name="view_approve" id="view_approve" class="form-control" rows="4" disabled></textarea>
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

<!-- decline -->
<div class="modal fade" id="decline">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>View Response Note</b></h4>
            </div>
            <div class="modal-body">
              
              <form class="form-horizontal">
                <input type="hidden" class="studid" name="id">

                <div class="form-group">
                    <label for="view_decline" class="col-sm-3 control-label">Response Note</label>
                    <div class="col-sm-7">
                      <textarea name="view_decline" id="view_decline" class="form-control" rows="4" disabled></textarea>
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
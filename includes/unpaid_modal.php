<!-- Update Photo -->
<div class="modal fade" id="upload">
    <div class="modal-dialog">
        <div class="modal-content col-sm-9 pull-right">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b><span>Upload Receipt</span></b></h4>
            </div>
            <div class="modal-body">


              <form class="form-horizontal" method="POST" action="receipt_upload.php" enctype="multipart/form-data">
                <input type="hidden" class="studid" id="studid" name="studid">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo:</label>

                    <div class="col-sm-6">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-rounded" name="upload"><i class="fa fa-upload"></i> Upload</button>
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

            <!-- <form class="form-horizontal">
            <div class="form-group">
            <div class="form-row">
            
            <label for="from" class="col-sm-1 control-label"></label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="from" name="from" required>
            </div>

          
            <label for="to" class="col-sm-1 control-label">to</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="to" name="to" required>
            </div>

          </div>
            </div>
          </form> -->

          <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="" id="display_img" width="550px" height="650px" style="border: 2px solid; margin-bottom: 4px;" alt="Image Here">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-right" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div>
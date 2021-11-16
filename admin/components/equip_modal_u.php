<!-- ADD QTY -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
                  <br>
            	<h4 class="modal-title text-center"><b>New stock of Equipment</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../php/equip/equip_add_u.php">
				<input type="hidden" class="equipid" name="id">
                <div class="form-group">
                    <label for="title" class="col-sm-4 control-label">Equipment Name</label>

                    <div class="col-sm-6">
                      <text class="form-control" name="title" id="title" placeholder="Enter Equipment Name"></text>
                    </div>
                </div>
               
                <div class="form-group">
                  	<label for="quantity_service" class="col-sm-4 control-label">New Stock</label>

                  	<div class="col-sm-6">
                    	<input type="number" class="form-control" id="quantity_service" name="quantity_service" placeholder="Enter Quantity" required>
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



<!-- SUB QTY -->
<div class="modal fade" id="sub">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
                  <br>
            	<h4 class="modal-title text-center"><b>For Replacement/Unusable Equipment</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../php/equip/equip_sub_u.php">
				<input type="hidden" class="equipid" name="id">
                <div class="form-group">
                    <label for="title2" class="col-sm-4 control-label">Equipment Name</label>

                    <div class="col-sm-6">
                      <text class="form-control" name="title2" id="title2" placeholder="Enter Equipment Name"></text>
                    </div>
                </div>
               

                <div class="form-group">
                  	<label for="quantity_unservice" class="col-sm-4 control-label">New Unusable Equipment</label>

                  	<div class="col-sm-6">
                    	<input type="number" class="form-control" id="quantity_unservice" name="quantity_unservice" placeholder="Enter Quantity" required>
                  	</div>
                </div>

              
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-rounded" name="sub"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
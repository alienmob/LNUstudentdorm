<!-- cancel -->
<div class="modal fade" id="cancel">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
                  <br>
            	<h4 class="modal-title text-center"><b>Cancel This Event?</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../php/event/event_cancel.php">
              <input type="hidden" class="studid" name="id">
                <div class="form-group">
                    <label for="event_category" class="col-sm-4 control-label">Event Title</label>

                    <div class="col-sm-6">
                      <select class="form-control" id="event_category" name="event_category" required>
                        <option value="" selected id="cancel_event_category">- Select Event title -</option>
                        
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-4 control-label">Description</label>

                    <div class="col-sm-6">
                      <textarea class="form-control" name="description" id="cancel_description" placeholder="Enter Description of Event" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                  	<label for="location" class="col-sm-4 control-label">Location</label>

                  	<div class="col-sm-6">
                    	<text type="text" class="form-control" id="cancel_location" name="location" placeholder="Enter Location of Event" required></text>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="date" class="col-sm-4 control-label">Scheduled Date</label>

                  	<div class="col-sm-4">
                    	<input type="date" class="form-control" id="cancel_date" name="date" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="time_start" class="col-sm-4 control-label">Start</label>

                  	<div class="col-sm-4">
                    	<input type="time" class="form-control" id="cancel_time_start" name="time_start" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="time_end" class="col-sm-4 control-label">End</label>

                  	<div class="col-sm-4">
                    	<input type="time" class="form-control" id="cancel_time_end" name="time_end" required>
                  	</div>
                </div>
				

          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<!-- <button type="submit" class="btn btn-danger btn-rounded" name="cancel"><i class="fa fa-check"></i> Cancel Event</button> -->
              <input type="submit" class="cancel-btn btn btn-danger btn-rounded" name="cancel" value="Cancel Event" />
            	</form>
          	</div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
            $(function() {
                $(".cancel-btn").click(function() {
                    $(this).val('Please Wait...');
                });
            });
        </script>


<!-- Clear cancelled -->
<div class="modal fade" id="cancel_clear">
    <div class="modal-dialog">
        <div class="modal-content col-sm-5 pull-right">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <br>
              <h4 class="modal-title text-center"><b>Clear All Cancelled Events?</b></h4>
            </div>

              <form class="form-horizontal" method="POST" action="../php/event/cancel_clear.php">

            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button> -->
              <button type="submit" class="btn btn-danger btn-block btn-md rounded-3" name="cancel_clear"><i class="fa fa-trash"></i> Clear</button>
              </form>
            </div>
        </div>
    </div>
</div>
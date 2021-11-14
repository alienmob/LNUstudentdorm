

<div class="modal fade" id="infomodal">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
                  <br>
            	<h4 class="modal-title text-center"><b>Event</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal">

                <div class="form-group">
                    <label for="eventtitle" class="col-sm-4 control-label">Event Title</label>
                      <div class="col-sm-6">
                    	<text type="text" class="form-control" id="eventtitle" ></text>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="eventdescription" class="col-sm-4 control-label">Description</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" id="eventdescription" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="eventlocation" class="col-sm-4 control-label">Location</label>
                      <div class="col-sm-6">
                    	<text type="text" class="form-control" id="eventlocation" ></text>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="eventdate" class="col-sm-4 control-label">Scheduled Date</label>
                      <div class="col-sm-6">
                    	<date type="date" class="form-control" id="eventdate" ></date>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="eventstart" class="col-sm-4 control-label">Start</label>
                      <div class="col-sm-6">
                    	<time type="time" class="form-control" id="eventstart" ></time>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="eventend" class="col-sm-4 control-label">End</label>
                      <div class="col-sm-6">
                    	<time type="time" class="form-control" id="eventend" ></time>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="eventstatus" class="col-sm-4 control-label">Status</label>
                      <div class="col-sm-6">
                    	<text class="label label-danger" id="eventstatus" ></text>
                  	</div>
                </div>
          	</div>
        </div>
    </div>
</div>

<div class="modal fade" id="setting">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Change RFID Function</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../php/rfid_setting.php">

              <div class="form-group">
                    <label for="rfid" class="col-sm-4 control-label">RFID Function</label>

                    <div class="col-sm-6">
                      <select class="form-control" id="rfid" name="rfid" required>
                        <?php
                          $sql = "SELECT * FROM rfid_setting LEFT JOIN setting ON setting.id=rfid_setting.setting_id ";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['setting_id']." selected'>".$row['function']."</option>
                            ";
                          }
                        ?>
                        <?php
                       
                          $sql = "SELECT * FROM `setting`";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['function']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

        
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-rounded" name="setting"><i class="fa fa-check-square-o"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>



<?php include 'includes/conn.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper bg-gradient-default">
			<div class="container">

				<!-- Main content -->
				<section class="content">
	<?php
        if(isset($_SESSION['error'])){
			echo "<script type='text/javascript'>
					toastr.error('".$_SESSION['error']."', 'Error!')
				  </script>";
			unset($_SESSION['error']);
		  }
	  
		  if(isset($_SESSION['success'])){
			echo "<script type='text/javascript'>
					toastr.success('".$_SESSION['success']."', 'Success!')
				  </script>";
			unset($_SESSION['success']);
		  }
  
  
		  if(isset($_SESSION['email_error'])){
			echo "<script type='text/javascript'>
					toastr.error('".$_SESSION['email_error']."', 'Error!')
				  </script>";
			unset($_SESSION['email_error']);
		  }
	  
		  if(isset($_SESSION['reset_success'])){
			echo "<script type='text/javascript'>
					toastr.success('".$_SESSION['reset_success']."', 'Success!')
				  </script>";
			unset($_SESSION['reset_success']);
		  }
      ?>
		
		<?php
	include 'includes/conn.php';
    $sql = "SELECT * FROM `rfid_setting`";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    $id = $row['setting_id'];
    if($id == 1){
      echo "
      <h4 class='text-white'><span class='label label-transparent'>RFID Status: </span>
	  <span class='label label-success'>Log Book Mode</span></h4>
      
      ";
    }
    else {
      echo "
	  <h4 class='text-white'><span class='label label-transparent'>RFID Status: </span>
	  <span class='label label-success'>Attendance Mode</span></h4>
      
      ";
    }
    ?>
	<br>
		
		<div class="box">
		
			<div class="box-header with-border">
				<h3 class="box-title">Event Attendance</h3>	

				<div class="input-group col-sm-4 pull-right">
				<span class="input-group-addon">Event:</span>
				<select class="form-control" id="event_id" name="event_id" onchange="setEventID(this)">
					<option value="" selected>- Select Event-</option>
					<?php
						date_default_timezone_set('Asia/Manila');
						$date = date('Y-m-d');

						//RETRIEVE RFID_SETTING
						$sqlrfid = "SELECT * FROM `rfid_setting`";
						$queryrfid = $conn->query($sqlrfid);
						$rowrfid = $queryrfid->fetch_assoc();
				
						$eventid = $rowrfid['event_id'];

						$sql = "SELECT *, event.id AS eventid FROM `event` LEFT JOIN event_category ON event_category.id = event.event_category_id
						WHERE event.date <= '$date'";
						$query = $conn->query($sql);
						while($row = $query->fetch_array()){
							if($row['status'] == NULL){
								$selected = $eventid == $row['eventid'] ? 'selected' : '';
								// ECHO  - CHECK IF $row['id'] == rfid_setting['event_id'] -> selected
								echo "<option $selected value='".$row['eventid']."'>".$row['event_name']. ' | ' .date('M d, Y', strtotime($row['date']))."</option>";
							}
						}
					?>
				</select>
			</div>
			</div>
			
		
			

								<div class="box-body">
				  				  <div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<th class="hidden"></th>
											<th>Student ID</th>
											<th>Event</th>
											<th>Name</th>					
											<th>Date</th>					
											<th>Time In</th>
											<th>Time Out</th>

										</thead>
										<tbody id="events">
										
										</tbody>
									</table>
								</div>
								</div>

							</div>

				</section>

			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
		
	</div>

	<?php include 'includes/scripts.php'; ?>

</body>
<script type="text/javascript">
async function setEventID(val){
	console.log(val.value)
	var formData = new FormData()
	formData.append('id', val.value)
	await fetch("./includes/rfid_setting.php", {
		method: "POST",
		body: formData
	}).then(response => {
		console.log("sent");
	}).catch(error => {
		console.log(error)
	});
}

window.onload = function(){
		const eventbtn = document.getElementById('navbarevent')
		const logbookbtn = document.getElementById('navbarlogbook')

		if(window.location.pathname == '/LNUstudentdorm/events.php'){
			eventbtn.remove()
		}
		
	}

    $(document).ready(function(){
      function showData()
      { 
        $.ajax({
          url: 'includes/events_process.php',
          type: 'POST',
          dataType: 'html',
          success: function(result)
          {
            $('#events').html(result);
          },
          error: function()
          {
            alert("Failed to show the event attendance");
          }
        })
      }
      setInterval(function(){ showData(); }, 1000);
    });

  </script>
</html>
<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['event_category'])){
		$eventid = $_GET['event_category'];
		$where = 'WHERE event_category_id = '.$eventid;
	}
?>

<?php
if (!isset($_SESSION['student']) || trim($_SESSION['student']) == '') {
	header('index.php');
}

$studid = $_SESSION['student'];



?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include 'includes/navbar2.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	
    <section class="content-header">
        <h1>
          Student Home Page
        </h1>
        
      </section>

    <!-- Main content -->
    <section class="content">
    <style>
.fc-event-main {
	cursor: pointer !important;
}
</style>
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

		  if(isset($_SESSION['login'])){
			echo "<script type='text/javascript'>
					toastr.info('".$_SESSION['login']."', 'Welcome!')
				  </script>";
			unset($_SESSION['login']);
		  }
      ?>
      <br>
      <div class="row">

		<div class="col-lg-3 col-xs-6 pull-left">
          <!-- small box -->
          <div class="small-box bg-gradient-primary">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM equipments";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Total Equipments</p>
            </div>
            <div class="icon">
              <i class="fa fa-cube"></i>
            </div>
            <a href="equipments.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        
		  <!-- small box -->
		<div class="small-box bg-gradient-green">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM `returns` WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Returned Equipments</p>
            </div>
            <div class="icon">
              <i class="fa fa-mail-reply"></i>
            </div>
            <a href="return.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        
		<!-- small box -->
		<div class="small-box bg-gradient-danger">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM borrow WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Borrowed Equipments</p>
            </div>
            <div class="icon">
              <i class="fa fa-mail-forward"></i>
            </div>
            <a href="borrow.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

		  		  <!-- small box -->
		<div class="small-box bg-gradient-purple">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM violations WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Violations</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation-triangle"></i>
            </div>
            <a href="violation.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

		 

        </div>

		<div class="col-lg-3 col-xs-6 pull-left">
		

		<!-- small box -->
		<div class="small-box bg-gradient-gray">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM pending WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Pending Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <a href="pending.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

       
		<!-- small box -->
		<div class="small-box bg-gradient-pink">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM unpaid WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Unpaid Records</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation-circle"></i>
            </div>
            <a href="unpaid.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        
		<!-- small box -->
		<div class="small-box bg-gradient-info">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM paid WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Paid Records</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="paid.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

		
		     <!-- small box -->
		<div class="small-box bg-translucent-primary">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM complaints WHERE student_id = '$studid'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Complaints</p>
            </div>
            <div class="icon">
              <i class="fa fa-question-circle"></i>
            </div>
            <a href="complaint.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        </div>
      
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pull-right">
          <div class="box">
              
            <div class="box-body">
            <h4 class="box-title">Calendar of Dorm Events</h4>
              <div id="calendar">
              </div>
            </div>
          </div>
      
		</div>





	      

</section>
		</div>
</div>
  
  	
	<?php include 'includes/info-modal.php'; ?>

<?php include 'includes/scripts.php'; ?>

<script>

document.addEventListener('DOMContentLoaded', async function() {
		let response = await fetch('includes/fetch_event.php');
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
				initialView: 'dayGridMonth',
				events: response,
				eventClick: function(info) {
					 console.log(info.event.extendedProps);
						$('#eventtitle').text(info.event.extendedProps.full_info.event_name);
						$('#eventdescription').text(info.event.extendedProps.full_info.description);
						$('#eventlocation').text(info.event.extendedProps.full_info.location);
						$('#eventdate').text(info.event.extendedProps.full_info.date);
						$('#eventstart').text(info.event.extendedProps.full_info.time_start);
						$('#eventend').text(info.event.extendedProps.full_info.time_end);
						$('#eventstatus').text(info.event.extendedProps.full_info.status);
						$('#infomodal').modal('show')
				}
		});
		calendar.render();
});
</script>

</body>
</html>
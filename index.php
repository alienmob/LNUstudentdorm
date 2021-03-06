
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
						<h3 class="box-title">Log Book Record</h3>
						
					</div>

					<div class="box-body">
						<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<th class="hidden"></th>
								<th>Student ID</th>
								<th>Name</th>					
								<th>Date</th>					
								<th>Time In</th>
								<th>Time Out</th>

							</thead>
							<tbody id="logbook">
							
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
	window.onload = function(){
		const logbookbtn = document.getElementById('navbarlogbook')
		if(window.location.pathname == '/LNUstudentdorm/' || window.location.pathname == '/LNUstudentdorm/index.php'){
			logbookbtn.remove()
		}
	
	}
    $(document).ready(function(){
      function showData()
      { 
        $.ajax({
          url: 'includes/logbook_process.php',
          type: 'POST',
          dataType: 'html',
          success: function(result)
          {
            $('#logbook').html(result);
          },
          error: function()
          {
            alert("Failed to show the logs");
          }
        })
      }
      setInterval(function(){ showData(); }, 1500);
    });

  </script>
</html>
<?php include 'includes/session.php'; ?>
<?php
if (!isset($_SESSION['student']) || trim($_SESSION['student']) == '') {
	header('index.php');
}

$stuid = $_SESSION['student'];

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
        Complaints Record List
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
      ?>
      <br>
      
	  <div class="box">
		<div class="box-header with-border">
		<h3 class="box-title">List of Complaints</h3>
		</div>
			<div class="box-header with-border">
			<a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> Add</a>
				
			</div>
			<div class="box-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped" id="example">
					<thead>
						<th>Date</th>
						<th>Complaint</th>
					</thead>
					<tbody>
					<?php
						$sql = "SELECT * FROM complaints WHERE student_id = '$stuid' ORDER BY date DESC";
						$query = $conn->query($sql);
						while($row = $query->fetch_assoc()){
							echo "
								<tr>
								<td>" . date('M d, Y | h:ia', strtotime($row['date'])) . "</td>
								<td>".$row['complaint']."</td>
								</tr>
							";
						}
					?>
					</tbody>
				</table>
			</div>
			</div>
		</div>
  

</section>
		</div>
</div>
  
  	
	<?php include 'includes/complaint_modal.php'; ?>

<?php include 'includes/scripts.php'; ?>


</body>
</html>
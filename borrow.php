<?php include 'includes/session.php'; ?>
<?php
if (!isset($_SESSION['student']) || trim($_SESSION['student']) == '') {
	header('index.php');
}

$stuid = $_SESSION['student'];
$sql = "SELECT * FROM borrow LEFT JOIN equipments ON equipments.id=borrow.equipment_id WHERE student_id = '$stuid' ORDER BY date_borrow DESC";
$action = '';
if (isset($_GET['action'])) {
	$sql = "SELECT * FROM returns LEFT JOIN equipments ON equipments.id=returns.equipment_id WHERE student_id = '$stuid' ORDER BY date_return DESC";
	$action = $_GET['action'];

}


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
      Borrowed Equipment Record List
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
        //   echo "
        //     <div class='alert alert-danger alert-dismissible'>
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //       <h4><i class='icon fa fa-warning'></i> Error!</h4>
        //       ".$_SESSION['error']."
        //     </div>
			
        //   ";
		echo "<script type='text/javascript'>toastr.error('Error!&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['error']."')</script>";
          unset($_SESSION['error']);
        }

        if(isset($_SESSION['email_error'])){
        //   echo "
        //     <div class='alert alert-danger alert-dismissible'>
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //       <h4><i class='icon fa fa-warning'></i> Error!</h4>
        //       ".$_SESSION['email_error']."
        //     </div>
        //   ";
		  echo "<script type='text/javascript'>toastr.error('Error!&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['email_error']."')</script>";
          unset($_SESSION['email_error']);
        }

        if(isset($_SESSION['reset_success'])){
        //   echo "
        //     <div class='alert alert-success alert-dismissible'>
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //       <h4><i class='icon fa fa-check'></i> Success!</h4>
        //       ".$_SESSION['reset_success']."
        //     </div>
        //   ";
		echo "<script type='text/javascript'>toastr.success('Success!&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['reset_success']."')</script>";
          unset($_SESSION['reset_success']);
        }

        if(isset($_SESSION['success'])){
        //   echo "
        //     <div class='alert alert-success alert-dismissible'>
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //       <h4><i class='icon fa fa-check'></i> Success!</h4>
        //       ".$_SESSION['success']."
        //     </div>
        //   ";
		echo "<script type='text/javascript'>toastr.success('Success!&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['success']."')</script>";
          unset($_SESSION['success']);
        }
      ?>
      <br>
      
	  <div class="box">						
								<div class="box-header with-border">
									<h3 class="box-title">Borrowed Records</h3>
									
								</div>
							
								
								<div class="box-body">
				  				  <div class="table-responsive">
									<table class="table table-bordered table-striped" id="example">
									<!-- <table id="example1" class="table table-bordered table-striped"> -->
										<thead>
											<th class="hidden"></th>
											<th>Date</th>
											<th>Equipment Code</th>
											<th>Equipment Name</th>

										</thead>
										<tbody>
											<?php
$sql = "SELECT * FROM borrow LEFT JOIN equipments ON equipments.id=borrow.equipment_id WHERE student_id = '$stuid' ORDER BY date_borrow DESC";
											$query = $conn->query($sql);
											while ($row = $query->fetch_assoc()) {

												 
											
												echo "
			        						<tr>
			        							<td class='hidden'></td>
			        							<td>" . date('M d, Y', strtotime($row['date_borrow'])) . "</td>
			        							<td>" . $row['code'] . "</td>
			        							<td>" . $row['title'] . "</td>


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
  

	<?php include 'includes/scripts.php'; ?>
	
</body>

</html>
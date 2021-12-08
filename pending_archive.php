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
        Equipment Request Archive List
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
			<h3 class="box-title">Equipment Requests</h3>
	
		</div>
		
		<div class="box-body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped" id="example">
				<thead>
					<th class="hidden"></th>
					<th>Date</th>
					<th>Equipment Code</th>
					<th>Equipment Name</th>
					<th>Status</th>
					<th><center>Response Note</center></th>

				</thead>
				<tbody>
					<?php
					$sql = "SELECT *, pending.id AS pid, pending.status AS barstat FROM pending 
					LEFT JOIN equipments ON equipments.id=pending.equipment_id 
					WHERE student_id = '$stuid' AND pending.status >= 1 ORDER BY date_pending DESC";
					$query = $conn->query($sql);
					while ($row = $query->fetch_assoc()) {
						if ($row['barstat']) {
							$status = '<span class="label label-success">Approved</span>';
							} else {
							$status = '<span class="label label-warning">Pending</span>';
							}
							if ($row['barstat'] == 2) {
							$status = '<span class="label label-danger">Declined</span>';
							}
							if ($row['feedback'] != NULL) {
							$response = '<button class="btn btn-info btn-sm approve btn-rounded" data-id="' . $row['pid'] . '"><i class="fa fa-eye"></i></button>';
							} else {
							$response = '<button class="btn btn-info btn-sm decline btn-rounded" data-id="' . $row['pid'] . '"><i class="fa fa-eye"></i></button>';
							}
						echo "
					<tr>
						<td class='hidden'></td>
						<td>" . date('M d, Y', strtotime($row['date_pending'])) . "</td>
						<td>" . $row['code'] . "</td>
						<td>" . $row['title'] . "</td>
						<td>" . $status . "</td>
						<td>
						<center>
						" . $response . "
						</center>
						</td>

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
		<?php include 'includes/pending_modal.php'; ?>
</div>
  
	<?php include 'includes/scripts.php'; ?>
	<script>
    $(function() {

      $(document).on('click', '.approve', function(e) {
        e.preventDefault();
        $('#approve').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

	  $(document).on('click', '.decline', function(e) {
        e.preventDefault();
        $('#decline').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: 'pending_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('.studid').val(response.id);
          $('#view_note').val(response.note).html(response.note);
		  $('#view_approve').val(response.feedback).html(response.feedback);
		  $('#view_decline').val(response.decline).html(response.decline);
        }
      });
    }
  </script>
</body>

</html>
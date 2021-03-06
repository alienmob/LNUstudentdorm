<?php include 'includes/session.php'; ?>
<?php
if (!isset($_SESSION['student']) || trim($_SESSION['student']) == '') {
	header('index.php');
}

$stuid = $_SESSION['student'];
$sql = "SELECT * FROM unpaid WHERE student_id = '$stuid' ORDER BY date_unpaid DESC";
$action = '';
if (isset($_GET['action'])) {
	$sql = "SELECT * FROM paid WHERE student_id = '$stuid' ORDER BY date_paid DESC";
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
        Unpaid Record List
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
							<!-- <div class="box-header with-border">
									<a href="#promissory" data-toggle="modal" class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-plus"></i> Promissory</a>
								</div> -->
								<div class="box-header with-border">
									<h3 class="box-title">Unpaid Record</h3>
									
								</div>
								

								<div class="box-body">
				 				 <div class="table-responsive">
									<table class="table table-bordered table-striped" id="example">
										<thead>
											<th class="hidden"></th>
                      <th>Date Recorded</th>
											<th>Valid Through</th>
											<th>Status</th>
                      <th>Deadline</th>
                      <th>Receipt</th>
                      <th>Upload</th>
					
										</thead>
										<tbody>
											<?php
$sql = "SELECT *, unpaid.id AS ID, unpaid.student_id AS studid FROM unpaid  WHERE student_id = '$stuid' ORDER BY deadline DESC";			
											$query = $conn->query($sql);
											while ($row = $query->fetch_assoc()) {
                        $receipt = (!empty($row['receipt'])) ? 'img/'.$row['receipt'] : 'img/receipt.png';
												if ($row['status']) {
													$status = '<span class="label label-success">Paid</span>';
												  } else {
													$status = '<span class="label label-danger">Unpaid</span>';
												  }

                          if ($row['receipt'] != NULL) {
                            $status = '<span class="label label-success">Pending</span>';
                          }
                          date_default_timezone_set('Asia/Manila');
                          $date = date('Y-m-d');
                          if ($row['deadline'] < $date) {
                            $status = '<span class="label label-warning">Unpaid LATE</span>';
                          }
                          if ($row['deadline'] < $date AND $row['receipt'] != NULL) {
                            $status = '<span class="label label-success">Pending LATE</span>';
                          }
                          if ($row['deadline'] == $date) {
                            $status = '<span class="label label-info">DEADLINE TODAY</span>';
                          }

												$date = (isset($_GET['action'])) ? 'date_paid' : 'date_unpaid';

                        $deadline = $row['deadline'];
                        $date_from = $row['date_from'];
                        $date_to = $row['date_to'];
												echo "
			        						<tr>
			        							<td class='hidden'></td>
                            <td>" . date('M d, Y', strtotime($row['date_unpaid'])) . "</td>
			        							<td>" . date('M d, Y', strtotime($row['date_from'])) . ' - ' . date('M d, Y', strtotime($row['date_to'])) . "</td>
												    <td>" . $status . "</td>
                            <td>" . date('M d, Y', strtotime($row['deadline'])) . "</td>
                            
                          <td>
                          <a href='".$receipt."' data-lightbox='img' 
                          data-title='Deadline: ".date('M d, Y', strtotime($deadline))."<br>".date('M d, Y', strtotime($date_from))." - ".date('M d, Y', strtotime($date_to))."'>
                          <img src='".$receipt."' width='60px' height='60px'></a>
                         </td>

                          <td>
                          <button class='btn btn-sm btn-info upload btn-rounded' data-id='".$row['ID']."'><i class='fa fa-lg fa-upload'></i></button>
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
    <?php include 'includes/unpaid_modal.php'; ?>
</div>
  
	<?php include 'includes/scripts.php'; ?>
	<script>
$(function(){
  $(document).on('click', '.upload', function(e){
    e.preventDefault();
    $('#upload').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.receipt', function(e){
e.preventDefault();
var id = $(this).data('id');
getRow(id);
});

});


function getRow(id) {
      $.ajax({
        type: 'POST',
        url: 'unpaid_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response) {
          console.log(response);
          $('.ID').val(response.id);
          $('#studid').val(response.id);
          $('#display_img').attr("src", response.receipt ? 'img/' + response.receipt : 'img/receipt.png');
          $('.name_id').html(response.firstname+' '+response.lastname);
          $('.id_id').html(response.student_id);
          $('.res').html(response.date_from+'&nbsp; - &nbsp; '+response.date_to);
          $('#from').val(response.date_from);
          $('#to').val(response.date_to);
        }
      });
    }

</script>
</body>

</html>
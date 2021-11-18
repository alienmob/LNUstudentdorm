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
        Paid Record List
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
									<h3 class="box-title">Paid Record</h3>
									
								</div>
								

								<div class="box-body">
				 				 <div class="table-responsive">
									<table class="table table-bordered table-striped" id="example">
										<thead>
											<th class="hidden"></th>
                      <th>Date Paid</th>
											<th>Valid Through</th>
											<th>Status</th>
                      <th>Receipt</th>
					
										</thead>
										<tbody>
											<?php
$sql = "SELECT *, paid.status AS status FROM paid  WHERE student_id = '$stuid' ORDER BY date_paid DESC";			
											$query = $conn->query($sql);
											while ($row = $query->fetch_assoc()) {
                        $receipt = (!empty($row['receipt'])) ? 'img/'.$row['receipt'] : 'img/receipt.png';
												if ($row['status']) {
													$status = '<span class="label label-success">Paid</span>';
												  } else {
													$status = '<span class="label label-danger">Unpaid</span>';
												  }
												$date = (isset($_GET['action'])) ? 'date_paid' : 'date_unpaid';
												$date_paid = $row['date_paid'];
                        $date_from = $row['date_from'];
                        $date_to = $row['date_to'];
                        echo "
			        						<tr>
			        						<td class='hidden'></td>
                          <td>" . date('M d, Y', strtotime($row['date_paid'])) . "</td>
                          <td>" . date('M d, Y', strtotime($row['date_from'])) . ' - ' . date('M d, Y', strtotime($row['date_to'])) . "</td>
												  <td>" . $status . "</td>
                          <td>
                          <a href='".$receipt."' data-lightbox='img' 
                          data-title='Date Paid: ".date('M d, Y', strtotime($date_paid))."<br>".date('M d, Y', strtotime($date_from))." - ".date('M d, Y', strtotime($date_to))."'>
                          <img src='".$receipt."' width='60px' height='60px'></a>
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
</div>
  
	<?php include 'includes/scripts.php'; ?>
	
</body>

</html>
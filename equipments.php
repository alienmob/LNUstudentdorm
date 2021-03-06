<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['category'])){
		$catid = $_GET['category'];
		$where = 'WHERE category_id = '.$catid;
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
        Equipment Record List
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
		<h3 class="box-title">Equipment List</h3>
		</div>
			<div class="box-header with-border">
			<a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> Borrow</a>
				<div class="input-group col-sm-3 pull-right">
					<span class="input-group-addon">Category:</span>
					<select class="form-control" id="catlist">
						<option value=0>ALL</option>
						<?php
							$sql = "SELECT * FROM category";
							$query = $conn->query($sql);
							while($catrow = $query->fetch_assoc()){
								$selected = ($catid == $catrow['id']) ? " selected" : "";
								echo "
									<option value='".$catrow['id']."' ".$selected.">".$catrow['name']."</option>
								";
							}
						?>
					</select>
					</div>
			</div>
			<div class="box-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped" id="example">
					<thead>
						<th>Equipment Name</th>
						<th>Equipment Code</th>
						<th>Equipment Category</th>
						
						<th>Status</th>
					</thead>
					<tbody>
					<?php
						$sql = "SELECT * FROM equipments LEFT JOIN category ON category.id=equipments.category_id $where";
						$query = $conn->query($sql);
						while($row = $query->fetch_assoc()){
							if ($row['status']) {
								$status = '<span class="label label-warning">returned</span>';
								} else {
								$status = '<span class="label label-success">Available</span>';
								}
								if ($row['quantity'] == 0) {
								$status = '<span class="label label-danger">Unavailable</span>';
								}
								if ($row['quantity'] == 1) {
								$status = '<span class="label label-warning">1 item left</span>';
								}
							echo "
								<tr>
								<td>".$row['title']."</td>
								<td>".$row['code']."</td>
								<td>".$row['name']."</td>
								
								<td>".$status."</td>
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
  
  	
	<?php include 'includes/borrow_modal.php'; ?>

<?php include 'includes/scripts.php'; ?>

<script>
$(function(){
	$('#catlist').on('change', function(){
		if($(this).val() == 0){
			window.location = 'equipments.php';
		}
		else{
			window.location = 'equipments.php?category='+$(this).val();
		}
		
	});
});
</script>

</body>
</html>
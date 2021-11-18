<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Time Out Record</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Time Out Record List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Student Logs</li>
        <li class="active">Time Out</li>
      </ol>
    </section>
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
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> New</a>
            </div> -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
              <thead>

<th>Student ID</th>
<th>Name</th>
<th>Date</th>					
<th>Time Out</th>

</thead>
<tbody>
<?php
$sql = "SELECT *, log_book.id AS studid FROM log_book LEFT JOIN students ON students.rfid = log_book.rfid_id ORDER BY id DESC";
$query = $conn->query($sql);
while ($row = $query->fetch_assoc()) {

echo "
<tr>

<td>".$row['student_id']."</td>
<td>".$row['firstname']. ' ' .$row['lastname']."</td>
<td>" . date('M d, Y', strtotime($row['date'])) . "</td>
<td>" . $row['time_out'] . "</td>

</tr>
";
}
?>
</tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include '../includes/footer.php'; ?>
 
</div>
<?php include '../includes/scripts.php'; ?>

</body>
</html>

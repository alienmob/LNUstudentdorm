<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Log Book Record</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event Attendance Record
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Announcements</li>
        <li class="active">Attendance Record</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          // echo "
          //   <div class='alert alert-danger alert-dismissible'>
          //     <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          //     <h4><i class='icon fa fa-warning'></i> Error!</h4>
          //     ".$_SESSION['error']."
          //   </div>
          // ";
          echo "<script type='text/javascript'>toastr.error('Error!&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['error']."')</script>";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          // echo "
          //   <div class='alert alert-success alert-dismissible'>
          //     <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          //     <h4><i class='icon fa fa-check'></i> Success!</h4>
          //     ".$_SESSION['success']."
          //   </div>
          // ";
          echo "<script type='text/javascript'>toastr.success('Success!&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['success']."')</script>";
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
                    <th>Event</th>
                    <th>Name</th>
                    <th>Date</th>					
                    <th>Time In</th>
                    <th>Time Out</th>

                </thead>
                <tbody>
	<?php
$sql = "SELECT * FROM event_attendance LEFT JOIN students ON students.rfid = event_attendance.rfid_id 
LEFT JOIN event ON event.id = event_attendance.event_id
LEFT JOIN event_category ON event_category.id = event.event_category_id ORDER BY event_attendance.id DESC";

$query = $conn->query($sql);
while ($row = $query->fetch_assoc()) {
 
 echo "
      <tr>

       <td>".$row['student_id']."</td>
       <td>".$row['event_name']. ' | ' .date('M d, Y', strtotime($row['date']))."</td>
       <td>".$row['firstname']. ' ' .$row['lastname']."</td>
       <td>" . date('M d, Y', strtotime($row['event_date'])) . "</td>
       <td>" . $row['time_in'] . "</td>
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

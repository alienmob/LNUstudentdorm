<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Student Status</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Status Record List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Student Logs</li>
        <li class="active">Status</li>
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
                  <th>Room</th>
                  <th>Account Status</th>
                  <th>Dormitory Status</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, students.student_id AS studid FROM students LEFT JOIN course ON course.id=students.course_id 
                    LEFT JOIN floor_category ON floor_category.id=students.floor_id LEFT JOIN room_category ON room_category.id=students.room_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      
                        if ($row['status']) {
                            $status = '<span class="label label-danger">OUT</span>';
                          } else {
                            $status = '<span class="label label-success">IN</span>';
                          }

                          if ($row['verified_at'] == NULL) {
                            $verify = '<span class="label label-danger">Unverified</span>';
                          } else {
                            $verify = '<span class="label label-success">Verified</span>';
                          }
                      echo "
                        <tr>
                        <td>".$row['student_id']."</td>
                        <td>".$row['firstname']. ' ' .$row['lastname']."</td>
                        <td>".$row['floor_name'].'-'.$row['room_name']."</td>
                        <td>".$verify."</td>
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
        </div>
      </div>
    </section>   
  </div>
    
  <?php include '../includes/footer.php'; ?>
  <?php include '../components/student_modal.php'; ?>
</div>
<?php include '../includes/scripts.php'; ?>

</body>
</html>

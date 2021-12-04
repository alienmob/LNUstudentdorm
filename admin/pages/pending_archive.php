<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Equipment Requests</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Equipment Request Archive List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Transaction</li>
          <li class="active">Request Archives</li>
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
                <a href="#pend_del" data-toggle="modal" class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-trash"></i> Clear All Approved Status</a>
                <a href="#dec_del" data-toggle="modal" class="btn btn-primary btn-sm btn-rounded pull-right"><i class="fa fa-eraser"></i> Clear All Declined Status</a>
              </div> -->

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    
                    <th>Date</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Equipment Code</th>
                    <th>Equipment Name</th>
                    <th>Note</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *,pending.student_id AS stu, pending.id AS stud, pending.status AS barstat FROM pending LEFT JOIN students ON students.student_id=pending.student_id LEFT JOIN equipments ON equipments.id=pending.equipment_id WHERE pending.status >= 1 ORDER BY date_pending DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      if ($row['barstat']) {
                        $status = '<span class="label label-success">Approved</span>';
                      } 
                      if ($row['barstat'] == 2) {
                        $status = '<span class="label label-danger">Declined</span>';
                        }

                      echo "
                        <tr>
                          
                          <td>" . date('M d, Y', strtotime($row['date_pending'])) . "</td>
                          <td>" . $row['stu'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td> 
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['title'] . "</td>
                          <td>" . $row['note'] . "</td>
                          <td>" . $status . "</td>
            
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
    <?php include '../components/pending_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>

</body>

</html>
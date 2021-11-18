<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Promissory Status
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Payment Records</li>
          <li class="active">Promissory Status</li>
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
            <div class="box-header with-border">
              <a href="#prom_del" data-toggle="modal" class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-trash"></i> Clear Paid Status</a>
            </div>

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <th class="hidden"></th>
                    <th>Date</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Valid From</th>
                    <th>Valid To</th>
                    <th>Promissory Note</th>
                    <th>Deadline of Payment</th>
                    <th>Status</th>

                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *, promissory.student_id AS stud, promissory.status AS pstat FROM promissory LEFT JOIN students ON students.student_id=promissory.student_id ORDER BY date_from, date_to DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      if ($row['pstat']) {
                        $status = '<span class="label label-success">Paid</span>';
                      } else {
                        $status = '<span class="label label-danger">Unpaid</span>';
                      }
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>" . date('M d, Y', strtotime($row['date_promissory'])) . "</td>
                          <td>" . $row['stud'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>
                          <td>" . date('M d, Y', strtotime($row['date_from'])) . "</td>
                          <td>" . date('M d, Y', strtotime($row['date_to'])) . "</td>
                          <td>" . $row['pnote'] ."</td>
                          <td>" . date('M d, Y', strtotime($row['deadline'])) . "</td>
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
    <?php include '../components/promissory_modal.php'; ?>

  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>
    $(function() {
      $(document).on('click', '#append', function(e) {
        e.preventDefault();
        $('#append-div').append(
          '<div class="form-group"><label for="" class="col-sm-3 control-label">Equipment Code</label><div class="col-sm-9"><input type="text" class="form-control" name="code[]"></div></div>'
        );
      });
    });

  </script>
</body>

</html>
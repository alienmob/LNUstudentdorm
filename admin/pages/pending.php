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
          Equipment Request Record List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Transactions</li>
          <li class="active">Equipment Requests</li>
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
                    <th>Status</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *,pending.student_id AS stu, pending.id AS stud, pending.status AS barstat FROM pending LEFT JOIN students ON students.student_id=pending.student_id LEFT JOIN equipments ON equipments.id=pending.equipment_id WHERE pending.status = 0 ORDER BY date_pending DESC";
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
                    if($row['barstat'] == 0){
                      $pend = '<button data-toggle="modal"  class="approve btn btn-success btn-sm btn-rounded" data-id="' . $row['stud'] . '"><i class="fa fa-check"></i></button>
                      <button data-toggle="modal"  class="decline btn btn-danger btn-sm btn-rounded" data-id="' . $row['stud'] . '"><i class="fa fa-times"></i></button>';
                    }else{
                      $pend = '';
                    }
                      echo "
                        <tr>
                          
                          <td>" . date('M d, Y', strtotime($row['date_pending'])) . "</td>
                          <td>" . $row['stu'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td> 
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['title'] . "</td>
                          <td>" . $status . "</td>
                          <td>
                          " . $pend . "
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
          </div>
        </div>
      </section>
    </div>

    <?php include '../includes/footer.php'; ?>
    <?php include '../components/pending_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>


    $(function(){
  $(document).on('click', '.approve', function(e){
    e.preventDefault();
    $('#approve').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.decline', function(e){
    e.preventDefault();
    $('#decline').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: '../php/pending/pending_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.stud').val(response.pid);
      $('.student').val(response.student_id);
      $('#student').val(response.student_id).html(response.student_id);
      $('#edit_student').val(response.student_id).html(response.student_id);
      $('#edit_name').val(response.firstname+' '+response.lastname).html(response.firstname+' '+response.lastname);
      $('#selcode2').val(response.code).html(response.title);
      $('#note').val(response.note).html(response.note);
      $('#dnote').val(response.note).html(response.note);

      $('#decline_student').val(response.student_id).html(response.student_id);
      $('#decline_name').val(response.firstname+' '+response.lastname).html(response.firstname+' '+response.lastname);
      $('#decode2').val(response.code).html(response.title);
    
    }
  });
}


  </script>
</body>

</html>
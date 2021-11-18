<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Borrowed Equipments</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Borrowed Equipment Record List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Transaction</li>
          <li class="active">Borrowed</li>
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
                <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> Borrow</a>
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
                    $sql = "SELECT *,borrow.student_id AS stu, borrow.id AS stud, borrow.status AS barstat FROM borrow LEFT JOIN students ON students.student_id=borrow.student_id LEFT JOIN equipments ON equipments.id=borrow.equipment_id  ORDER BY date_borrow DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      if ($row['barstat']) {
                        $status = '<span class="label label-success">Returned</span>';
                      } else {
                        $status = '<span class="label label-danger">Not Returned</span>';
                      }
                      echo "
                        <tr>
                          
                          <td>" . date('M d, Y', strtotime($row['date_borrow'])) . "</td>
                          <td>" . $row['stu'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td> 
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['title'] . "</td>
                          <td>" . $status . "</td>
                          <td>
                          <button data-toggle='modal'  class='return btn btn-primary btn-sm btn-rounded' data-id='" . $row['stud'] . "'><i class='fa fa-mail-reply'></i></button>
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
    <?php include '../components/borrow_modal.php'; ?>
    <?php include '../components/return_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>


    $(function(){
  $(document).on('click', '.return', function(e){
    e.preventDefault();
    $('#return').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: '../php/return_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.stud').val(response.stud);
      $('.student').val(response.student_id);
      $('#edit_student').val(response.student_id).html(response.student_id);
      $('#edit_name').val(response.firstname+' '+response.lastname).html(response.firstname+' '+response.lastname);
      $('#selcode2').val(response.code).html(response.title);
    
    }
  });
}
  </script>
</body>

</html>
<?php include '../includes/session.php'; ?>

<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Rooms</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Student Complaint Record List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Students</li>
          <li class="active">Complaints</li>
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
              <div class="box-header with-border">
                <!-- <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> New</a> -->     
              </div>

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    
                    <th>Date</th>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Course</th>
                    <th>Complaint</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php
                     $sql = "SELECT *, complaints.id AS id FROM complaints LEFT JOIN students ON students.student_id=complaints.student_id 
                     LEFT JOIN floor_category ON floor_category.id=students.floor_id 
                     LEFT JOIN room_category ON room_category.id=students.room_id 
                     LEFT JOIN course ON course.id=students.course_id ORDER BY complaints.id DESC";

                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                     
                      echo "
                        <tr>
                        <td>" . date('M d, Y | h:ia', strtotime($row['date'])) . "</td>
                          <td>" . $row['student_id'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>
                          <td>" . $row['floor_name'] .'&nbsp;-&nbsp;'. $row['room_name'] . "</td>
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['complaint'] . "</td>
                          
                          <td>
                            <button class='btn btn-info btn-sm view btn-rounded' data-id='" . $row['id'] . "'><i class='fa fa-eye'></i></button>
                            <button class='btn btn-danger btn-sm delete btn-rounded' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i></button>
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
    <?php include '../components/complaint_modal.php'; ?>


  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>
    $(function() {


      $(document).on('click', '.view', function(e) {
        e.preventDefault();
        $('#view').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

      $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).data('id');

        getRow(id);
      });


    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/complaint/complaint_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('.studid').val(response.studid);
          $('#students').val(response.student_id).html(response.student_id);
          $('#name').val(response.firstname+' '+response.lastname).html(response.firstname+' '+response.lastname);
          $('#selfloor').val(response.floor_category_id).html(response.floor_name);
          $('#selroom').val(response.room_category_id).html(response.room_name);
          $('#course').val(response.title);
          $('#view_complaint').val(response.complaint);
          $('#view_date').val(response.date).html(response.date);
          $('.del_name').html(response.firstname+' '+response.lastname);
          $('.del_vio').html(response.violation);
        }
      });
    }
  </script>
</body>

</html>
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
          Student Violation Record List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Students</li>
          <li class="active">Violations</li>
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
                <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> New</a>
                

               
              
              
              </div>

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Course</th>
                    <th>Violation</th>
                    <th>Punishment</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php
                     $sql = "SELECT *, violations.id AS id FROM violations LEFT JOIN students ON students.student_id=violations.student_id 
                     LEFT JOIN floor_category ON floor_category.id=students.floor_id 
                     LEFT JOIN room_category ON room_category.id=students.room_id 
                     LEFT JOIN course ON course.id=students.course_id ORDER BY violations.date DESC";

                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                     
                      echo "
                        <tr>
                          
                          <td>" . $row['student_id'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>
                          <td>" . $row['floor_name'] .'&nbsp;-&nbsp;'. $row['room_name'] . "</td>
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['violation'] . "</td>
                          <td>" . $row['punishment'] . "</td>
                          <td>" . date('M d, Y', strtotime($row['date'])) . "</td>
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

               <div class="" style="display: flex; flex-direction: column;">

              <label class="control-label">Filter :</label>
              <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
                  <label for="date_from" class="control-label">Date From</label>
                  <input type="date" class="form-control" id="date_from" name="date_from" required>
                </div>
  
                <div class="col-xs-5 col-sm-5 col-md-2 col-lg-2">
                  <label for="date_to" class="control-label">Date To</label>
                  <input type="date" class="form-control" id="date_to" name="date_to" required>
                </div>
              </div>
              </div>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php include '../includes/footer.php'; ?>
    <?php include '../components/violation_modal.php'; ?>


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
        url: '../php/violation/violation_row.php',
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
          $('#view_violation').val(response.violation);
          $('#view_punishment').val(response.punishment);
          $('#view_date').val(response.date);
          $('.del_name').html(response.firstname+' '+response.lastname);
          $('.del_vio').html(response.violation);
          $('.del_pun').html(response.punishment);
        }
      });
    }

    $(document).ready(function() {
        // Create date inputs
        var minDate, maxDate;
        
        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
             
             
              var min = $('#date_from').val() ? moment($('#date_from').val()) : null
              var max = $('#date_to').val() ? moment($('#date_to').val()) : null
              var date = moment(new Date(data[6]));

                if (
                  ( min === null && max === null ) ||
                  ( min === null && date <= max ) ||
                  ( min <= date   && max === null ) ||
                  ( min <= date   && date <= max )
                ) {
                  
                  return true;
                }
            
                return false;
            }
        );
    
        // DataTables initialisation
        var table = $('#example').DataTable();
    
        // Refilter the table
        $('#date_from, #date_to').on('change', function () {
         
          table.draw();
        });
    });
  </script>
</body>

</html>
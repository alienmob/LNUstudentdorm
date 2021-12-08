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
                    <th>Status</th>
                    <th>View Note</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *,pending.id AS stud, pending.status AS barstat FROM pending LEFT JOIN students ON students.student_id=pending.student_id LEFT JOIN equipments ON equipments.id=pending.equipment_id WHERE pending.status >= 1 ORDER BY date_pending DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      if ($row['barstat']) {
                        $status = '<span class="label label-success">Approved</span>';
                      } 
                      if ($row['barstat'] == 2) {
                        $status = '<span class="label label-danger">Declined</span>';
                      }

                      if ($row['feedback'] != NULL) {
                        $response = '<button class="btn btn-info btn-sm p_approve btn-rounded" data-id="' . $row['stud'] . '"><i class="fa fa-eye"></i></button>';
                        } else {
                        $response = '<button class="btn btn-info btn-sm p_decline btn-rounded" data-id="' . $row['stud'] . '"><i class="fa fa-eye"></i></button>';
                        }

                      echo "
                        <tr>
                          
                          <td>" . date('M d, Y', strtotime($row['date_pending'])) . "</td>
                          <td>" . $row['student_id'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td> 
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['title'] . "</td>
                          <td>" . $status . "</td>
                          <td>
                          <center>
                          " . $response . "
                          </center>
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
    <?php include '../components/pending_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>

  <script>
    $(function() {

      $(document).on('click', '.p_approve', function(e) {
        e.preventDefault();
        $('#p_approve').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

	  $(document).on('click', '.p_decline', function(e) {
        e.preventDefault();
        $('#p_decline').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/pending/pending_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('.studid').val(response.id);
          $('#approve_request').val(response.note).html(response.note);
          $('#decline_request').val(response.note).html(response.note);
		      $('#view_approve').val(response.feedback).html(response.feedback);
		      $('#view_decline').val(response.decline).html(response.decline);
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
              var date = moment(new Date(data[0]));

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
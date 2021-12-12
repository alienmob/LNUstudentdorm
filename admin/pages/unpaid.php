<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Unpaid Status</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Unpaid Student Record List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Transactions</li>
          <li class="active">Student Payments</li>
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
                <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> New Record</a>

                <a href="#today" data-toggle="modal" class="btn btn-info btn-sm btn-rounded pull-right" style="margin:5px; margin-right:20px;"><i class="fa fa-bell"></i></a>
                
                <a href="#late" data-toggle="modal" class="btn btn-warning btn-sm btn-rounded pull-right" style="margin:5px;"><i class="fa fa-bell"></i></a>

                
              </div> -->

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <th class="hidden"></th>
                    <th>Date</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Privilege</th>
                    <th>Valid From</th>
                    <th>Valid To</th>
                    <th>Status</th>
                    <th>Deadline</th>
                    <th>Receipt</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *, unpaid.id AS ID, unpaid.status AS pstat FROM unpaid LEFT JOIN students ON students.student_id=unpaid.student_id ORDER BY deadline DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      $receipt = (!empty($row['receipt'])) ? '../../img/'.$row['receipt'] : '../../img/receipt.png';
                      if ($row['pstat']) {
                        $status = '<span class="label label-success">Paid</span>';
                      } else {
                        $status = '<span class="label label-danger">Unpaid</span>';
                      }
                      if ($row['receipt'] != NULL) {
                        $status = '<span class="label label-success">Pending</span>';
                      }
                      date_default_timezone_set('Asia/Manila');
	                    $date = date('Y-m-d');
                      if ($row['deadline'] < $date) {
                        $status = '<span class="label label-warning">Unpaid LATE</span>';
                      }
                      if ($row['deadline'] < $date AND $row['receipt'] != NULL) {
                        $status = '<span class="label label-success">Pending LATE</span>';
                      }
                      if ($row['deadline'] == $date) {
                        $status = '<span class="label label-info">DEADLINE TODAY</span>';
                      }
                      
                      $stud_id = $row['student_id'];
                      $fname = $row['firstname'];
                      $lname = $row['lastname'];

                      $date_from = $row['date_from'];
                      $date_to = $row['date_to'];
                      
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>" . date('M d, Y', strtotime($row['date_unpaid'])) . "</td>
                          <td>" . $row['student_id'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>
                          <td>" . $row['privilege'] . "</td>
                          <td>" . date('M d, Y', strtotime($row['date_from'])). "</td>
                          <td>" . date('M d, Y', strtotime($row['date_to'])) . "</td>
                          <td>" . $status . "</td>
                          <td>" . date('M d, Y', strtotime($row['deadline'])) . "</td>
                          <td>
                          <a href='".$receipt."' data-lightbox='img' 
                          data-title='Student Number: ".$stud_id."<br>Name: ".$lname." ".$fname."<br>".date('M d, Y', strtotime($date_from))." - ".date('M d, Y', strtotime($date_to))."'>
                          <img src='".$receipt."' width='60px' height='60px'></a>
                         </td>
                          <td>
                          <center>
                          <button data-toggle='modal'  class='pay btn btn-success btn-sm btn-rounded' data-id='" . $row['ID'] . "'><i class='fa fa-check'></i></button>
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
    <?php include '../components/pay_modal.php'; ?>
    
    <?php include '../components/unpaid_modal.php'; ?>
    
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>

    $(document).on('click', '.pay', function(e) {
      e.preventDefault();
      var id = $(this).data();
      getRow(id.id);
      $('#pay').modal('show');
    });

    $(document).on('click', '.promissory', function(e) {
      e.preventDefault();
      var id = $(this).data();
      getRow(id.id);
      $('#promissory').modal('show');

    });


    $(document).on('click', '.receipt', function(e){
      e.preventDefault();
      var id = $(this).data('id');
      getRow(id);
    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/paid/pay_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response) {
          console.log(response);
          $('.ID').val(response.id);
          $('#stud').val(response.id);
          $('.student').val(response.student_id);
          $('.vfrom').val(response.date_from);
          $('.vto').val(response.date_to);

          $('#students').val(response.student_id).html(response.student_id);
          $('#validfrom').val(response.date_from).html(response.date_from);
          $('#validto').val(response.date_to).html(response.date_to);
          $('#name').val(response.firstname+' '+response.lastname).html(response.firstname+' '+response.lastname);
          $('#pname').val(response.firstname+' '+response.lastname);
          $('#upload2').val(response.receipt);
          $('#upload').attr("src", response.receipt ? '../../img/' + response.receipt : '../../img/receipt.png');
          $('#display_img').attr("src", response.receipt ? '../../img/' + response.receipt : '../../img/receipt.png');
          $('.name_id').html(response.firstname+' '+response.lastname);
          $('.id_id').html(response.student_id);
          $('.res').html(response.date_from+'&nbsp; - &nbsp; '+response.date_to);
          $('#from').html(response.date_from);
          $('#to').html(response.date_to);
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
              var date_from = moment(new Date(data[5]));
              var date_to = moment(new Date(data[6]));
       
                if (
                    ( min === null && max === null ) ||
                    ( min <= date_from && max === null ) ||
                    ( min === null && date_to <= max ) ||
                    ( min === null && max <= date_to ) ||
                    ( min <= date_from  && date_to <= max )
                ) {
                  console.log(`Min Date: ${min} - Date From: ${date_from}`)
                  console.log(min >= date_from  && max <= date_to)
                  return true;
                }
                console.log(min >= date_from)
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
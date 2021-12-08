<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dorm Manager Activity Logs
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> MIS</a></li>
        <li>Admin Management</li>
        <li class="active">Activity Logs</li>
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
           
          <div class="box-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  
                  <th>Time</th>
                  <th>Date</th>
                  <th>Admin Name</th>
                  <th>Activity Logs</th>
                 

                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM activity_logs LEFT JOIN `admin` ON admin.id=activity_logs.admin_id ";
                    
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                        <td>" . date('h:ia', strtotime($row['date_time'])) . "</td>
                        <td>" . date('M d, Y', strtotime($row['date_time'])) . "</td>
                        <td>".$row['firstname'].' '.$row['lastname']."</td>
                        <td>".$row['details']."</td>                
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
    
  <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

<script>
  
    $(document).ready(function() {
        // Create date inputs
        var minDate, maxDate;
        
        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
             
             
              var min = $('#date_from').val() ? moment($('#date_from').val()) : null
              var max = $('#date_to').val() ? moment($('#date_to').val()) : null
              var date = moment(new Date(data[1]));

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

<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Student Payment Status</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Payment Status Record List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Student Status</li>
        <li class="active">Payment Status</li>
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
                  <th><center>Total Unpaid Payments</center></th>
                  <th>View</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM students 
                    LEFT JOIN course ON course.id=students.course_id 
                    LEFT JOIN floor_category ON floor_category.id=students.floor_id 
                    LEFT JOIN room_category ON room_category.id=students.room_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      
                 echo "
                    <tr>
                        <td>".$row['student_id']."</td>
                        <td>".$row['firstname']. ' ' .$row['lastname']."</td>
                        <td>".$row['floor_name'].' - '.$row['room_name']."</td>
                        <td><center>".$row['unpaid_total']."</center></td>
                        <td>
                            <button class='btn btn-info btn-sm view btn-rounded' data-id='" . $row['student_id'] . "'><i class='fa fa-eye'></i></button>
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
  <?php include '../components/payment_modal.php'; ?>
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


    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/paid/payment_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          console.log(response)
          const studid = response[0] ? response[0].student_id : ''
          const fname = response[0] ? response[0].firstname : ''
          const lname = response[0] ? response[0].lastname : ''

          $('.name_id').html(studid + ' - ' + fname + ' ' + lname);

          const parentEl = document.getElementById('unpaidrecord')

          //REMOVE CHILD ELEMENTS FIRST 
          //BEFORE APPENDING
          while (parentEl.firstChild) {
            parentEl.removeChild(parentEl.firstChild);
          }

          for(let i = 0; i < response.length; i++){
            const span = document.createElement('span');
            response[i].date_from ? span.innerHTML = moment(response[i].date_from).format('MMM Do, YYYY') + ' - ' + moment(response[i].date_to).format('MMM Do, YYYY') : span.innerHTML = 'No records found';
            parentEl.appendChild(span);
          }

        }
      });
    }
  </script>
</body>
</html>

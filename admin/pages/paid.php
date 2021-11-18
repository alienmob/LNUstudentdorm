<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Paid Status</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Paid Student Record List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Payment Records</li>
          <li class="active">Paid Status</li>
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
                <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> Record Payment</a>
              </div> -->
              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <th class="hidden">ID</th>
                    <th>Date</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Privilege</th>
                    <th>Valid Through</th>
                    
                    <th>Status</th>
                    <th>Receipt</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *, paid.id AS ID, paid.status AS pstat FROM paid LEFT JOIN students ON students.student_id=paid.student_id ORDER BY paid.date_paid DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                       $receipt = (!empty($row['receipt'])) ? '../../img/'.$row['receipt'] : '../../img/receipt.png';
                      if ($row['pstat']) {
                        $status = '<span class="label label-success">Paid</span>';
                      } else {
                        $status = '<span class="label label-danger">Unpaid</span>';
                      }

                      $stud_id = $row['student_id'];
                      $fname = $row['firstname'];
                      $lname = $row['lastname'];

                      $date_from = $row['date_from'];
                      $date_to = $row['date_to'];
                      echo "
                        <tr>
                          <td class='hidden'>" . $row['ID'] . "</td>
                          <td>" . date('M d, Y', strtotime($row['date_paid'])) . "</td>
                          <td>" . $row['student_id'] . "</td>
                          <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>
                          <td>" . $row['privilege'] . "</td>
                          <td>" . date('M d, Y', strtotime($row['date_from'])) . ' - ' . date('M d, Y', strtotime($row['date_to'])) . "</td>
                         
                          <td>" . $status . "</td>
                          <td>
                          <a href='".$receipt."' data-lightbox='img' 
                          data-title='Student Number: ".$stud_id."<br>Name: ".$lname." ".$fname."<br>".date('M d, Y', strtotime($date_from))." - ".date('M d, Y', strtotime($date_to))."'>
                          <img src='".$receipt."' width='60px' height='60px'></a>
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
    <?php include '../components/paid_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>

        $(document).on('click', '.view', function(e) {
      e.preventDefault();
      var id = $(this).data();
      getRow(id.id);
      $('#view').modal('show');
    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/paid/paid_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response) {
          console.log(response);
          $('.ID').val(response.id);
          $('#stud_id').val(response.student_id).html(response.student_id);
          $('#validfrom').val(response.date_from).html(response.date_from);
          $('#validto').val(response.date_to).html(response.date_to);
          $('#name').val(response.firstname+' '+response.lastname).html(response.firstname+' '+response.lastname);
          $('#pname').val(response.firstname+' '+response.lastname);
          $('#upload2').val(response.receipt);
          $('#upload').attr("src", response.receipt ? '../../img/' + response.receipt : '../../img/receipt.png');
          $('#display_img').attr("src", response.receipt ? '../../img/' + response.receipt : '../../img/receipt.png');
          $('.name_id').html(response.firstname+' '+response.lastname+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student ID:'+response.student_id);
          $('.res').html(response.date_from+'&nbsp; - &nbsp; '+response.date_to);
        }
      });
    }
  </script>
</body>

</html>
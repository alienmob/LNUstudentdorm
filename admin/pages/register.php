<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Student Registration</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Student Registration List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Transaction</li>
          <li class="active">Student Registration</li>
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
                    
                    <th>Date</th>
                    <th>Photo</th>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Contact#</th>
                    <th>Email</th>
                    <th>Privilege</th>       
                    <th>Address</th>
                    <th>Guardian</th>
                    <th>Guardian's Contact#</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM register LEFT JOIN course ON course.id=register.course_id ORDER BY register.curr_date DESC";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      $photo = (!empty($row['photo'])) ? '../../images/'.$row['photo'] : '../../images/profile.jpg';
                      $stud_id = $row['student_id'];
                      $fname = $row['lname'];
                      $lname = $row['fname'];

                      if ($row['status'] == 0) {
                        $status = '<span class="label label-warning">Pending</span>';
                      } else {
                        $status = '<span class="label label-success">Approved</span>';
                      }
                      echo "
                        <tr>
                          
                          <td>" . date('M d, Y', strtotime($row['curr_date'])) . "</td>
                          <td>
                          <a href='".$photo."' data-lightbox='img' 
                          data-title='Student Number: ".$stud_id."<br>Name: ".$lname." ".$fname."'>
                          <img src='".$photo."' width='60px' height='60px'></a>
                          </td>
                          <td>".$row['student_id']."</td>
                          <td>".$row['lname'].','.$row['fname'].' '.$row['mname']."</td>
                          <td>" . $row['bdate'] . "</td>
                          <td>" . $row['gender'] ."</td> 
                          <td>" . $row['course_id'] . "</td>
                          <td>" . $row['contact'] . "</td>
                          <td>" . $row['email'] . "</td>
                          <td>" . $row['privilege'] . "</td>
                          <td>" . $row['address'] . "</td>
                          <td>" . $row['guardian'] . "</td>
                          <td>" . $row['gcontact'] . "</td>
                          <td>" . $status . "</td>

                          <td>
                          <button class='btn btn-info btn-sm view btn-rounded' data-id='" . $row['id'] . "'><i class='fa fa-eye'></i></button>
                          <button class='btn btn-success btn-sm approve btn-rounded' data-id='" . $row['id'] . "'><i class='fa fa-check'></i></button>
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

  $(document).on('click', '.view', function(e){
    e.preventDefault();
    $('#view').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: '../php/student/register_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.reg_id').val(response.id);
      $('#student_id').val(response.student_id);
      $('#lname').val(response.lname);
      $('#fname').val(response.fname);
      $('#mname').val(response.mname);
      $('#bdate').val(response.bdate);
      $('#gender').val(response.gender);
      $('#course').val(response.course_id);
      $('#contact').val(response.contact);
      $('#email').val(response.email);
      $('#privilege').val(response.privilege);
      $('#address').val(response.address);
      $('#guardian').val(response.guardian);
      $('#gcontact').val(response.gcontact);
      $('#display_photo').attr("src", response.photo ? '../../images/' + response.photo : '../../images/profile.jpg');
    }
  });
}


  </script>
</body>

</html>
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
          <li>Transactions</li>
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
                    $sql = "SELECT *, register.id AS reg_id FROM register LEFT JOIN course ON course.id=register.course_id ORDER BY register.curr_date DESC";
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

                      if ($row['gender'] == "Male") {
                        $app = '<button class="btn btn-success btn-sm male btn-rounded" data-id="' . $row['reg_id'] . '"><i class="fa fa-check"></i></button>';
                      } else {
                        $app = '<button class="btn btn-success btn-sm female btn-rounded" data-id="' . $row['reg_id'] . '"><i class="fa fa-check"></i></button>';
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
                          <td>" . date('M d, Y', strtotime($row['bdate'])) . "</td>
                          <td>" . $row['gender'] ."</td> 
                          <td>" . $row['code'] . "</td>
                          <td>" . $row['contact'] . "</td>
                          <td>" . $row['email'] . "</td>
                          <td>" . $row['privilege'] . "</td>
                          <td>" . $row['address'] . "</td>
                          <td>" . $row['guardian'] . "</td>
                          <td>" . $row['gcontact'] . "</td>
                          <td>" . $status . "</td>

                          <td>
                          <button class='btn btn-info btn-sm view btn-rounded' data-id='" . $row['reg_id'] . "'><i class='fa fa-eye'></i></button>
                          " . $app . "
                          </td>
                        </tr>
                      ";
                    }
                    ?>
                    <!-- <button class='btn btn-success btn-sm approve btn-rounded' data-gender='".$row['gender']."' data-id='" . $row['reg_id'] . "'><i class='fa fa-check'></i></button> -->
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
    <?php include '../components/register_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>


    $(function(){
  // $(document).on('click', '.approve', function(e){
  //   e.preventDefault();
  //   const gender = $(this).data('gender');

  //   if(gender == 'Male'){
  //     $('#approveMale').modal('show');
  //   }
  //   else {
  //     $('#approveFemale').modal('show');
  //   }

  //   var id = $(this).data('id');
  //   getRow(id);
  // });

  $(document).on('click', '.male', function(e){
    e.preventDefault();
    $('#male').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.female', function(e){
    e.preventDefault();
    $('#female').modal('show');
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
    url: '../php/register/register_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.reg_id').val(response.reg_id);

      $('.student_id').val(response.student_id);
      $('.lastname').val(response.lname);
      $('.firstname').val(response.fname);
      $('.middlename').val(response.mname);
      $('.bdate').val(response.bdate);
      $('.gender').val(response.gender);
      $('.course').val(response.course_id);
      $('.contact').val(response.contact);
      $('.email').val(response.email);
      $('.privilege').val(response.privilege);
      $('.address').val(response.address);
      $('.guardian').val(response.guardian);
      $('.guardian_contact').val(response.gcontact);
      $('.photo').val(response.photo);


      $('#view_student_id').val(response.student_id).html(response.student_id);
      $('#view_lastname').val(response.lname).html(response.lname);
      $('#view_firstname').val(response.fname).html(response.fname);
      $('#view_middlename').val(response.mname).html(response.mname);
      $('#view_bdate').val(response.bdate).html(response.bdate);
      $('#selgender').val(response.gender).html(response.gender);
      $('#selcourse').val(response.course_id).html(response.title);
      $('#view_contact').val(response.contact).html(response.contact);
      $('#view_email').val(response.email).html(response.email);
      $('#selprivilege').val(response.privilege).html(response.privilege);
      $('#view_address').val(response.address).html(response.address);
      $('#view_guardian').val(response.guardian).html(response.guardian);
      $('#view_guardian_contact').val(response.gcontact).html(response.gcontact);
      $('#display_photo').attr("src", response.photo ? '../../images/' + response.photo : '../../images/profile.jpg');
    }
  });
}


  </script>
</body>

</html>

<?php 
session_start();
include 'includes/conn.php'; 
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Registration | LNU Dormitory</title>
    <link rel="stylesheet" href="admin/assets/css/main.css" type="text/css">
  <!-- Icons -->
  <link rel="stylesheet" href="admin/assets/css/all.min.css" />
  <link rel="icon" href="admin/assets/img/logo.png" type="image/png">
  <link rel="stylesheet" href="admin/assets/css/logo.css" type="text/css">
  <script type="text/javascript" src="admin/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="admin/assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="admin/assets/js/all.min.js"></script>

  <link href="admin/assets/css/varela_font.css" rel="stylesheet">
  <link rel='stylesheet' href='admin/assets/css/nprogress.css'/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="admin/assets/css/toastr.css" rel="stylesheet"/>
  <script type="text/javascript" src="admin/assets/js/toastr.js"></script>

<style type="text/css">
  body {
		font-family: 'Roboto', sans-serif;
	}

  .center-lnu{
    position: absolute;
    top: 0;
    padding-top: 8%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>

</head>
<body class="bg-default hold-transition login-page">
<!-- Header -->
<div class="header bg-gradient-warning">
    <div class="container">
      <div class="header-body text-center pb-4">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5 mt-6 pb-5">
            <h1 class="text-white">Leyte Normal University</h1>
            <p class="text-lead text-white">Student Dormitory</p>
          </div>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>

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

  <!-- Main content -->
  <div class="main-content">

    <!-- Page content -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-4">
          
          <div class="card bg-secondary border-0 mb-0 pt-8">
            <img src="admin/assets/img/logo.png" class="center-lnu">

            <div class="card-body px-lg-5">

           
              <div class="text-center text-muted mb-4">
              <strong><big>Student Registration</big></strong>
              </div>

             
    	  <!-- form -->
          <form method="POST" action="register_add.php" enctype="multipart/form-data">
<!-- 1st row -->
              <div class="form-row">

              <!-- ID -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                </div>
                <input class="form-control" name="student_id" id="student_id" minlength="5" placeholder="Student ID" type="number" required>
              </div>
              <p class="col-form-label text-gray">Student ID</p>
              </div>
            </div>
        <!-- End ID -->

              <!-- stud name -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input class="form-control" name="lname" id="lname" placeholder="Last Name" type="text" required>
              </div>
              <p class="col-form-label text-gray">Last Name</p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend"> 
                <span class="input-group-text"><i class="fa fa-user"></i></span>    
                </div>
                <input class="form-control" name="fname" id="fname" placeholder="First Name" type="text" required>
              </div>
              <p class="col-form-label text-gray">First Name</p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input class="form-control" name="mname" id="mname" placeholder="Middle Name" type="text" required>
              </div>
              <p class="col-form-label text-gray">Middle Name</p>
              </div>
            </div>
            <!-- End Studname -->


            <!-- Bday -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input class="form-control" name="bdate" id="bdate" type="date" required>
              </div>
              <p class="col-form-label text-gray">Birth Date</p>
              </div>
            </div>
            <!-- end bday -->


            <!-- Gender -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <select class="custom-select" id="gender" name="gender" required>
                <option value="" selected>Select Gender</option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
              </select>
              </div>
              <p class="col-form-label text-gray">Gender</p>
              </div>
            </div>
            <!-- End Gender -->
  
             <!-- Course -->
             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                </div>
                <select class="custom-select" id="course" name="course" required>
                <option value="" selected>Select Course</option>
                <?php
                $sql = "SELECT * FROM course";
                $query = $conn->query($sql);
                while ($row = $query->fetch_array()) {
                  echo "
                              <option value='" . $row['id'] . "'>" . $row['code'] . "</option>
                            ";
                }
                ?>
              </select>
              </div>
              <p class="col-form-label text-gray">Course</p>
              </div>
            </div>
            <!-- End course -->

            <!-- Contact -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend"> 
                <span class="input-group-text"><i class="fa fa-phone"></i></span>    
                </div>
                <input class="form-control" name="contact" id="contact" maxlength="11" placeholder="09XXXXXXXXX" type="number" required>
              </div>
              <p class="col-form-label text-gray">Contact Number</p>
              </div>
            </div>
            <!-- End Contact -->

            <!-- Priv -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <select class="custom-select" id="privilege" name="privilege" required>
                <option value="" selected>Select Privilege</option>
                <option value="Non-Athlete"> Non-Athlete </option>
                <option value="Athlete"> Athlete </option>
              </select>
              </div>
              <p class="col-form-label text-gray">Privilege</p>
              </div>
            </div>
            <!-- End priv -->
            

          <!-- Photo -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-camera"></i></span>
      </div>
      <input class="form-control" name="photo" id="photo" type="file" required>
      </div>
      <p class="col-form-label text-gray">Student Photo</p>
      </div>
      </div>
      <!-- End Photo -->


        <!-- Address -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-home"></i></span>
                </div>
                <input class="form-control" name="address" id="address" placeholder="House Number, Street, Barangay, Municipality, Province" type="text" required>
              </div>
              <p class="col-form-label text-gray">Complete Address</p>
              </div>
            </div>
      <!-- End Address -->
              

      <!-- Email -->
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input class="form-control" name="email" id="email" placeholder="sample@email.com" type="email" required>
              </div>
              <p class="col-form-label text-gray">E-mail Address</p>
              </div>
            </div>
            <!-- End email -->

<!-- Guardian -->
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
        </div>
        <input class="form-control" name="guardian" id="guardian" placeholder="Guardian's Fullname" type="text" required>
      </div>
      <p class="col-form-label text-gray">Guardian's Fullname</p>
      </div>
    </div>
    <!-- End Guardian -->

    <!-- G contact -->
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend"> 
        <span class="input-group-text"><i class="fa fa-phone"></i></span>    
        </div>
        <input class="form-control" name="gcontact" id="gcontact" maxlength="11" placeholder="09XXXXXXXXX" type="number" required>
      </div>
      <p class="col-form-label text-gray">Guardian's Contact#</p>
      </div>
    </div>
    <!-- end G contact -->

   </div>

          <div class="form-group text-center">
					  <input type="submit" class="btn btn-warning btn-md rounded-3" name="register" value="Register">
            <!-- <input type="submit" class="submit-btn btn btn-warning btn-rounded" name="register" value="Register" />   -->
      		</div>

          <div class="text-center"><a href="index.php"><i class="fa fa-book"></i> Log Book</a></div>
              </form>
  	</div>
          </div>    
        </div>
        <br>
        <br>
<br>
      </div>
      <br>
      <br>
    </div>
</div>
	


<?php include 'includes/scripts.php' ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(function() {
        $(".submit-btn").click(function() {
            $(this).val('Please Wait...');
        });
    });
</script>

  <!-- jQuery CDN -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/all.min.js"></script>
</body>
</html>


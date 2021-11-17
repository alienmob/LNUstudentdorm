<?php include 'includes/conn.php'; ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Students | LNU Dormitory</title>
    <link rel="stylesheet" href="admin/assets/css/main.css" type="text/css">
  <!-- Icons -->
  <link rel="stylesheet" href="admin/assets/css/all.min.css" />
  <link rel="icon" href="admin/assets/img/logo.png" type="image/png">
  <link rel="stylesheet" href="admin/assets/css/logo.css" type="text/css">
<script type="text/javascript" src="admin/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="admin/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="admin/assets/js/all.min.js"></script>

<link href="admin/assets/css/varela_font.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<style type="text/css">
body {
		font-family: 'Loto', sans-serif;
	}

  .center-lnu{
    position: absolute;
    top: -10%;
    padding-top: 40%;
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
          <div class="col-xl-5 col-lg-6 col-md-8 px-5 mt-6">
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

  <!-- Main content -->
  <div class="main-content">

    <!-- Page content -->
    <div class="container">
      <div class="row">
          <div class="card bg-secondary border-0 mb-0">
           <div class="card-body px-lg-5">
              <div class="text-center text-muted pb-4 pt-3">
              <strong><big>Student Registration</big></strong>
              </div>
              <?php
  		 if(isset($_SESSION['error'])){
        echo "
          <div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <big><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;".$_SESSION['error']."</big>
          </div>
        ";
        unset($_SESSION['error']);
       }

       if(isset($_SESSION['email_error'])){
        echo "
          <div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <big><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;".$_SESSION['email_error']."</big>
          </div>
        ";
        unset($_SESSION['email_error']);
       }

       if(isset($_SESSION['reset_success'])){
        echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <big><i class='fas fa-check'></i>&nbsp;&nbsp;".$_SESSION['reset_success']."</big>
          </div>
        ";
        unset($_SESSION['reset_success']);
       }

       if(isset($_SESSION['success'])){
        echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <big><i class='fas fa-check'></i>&nbsp;&nbsp;".$_SESSION['success']."</big>
          </div>
        ";
        unset($_SESSION['success']);
       }
  	?>
    	  <!-- form -->
          <form role="form">
<!-- 1st row -->
              <div class="form-row">
              <!-- ID -->
          <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                </div>
                <input class="form-control" name="student_id" id="student_id" placeholder="Student ID" type="number" required>
              </div>
              <p class="col-form-label text-gray">(Student ID)</p>
              </div>
            </div>

              <!-- name -->
          <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input class="form-control" name="lname" id="lname" placeholder="Last Name" type="text" required>
              </div>
              <p class="col-form-label text-gray">(Last Name)</p>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend"> 
                <span class="input-group-text"><i class="fa fa-user"></i></span>    
                </div>
                <input class="form-control" name="fname" id="fname" placeholder="First Name" type="text" required>
              </div>
              <p class="col-form-label text-gray">(First Name)</p>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input class="form-control" name="mname" id="mname" placeholder="Middle Name" type="text" required>
              </div>
              <p class="col-form-label text-gray">(Middle Name)</p>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input class="form-control" name="bday" id="bday" type="date" required>
              </div>
              <p class="col-form-label text-gray">(Birth Date)</p>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <select class="custom-select" id="gender" name="gender" required>
                <option value="" selected>- Select Gender -</option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
              </select>
              </div>
              <p class="col-form-label text-gray">(Gender)</p>
              </div>
            </div>
                
              </div>


              <!-- 2nd row -->
              <div class="form-row">
      
              <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <select class="custom-select" id="course" name="course" required>
                <option value="" selected>- Select Course -</option>
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
              <p class="col-form-label text-gray">(Course)</p>
              </div>
            </div>

          <div class="col-sm-5 col-md-4 col-lg-3">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input class="form-control" name="email" id="email" placeholder="sample@email.com" type="email" required>
              </div>
              <p class="col-form-label text-gray">(E-mail Address)</p>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend"> 
                <span class="input-group-text"><i class="fa fa-phone"></i></span>    
                </div>
                <input class="form-control" name="contact" id="contact" placeholder="09XXXXXXXXX" type="number" required>
              </div>
              <p class="col-form-label text-gray">(Contact Number)</p>
              </div>
            </div>

            <div class="col-sm-7 col-md-6 col-lg-5">
          <div class="form-group text-center">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-home"></i></span>
                </div>
                <input class="form-control" name="address" id="address" placeholder="House Number, Street, Barangay, Municipality, Province" type="text" required>
              </div>
              <p class="col-form-label text-gray">(Complete Address)</p>
              </div>
            </div>
  
              </div>


               <!-- 3rd row -->
               <div class="form-row">
      
      <div class="col-sm-4 col-md-3 col-lg-2">
  <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
        </div>
        <select class="custom-select" id="course" name="course" required>
        <option value="" selected>- Select Course -</option>
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
      <p class="col-form-label text-gray">(Course)</p>
      </div>
    </div>

  <div class="col-sm-5 col-md-4 col-lg-3">
  <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        </div>
        <input class="form-control" name="email" id="email" placeholder="sample@email.com" type="email" required>
      </div>
      <p class="col-form-label text-gray">(E-mail Address)</p>
      </div>
    </div>

    <div class="col-sm-4 col-md-3 col-lg-2">
  <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend"> 
        <span class="input-group-text"><i class="fa fa-phone"></i></span>    
        </div>
        <input class="form-control" name="contact" id="contact" placeholder="09XXXXXXXXX" type="number" required>
      </div>
      <p class="col-form-label text-gray">(Contact Number)</p>
      </div>
    </div>

    <div class="col-sm-7 col-md-6 col-lg-5">
  <div class="form-group text-center">
      <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-home"></i></span>
        </div>
        <input class="form-control" name="address" id="address" placeholder="House Number, Street, Barangay, Municipality, Province" type="text" required>
      </div>
      <p class="col-form-label text-gray">(Complete Address)</p>
      </div>
    </div>

        
      </div>



<!-- 2nd row -->
              <div class="form-row mt-3">
              <!-- address -->
                <div class="form-group col-lg-6">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                    </div>
                    <input class="form-control" placeholder="Address" type = "text" v-model="newMember.address" required>
                  </div>
                </div>
                <!-- age -->
                <div class="form-group col-lg-2 pl-5">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-satisfied"></i></span>
                    </div>
                    <input class="form-control" placeholder="Age" type="text" v-model="newMember.age" required>
                  </div>
                </div>
                <!-- gender -->
                <i class="ni ni-single-02 pl-5 ml-1 pt-3 text-gray"></i><label class="col-form-label req pl-2 text-gray">Gender</label>
                <div class="form-group col-lg-2">
            <div class="dropdown">
              <select class="custom-select" id="inputGender" v-model="newMember.gender" required>

    <option value="1-Male">1-Male</option>
    <option value="2-Female">2-Female</option>
  </select>
            </div>
                  </div>
              </div>

  <!-- 3rd row -->
            <div class="form-row">
            <!-- type -->
            <div class="form-group col-lg-3">
            <div class="dropdown">
            <i class="ni ni-tag pl-1 ml-4 text-gray"></i><label class="col-form-label req pl-2 text-gray">Student Type</label>
              <select class="custom-select" id="inputType" v-model="newMember.type" required>

    <option value="Regular">Regular</option>
    <option value="Athlete">Athlete</option>
  </select>
            </div>
                  </div>
                  <!-- Floor and Room -->
                  <div class="form-group col-lg-3">
            <div class="dropdown">
            <i class="ni ni-pin-3 pl-4 ml-1 text-gray"></i><label class="col-form-label req pl-2 text-gray">Floor Number</label>
              <select class="custom-select" id="inputFloor" v-model="newMember.floor" required>

    <option value="1st Floor">1st Floor</option>
    <option value="2nd Floor">2nd Floor</option>
    <option value="3rd Floor">3rd Floor</option>
    <option value="4th Floor">4th Floor</option>
  </select>
            </div>
                  </div>

                  <div class="form-group col-lg-3">
            <div class="dropdown">
            <i class="ni ni-app pl-4 ml-1 text-gray"></i><label class="col-form-label req pl-2 text-gray">Room Number</label>
              <select class="custom-select" id="inputRoom" v-model="newMember.room" required>

    <option value="Room 1">Room 1</option>
    <option value="Room 2">Room 2</option>
    <option value="Room 3">Room 3</option>
    <option value="Room 4">Room 4</option>
    <option value="Room 5">Room 5</option>
  </select>
            </div>
                  </div>
            <!-- payment status -->
            <div class="form-group col-lg-3">
            <div class="dropdown">
            <i class="ni ni-money-coins pl-4 ml-1 text-gray"></i><label class="col-form-label req pl-2 text-gray">Payment Status</label>
              <select class="custom-select" id="inputGender" v-model="newMember.pstatus" required>

    <option value="Non-Paying (Athlete)">Non-Paying (Athlete)</option>
    <option value="Partially Paid">Partially Paid</option>
    <option value="Fully Paid">Fully Paid</option>
  </select>
            </div>
                  </div>
                  
            </div>

<!-- 4th row -->
            <div class="form-row">
            <div class="form-group col-lg-3">
            <div class="dropdown">
            <i class="ni ni-ui-04 pl-3 ml-4 text-gray"></i><label class="col-form-label req pl-2 text-gray">Dorm Status</label>
              <select class="custom-select" id="inputStatus" v-model="newMember.status" required>

    <option value="Checked In">Checked In</option>
    <option value="Checked Out">Checked Out</option>
  </select>
            </div>
                  </div>
            </div>


                <div class="text-center">
                  <button name="login" type="button" class="btn btn-warning my-4" @click="addMember()">Register</button>
                </div>
              </form>
  	</div>
          </div>    
        </div>
        <br>
        <br>

      </div>
      
</div>
	
<?php include 'includes/scripts.php' ?>


  <!-- jQuery CDN -->
<script type="text/javascript" src="admin/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="admin/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="admin/assets/js/all.min.js"></script>
</body>
</html>


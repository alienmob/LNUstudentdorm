<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>LNU Dormitory | Email Verification</title>
  <!-- Google Font -->

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
		font-family: 'Roboto', sans-serif;
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
<div class="header bg-gradient-warning py-1">
    <div class="container">
      <div class="header-body text-center mb-9">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5 mt-5">
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
 include('includes/conn.php');
 session_start(); 

if (isset($_GET["token"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="verify")){

  
  $token = $_GET["token"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $sql = "SELECT * FROM `verification` WHERE `token`='$token' AND `email`='$email'";
  $query = $conn->query($sql);
  if($query->num_rows < 1){
   $_SESSION['expired'] = 'Email verification does not exist';
  } 
  else {
    $verifysql = "UPDATE `students` SET verified_at = '$curDate' WHERE email = '$email'";
    if($conn->query($verifysql)){
      $_SESSION['success'] = 'Email verified successfully';

      $sql = "DELETE FROM `verification` WHERE email = '$email'";
      $conn->query($sql);
    }
    else {
      $_SESSION['error'] = 'Updating verification status failed';
    }
      ?>

  <!-- Main content -->
  <div class="main-content">
    <!-- Page content -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
	  </div>
          </div>    
        </div>
      </div>
  
</div>

<?php

}

}


// Success
 if(isset($_SESSION['success'])){
  echo "
  <div class='main-content'>
  <div class='container'>
    <div class='row justify-content-center'>
      <div class='col-lg-5 col-md-7'>
        
        <div class='card bg-secondary border-0 mb-0'>

          <div class='card-body px-lg-5'>
          <div class='pb-8'>
          <img src='admin/assets/img/logo.png' class='center-lnu'>
      </div>
      

            <div class='text-center text-muted mb-4'>
              <big>Email Verification</big>
            </div>

            <div class='alert alert-success text-center'>
            <h3><i class='fas fa-check'></i> Success!</h3>
            <big>".$_SESSION['success']."</big><br><br><h2><a href='login_main.php'>Login</a></h2>","
          </div>

    </div>
    </div>
          </div>    
        </div>
      </div>
  </div>
  ";
  unset($_SESSION['success']);
}

// Expired
if(isset($_SESSION['expired'])){
    echo "
    <div class='main-content'>
  <div class='container'>
    <div class='row justify-content-center'>
      <div class='col-lg-5 col-md-7'>
        
        <div class='card bg-secondary border-0 mb-0'>

          <div class='card-body px-lg-5'>

        <div class='pb-8'>
          <img src='admin/assets/img/logo.png' class='center-lnu'>
      </div>

            <div class='text-center text-muted mb-4'>
              <big>Email Verification</big>
            </div>

            <div class='alert alert-danger text-center'>
            <h3><i class='fas fa-exclamation-triangle'></i> Error!</h3>
            <big>".$_SESSION['expired']."</big><br><br><h2><a href='index.php'>Go back</a></h2>","
          </div>


    </div>
  </div>
        </div>    
      </div>
    </div>
</div>
  ";
    unset($_SESSION['expired']);
   }

   // ERROR
 if(isset($_SESSION['error'])){
    echo "
    <div class='main-content'>
    <div class='container'>
      <div class='row justify-content-center'>
        <div class='col-lg-5 col-md-7'>
          
          <div class='card bg-secondary border-0 mb-0'>
  
            <div class='card-body px-lg-5'>
            <div class='pb-8'>
            <img src='admin/assets/img/logo.png' class='center-lnu'>
        </div>
        
  
              <div class='text-center text-muted mb-4'>
                <big>Reset Your Password</big>
              </div>
  
  
      <div class='alert alert-danger text-center'>
        <h3><i class='fas fa-exclamation-triangle'></i> Error!</h3>
        <big>".$_SESSION['error']."</big><br><br><h2><a href='index.php'>Go back</a></h2>","
      </div>
  
  
    </div>
    </div>
          </div>    
        </div>
      </div>
  </div>
    ";
    unset($_SESSION['error']);
   }
  	?>
    	


<?php include 'includes/scripts.php' ?>

<script type="text/javascript" src="admin/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="admin/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="admin/assets/js/all.min.js"></script>
</body>
</html>
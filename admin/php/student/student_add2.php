<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require '../../phpmailer/vendor/autoload.php';

 require_once '../../includes/config.php';

 include '../../includes/session.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$student_id = $_POST['student_id'];
		$rfid = $_POST['getUID2'];
		$password = $_POST['student_id'];
		$password = password_hash($password, PASSWORD_DEFAULT);
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$privilege = $_POST['privilege'];
		$bdate = $_POST['bdate'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$guardian = $_POST['guardian'];
		$guardian_contact = $_POST['guardian_contact'];
		$floor_room = $_POST['floor_room'];
		// $floors = $_POST['floor'];
		// $rooms = $_POST['room'];
		$course = $_POST['course'];
		$photo = $_POST['photo'];
		$filename = $_FILES['photo']['name'];
		
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "SELECT * FROM students WHERE student_id = '$student_id'";
        $query = $conn->query($sql);
        if ($query->num_rows > 0) {
			$row = $query->fetch_assoc();
			$_SESSION['error'] = 'Student ID "' .$row['student_id']. '" Is already in the Database';
		} else {

		$sql = "SELECT * FROM students WHERE rfid = '$rfid'";
        $query = $conn->query($sql);
        if ($query->num_rows > 0) {
			$row = $query->fetch_assoc();
			$_SESSION['error'] = 'RFID "' .$row['rfid']. '" Is already in the Database';
		} else {

		
		$sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
		LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE rooms.id = '$floor_room'";
		$query = $conn->query($sql);
				
		$brow = $query->fetch_assoc();
		$occupants = $brow['occupants'];
		$occupancy = $brow['occupancy'];
		$status = $brow['status'];
		$bid = $brow['id'];
		$floor_name = $brow['floor_name'];
		$room_name = $brow['room_name'];

		$floor_id = $brow['floor_category_id'];
		$room_id = $brow['room_category_id'];
				

			if ($occupants == $occupancy) {

	
			$_SESSION['error'] = '"' .$floor_name. '&nbsp;-&nbsp;' .$room_name. '" Is Full';

			
			}else
				if ($status == 1) {
					$_SESSION['error'] = '"' .$floor_name. '&nbsp;-&nbsp;' .$room_name. '" Is Unavailable';		
					}
			else{

				// $sql = "SELECT *, rooms.id AS ID FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
				// LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE floor_category_id = '$floors' AND room_category_id = '$rooms'";
				// $query = $conn->query($sql);
				// $row = $query->fetch_assoc();
				// $room_id = $row['ID'];

				$sql = "INSERT INTO students (student_id, rfid, password, firstname, lastname, middlename, bdate, privilege, gender, address, contact, email, guardian, guardian_contact, floor_id, room_id, actualroom_id, course_id, photo) 
				VALUES ('$student_id', '$rfid', '$password', '$firstname', '$lastname', '$middlename', '$bdate', '$privilege', '$gender', '$address', '$contact', '$email', '$guardian', '$guardian_contact', '$floor_id', '$room_id', '$floor_room', '$course', '$photo')";

				if($conn->query($sql)){

					$sql = "INSERT INTO room_report (room_id, details, reason) VALUES ('$floor_room', 'Assignment of floor and room number for `".$student_id."` ".$firstname." ".$lastname."','Approved Student Registration')";
					$conn->query($sql);

					$sql = "DELETE FROM register WHERE id = '$id'";
					$conn->query($sql);	

					$sql = "UPDATE rooms SET occupants = occupants + 1 WHERE id = '$floor_room'";
					$conn->query($sql);							
			

                    // $sql = "SELECT * FROM rooms WHERE id = '$floor_room'";
					// $query = $conn->query($sql);	
					// $row = $query->fetch_assoc();
					// $occ = $row['occupants'];
					// $sql = "INSERT INTO room_chart (room_id, occ) VALUES ('$floor_room', '$occ')";
					// $conn->query($sql);

					// Activity Log
					$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
					$query = $conn->query($sql);
					$row = $query->fetch_assoc();
					$admin = $row['id'];
				
					$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Added ``".$firstname." ".$lastname."`` to the Student record.')";
					$conn->query($sql);
					// End Activity Log
									
					$_SESSION['success'] = 'Student added successfully';


// Email Verification
     $token = md5(2418 * 2);
     $addtoken = substr(md5(uniqid(rand(),1)),3,10);
     $token = $token . $addtoken;

     $sql_insert = "INSERT INTO `verification` (`email`, `token`) VALUES ('" .$email. "', '" .$token. "')";
     
     if ($conn->query($sql_insert)) {
      $output='<p>Dear user,</p>';
      $output.='<p>Please click on the following link to Verify your Email.</p>';
      $output.='<p><a href="http://localhost/LNUstudentdorm/verify-email.php?token='.$token.'&email='.$email.'&action=verify" target="_blank">
      http://localhost/LNUstudentdorm/verify-email.php
      ?token='.$token.'&email='.$email.'&action=verify</a></p>';		
      $output.='<p>Please be sure to copy the entire link into your browser.</p>';
      $output.='<p>This is to verify if your provided email is legitimate.</p>';   	
      $output.='<p>Thanks,</p>';
      $output.='<p>Student Dormitory Administrator</p>';
      $body = $output; 
     
      $phpmailer = new PHPMailer(true);
      try {


        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = Database::USERNAME;
        $phpmailer->Password = Database::PASSWORD;
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $phpmailer->Port = 587;

      
        //Recipients
       $phpmailer->setFrom('lnustudentdorm2021@gmail.com', 'LNU Student Dormitory');
       $phpmailer->addAddress($email);     //Add a recipient
       $phpmailer->addReplyTo('lnustudentdorm2021@gmail.com', 'Information');
      
         //Content
       $phpmailer->isHTML(true);                                  //Set email format to HTML
       $phpmailer->Subject = 'Email Verification';
       $phpmailer->Body    = $body;

       $phpmailer->send();
       
       echo 'Message has been sent';
       $_SESSION['verify_success'] = 'Verification link has been sent, Check your Email!';
      } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	   $_SESSION['error'] = 'Email was not sent. Please Check your Internet Connection!';
      }
     }
     else {
      echo 'Message was not sent';
     }
// End




				}
		// 		else{
		// 	$sql = "SELECT * FROM students WHERE student_id = '$student_id'";
		// 	$query = $conn->query($sql);
		
		// $row = $query->fetch_array();

		// $_SESSION['error'] = 'Student ID "' .$row['student_id']. '" Is already in the Database';
					
		// 		}

			}
		}
			}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/student.php');
?>
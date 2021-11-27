<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include '../../includes/session.php';

require '../../phpmailer/vendor/autoload.php';

include('../../includes/conn.php');

require_once '../../includes/config.php';



if (isset($_POST['add'])) {

	$added2 = 0;
	$query = $conn->query($sql);
	if ($query->num_rows > 0) {

		$date_from = $_POST['date_from'];
		$date_to = $_POST['date_to'];
		$deadline = $_POST['deadline'];

		$sql = "SELECT * FROM students";
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
		$student_id = $row['student_id'];
		$privilege = $row['privilege'];

		if($privilege == 'Athlete'){

		$sql = "INSERT INTO paid (student_id, date_from, date_to, status) VALUES ('$student_id','$date_from','$date_to','1')";
		$conn->query($sql);
		}else{


		$sql = "INSERT INTO unpaid (student_id, date_from, date_to, deadline) VALUES ('$student_id','$date_from','$date_to','$deadline')";
		if ($conn->query($sql)) {
			
			$sql = "UPDATE unpaid SET status = $added2 WHERE student_id = '$student_id'";
			$conn->query($sql);

			$sql = "UPDATE students SET unpaid_total = unpaid_total + 1 WHERE student_id = '$student_id'";
			$conn->query($sql);

		} else {
			if (!isset($_SESSION['error'])) {
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = $conn->error;
		}
	}
}
		
// Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES 
('$admin', 'Set Payment for the month of ". date('M d, Y', strtotime($date_from)) ." to ". date('M d, Y', strtotime($date_to)) ."')";
$conn->query($sql);
// End activity log	
		

	// EMAIL

$sql = "SELECT email FROM `students` WHERE privilege = 'Non-Athlete'";
$query = $conn->query($sql);
// $query = $conn->query($sql);
// while ($row = $query->fetch_assoc()) {
 
while ($row = $query->fetch_assoc()) {
$email = $row['email'];
  $output='<p>Dear Students,</p>';
  $output.='<p>This is LNU Student Dormitory</p>';
  $output.='<h3>Payment for this month is open, kindly pay and visit the Dormitory Manager to present your Receipt.</h3>';
  $output.='<h4>Payment for '. date('M d, Y', strtotime($date_from)) .' to '. date('M d, Y', strtotime($date_to)) .'</h4>';
  $output.='<hr>';
  $output.='<h4>Deadline will be '. date('M d, Y', strtotime($deadline)) .'</h4>';
  $output.='<p>Thank You!.</p>';   	
  $output.='<p>LNU Dormitory Administrator</p>';
  $body = $output; 
 
  $phpmailer = new PHPMailer(true);
  try {
	// $phpmailer->isSMTP();
	// $phpmailer->Host = 'smtp.mailtrap.io';
	// $phpmailer->SMTPAuth = true;
	// $phpmailer->Port = 2525;
	// $phpmailer->Username = '4409643b784de2';
	// $phpmailer->Password = 'd1b16df0cff195';


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
   $phpmailer->Subject = 'LNU Dormitory Monthly Payment Notice';
   $phpmailer->Body    = $body;

   $phpmailer->send();
   
   echo 'Message has been sent';
   $_SESSION['email_success'] = 'Payment Notification sent!';
  } catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   $_SESSION['error'] = 'Email was not sent. Please Check your Internet Connection!';
  }
 }





// END EMAIL


	// $student = $_POST['student_id'];

	// $sql = "SELECT * FROM students WHERE student_id = '$student'";
	// $query = $conn->query($sql);
	// if ($query->num_rows < 1) {
	// 	if (!isset($_SESSION['error'])) {
	// 		$_SESSION['error'] = array();
	// 	}
	// 	$_SESSION['error'][] = 'Student not found';
	// } else {

	

		// $sql = "SELECT * FROM unpaid WHERE student_id = '$student'";
		// $query = $conn->query($sql);
// SMS
// $sql = "SELECT contact,'$date_from','$date_to' FROM students";
// require_once 'vendor/autoload.php';
// $messagebird = new MessageBird\Client('WZXbLqSLYKrUrq3LONsV7rub7');
// $message = new MessageBird\Objects\Message;
// $message->originator = '+639613057822';
// $message->recipients = [ '+639613057822' ];
// $message->body = 'Hi! This is LNU Student Dormitory. Payment for this month is open, kindly pay and visit the Dorm Manager to present your Receipt. Thank You!';
// $response = $messagebird->messages->create($message);
// var_dump($response);
// END SMS




		
	}

	if ($added == 0) {
		$equipments = ($added == 0) ? 'Unpaid' : 'Unpaids';
		$_SESSION['success'] = $added . ' ' . $equipments . ' Students Recorded';
	}
}
// } else {
// 	$_SESSION['error'] = 'Fill up add form first';
// }

header('location: ../../pages/unpaid.php');
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include '../../includes/session.php';

require '../../phpmailer/vendor/autoload.php';

include('../../includes/conn.php');

require_once '../../includes/config.php';

	if(isset($_POST['late'])){

            // Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Sent Email Notification to All Late Unpaid Students.')";
$conn->query($sql);
// End activity log

		// EMAIL

date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');

$sql = "SELECT * FROM unpaid LEFT JOIN students ON students.student_id=unpaid.student_id WHERE deadline < '$date'";
$query = $conn->query($sql);
// $query = $conn->query($sql);
// while ($row = $query->fetch_assoc()) {


 
while ($row = $query->fetch_assoc()) {
$email = $row['email'];




  $output='<p>Dear Students,</p>';
  $output.='<p>This is LNU Student Dormitory</p>';
  $output.='<p>Late Payment Notice for LNU Student Dormitory Boarders</p>';
  $output.='<hr>';
  $output.='<h3>ATTENTION! Please pay your remaining payment for the month of '.date('M d, Y', strtotime($row['date_from'])).' to '.date('M d, Y', strtotime($row['date_to'])).'</h3>';
  $output.='<h4>The Deadline was '.date('M d, Y', strtotime($row['deadline'])).'</h4>';

  $output.='<h3>Thank You!</h3>';   	
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
   $phpmailer->Subject = 'LNU Dormitory Late Payment Notice';
   $phpmailer->Body    = $body;

   $phpmailer->send();
   
   echo 'Message has been sent';
   $_SESSION['email_success'] = 'Notification sent!';
  } catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   $_SESSION['error'] = 'Email was not sent. Please Check your Internet Connection!';
  }
 }





// END EMAIL

if($conn->query($sql)){
    $_SESSION['success'] = 'Notification Sent!';
}
else{
    $_SESSION['error'] = $conn->error;
}
}
else{
    $_SESSION['error'] = 'There are no Late Unpaid Students on record.';
}



	header('location: ../../pages/unpaid.php');
?>